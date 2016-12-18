<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class GalleryController extends AbstractActionController
{
    public function indexAction()
    {
        $this->layout()->galleryLinkActive = true;
        $files = scandir(getcwd() . '/public/img/thumbnails/');


        unset($files[0], $files[1]);

/*        foreach ($files as $filename)   {
            $myFiles[] = $filename;
        }*/

//        return new ViewModel(['myFiles' => $myFiles]);
        return new ViewModel(['files' => $files]);
    }

    public function detailsAction()
    {
//        echo $this->getRequest()->getQuery('id');
//        echo $this->params()->fromRoute('id');
        $file = $this->getRequest()->getQuery('id');
        $fileName[] = ['id' => $file];
        var_dump($fileName);
        return new ViewModel($fileName);
    }
}