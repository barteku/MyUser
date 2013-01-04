<?php
namespace Application\Sonata\UserBundle\Block;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Admin\Pool;

use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\BlockBundle\Block\BaseBlockService;

class SearchBlockService extends BaseBlockService
{
    
    function getDefaultSettings()
    {
        return array(
            'title'   => 'Search'
        );
    }
    
    
    public function buildEditForm(FormMapper $formMapper, BlockInterface $block)
    {
       $formMapper->add('settings', 'sonata_type_immutable_array', array(
                'keys' => array(
                    array('url', 'url', array('required' => false)),
                    array('title', 'text', array('required' => false)),
                )
           ));
    }
    
    
    function validateBlock(ErrorElement $errorElement, BlockInterface $block)
    {
        
    
    }
    
    public function execute(BlockInterface $block, Response $response = null)
    {
        $settings = array_merge($this->getDefaultSettings(), $block->getSettings());
        return $this->renderResponse('ApplicationSonataUserBundle:Blocks:search.html.twig', array(
                
            'block'     => $block,
            'settings'  => $settings
    
        ), $response);
        
    }

}