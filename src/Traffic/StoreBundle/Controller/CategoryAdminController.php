<?php
/**
 * Description of LearningStructureAdminController
 *
 * @author bartek
 */
namespace Traffic\StoreBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Sonata\AdminBundle\Exception\ModelManagerException;
use Symfony\Component\HttpFoundation\Request;
use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;
use Symfony\Component\Routing\Annotation\Route;


class CategoryAdminController extends Controller {

    
    /**
     * return the Response object associated to the list action
     *
     * @throws \Symfony\Component\Security\Core\Exception\AccessDeniedException
     *
     * @return Response
     */
    public function listAction()
    {
        if (false === $this->admin->isGranted('LIST')) {
            throw new AccessDeniedException();
        }

        $options = array(
            'decorate' => true,
            'rootOpen' => '<ol>',
            'rootClose' => '</ol>',
            'childOpen' => function($node) {
                return '<li id="'.$node['id'].'" lft="'.$node['lft'].'" rgt="'.$node['rgt'].'" lvl="'.$node['lvl'].'" class="tree-node">';
            },
            'childClose' => '</li>',
            'nodeDecorator' => function($node) {
                return '<div><span class="disclose"><span></span></span><span>'.$node['name'].'</span></div>';
            }
        );
        $repo = $this->admin->getObjectRepository();
        
        $htmlTree = $repo->childrenHierarchy(
            null, /* starting from root nodes */
            false, /* load all children, not only direct */
            $options
        );
        
        
        return $this->render($this->admin->getTemplate('tree'), array(
            'action' => 'list',
            'tree' => $htmlTree
        ));
    }
    
    
    public function treeRenameAction(Request $request){
        $ls_manager = $this->get('traffic.store.category.manager');
        
        $ls_manager->rename($request->get('node'), $request->get('name'));
        
        $response = new Response(json_encode(true));
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;

    }
    
    
    public function treeRemoveAction(Request $request){
        $ls_manager = $this->get('traffic.store.category.manager');
        $node = $ls_manager->findById($request->get('node'));
        
        $this->admin->getObjectRepository()->removeFromTree($node);
        
        $response = new Response(json_encode(true));
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;

    }
    
    
    public function treeAddAction(Request $request){
        $ls_manager = $this->get('traffic.store.category.manager');
        
        $parent = $ls_manager->findById($request->get('parent'));
        
        $node = $ls_manager->create('New Category');
        
        if($parent instanceof LearningStructure){
            $this->admin->getObjectRepository()->persistAsLastChildOf($node, $parent);
        }else{
            $this->admin->getObjectRepository()->persistAsLastChild($node);
        }
        $this->getDoctrine()->getEntityManager()->flush();
        
        $response = new Response(json_encode($node->getId()));
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;

    }
    
    
    public function treeMoveAction(Request $request){
        $ls_manager = $this->get('traffic.store.category.manager');
        $ls_manager->move($request);
        
        
        $response = new Response(json_encode(true));
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;

    }
    
    

}