<?php

$options = array(
    'env' => 'dev',
);

foreach ($options as $name => $value)
{
    foreach ($argv as $arg)
    {
        if (preg_match('/^--' . $name . '=(.+)$/', $arg, $matches))
        {
            $options[$name] = $matches[1];
        }
    }
}

$commands = array(
  'Setting acl permissions on files in app/cache & app/log'
    => 'sudo setfacl -R -m u:www-data:rwx -m u:`whoami`:rwx app/cache app/logs',
  'Setting acl permissions on dirs app/cache & app/log'
    => 'sudo setfacl -dR -m u:www-data:rwx -m u:`whoami`:rwx app/cache app/logs',
  'Clear the cache'
    => '/usr/bin/php app/console cache:clear --env=' . $options['env']
);

$success = true;
$return = null;
$output = array();

foreach ($commands as $action => $command)
{
  $output[] = $command;
  print("$action ($command)... ");flush();
  exec($command, $output, $return);
  print("done. status: $return\n");flush();

  if ($return != 0)
  {
    $success = false;
  }
}

if (!check_homepage())
{
  $success = false;
  $output[] = 'Failed homepage status check';
}

file_put_contents('post-deploy-output.txt', implode("\n", $output));

file_put_contents('post-deploy-result.txt', $success ? 'success' : 'failed');

function check_homepage()
{
  $handle = curl_init('http://preview.localhost');
  curl_setopt($handle,  CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($handle);
  $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
  
  return $httpCode == 200;
}

