<?php

namespace Application\Sonata\UserBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\Config\FileLocator;
use Sonata\UserBundle\DependencyInjection\SonataUserExtension as BaseExtension;

use Sonata\EasyExtendsBundle\Mapper\DoctrineCollector;

/**
 *
 * @author     Thomas Rabaix <thomas.rabaix@sonata-project.org>
 */
class ApplicationSonataUserExtension extends BaseExtension
{

    /**
     *
     * @param array            $configs   An array of configuration settings
     * @param ContainerBuilder $container A ContainerBuilder instance
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        parent::load($configs, $container);

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config/service'));
        $loader->load('admin.xml');
        $loader->load('blocks.xml');
    }
}
