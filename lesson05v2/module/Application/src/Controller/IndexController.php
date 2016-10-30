<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Validator\Digits;
use Zend\I18n\Validator\Alpha;
use Zend\Validator\EmailAddress;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $data = [];

        $request = $this->getRequest();

        $uname = $request->getPost('uname');
        $emailAddress = $request->getPost('emailAddress');
        $age = $request->getPost('age');

        $alphaValidator = new Alpha();
        $emailAddressValidator = new EmailAddress();
        $digitsValidator = new Digits();

        if ($request->isPost()) {

            $data['uname'] = $uname;
            $data['emailAddress'] = $emailAddress;
            $data['age'] = $age;

            if (!$alphaValidator->isValid($uname)) {
                $data['message'] = 'Invalid UserName entered...must be Alpha with no spaces.  Try again';
            } elseif (!$emailAddressValidator->isValid($emailAddress)) {
                $data['message'] = 'Invalid Email Address entered...must be entered and a Valid formatted email.  Try again';
            } elseif (!$digitsValidator->isValid($age)) {
                $data['message'] = 'Invalid Age entered...must be 1 or more digits!  Try again';
            } else {
                $data['message'] = 'Congratulations!!  You are now logged in with the following information:';
            }
        }

        return new ViewModel($data);

    }

    public function twoAction()
    {
        return new ViewModel();
    }


    public function threeAction()
    {
        return new ViewModel();
    }

}

