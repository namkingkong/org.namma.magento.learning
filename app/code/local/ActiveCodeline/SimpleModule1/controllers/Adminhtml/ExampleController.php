<?php
/**
 * Created by PhpStorm.
 * User: NamMA
 * Date: 9/15/14
 * Time: 3:02 AM
 */
class ActiveCodeline_SimpleModule1_Adminhtml_ExampleController extends Mage_Adminhtml_Controller_Action {

    public function indexAction() {
        // Fetch display
        $this->loadLayout();

        // Inject a new block into display
        $this->_addContent(
            $this->getLayout()->createBlock('core/text')->setText('<h1>Hello, World!</h1>')
        );

        // Output display
        $this->renderLayout();
    }

}