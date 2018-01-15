<?php

namespace Enenos\Slider\Controller;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;


class SliderController extends ActionController {
    
    /**
     * Main function of the controller.
     * 
     * @param 
     * @return void
     *  
     * 
     */
    public function initializeAction() {

        $str = 'hello world';
        $this->view->assign($str, 'hello');        
    }
}