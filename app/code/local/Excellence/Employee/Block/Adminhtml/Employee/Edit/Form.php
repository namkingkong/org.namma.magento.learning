<?php
/**
 * Created by PhpStorm.
 * User: NamMA
 * Date: 9/16/14
 * Time: 2:37 AM
 */
class Excellence_Employee_Block_Adminhtml_Employee_Edit_Form extends Mage_Adminhtml_Block_Widget_Form {

    protected function _prepareForm() {
        // Define a new form instance
        $form = new Varien_Data_Form(array(
            'id'        => 'employee_form',
            'action'    => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method'    => 'POST',
            'enctype'   => 'multipart/form-data'
        ));

        $form->setUseContainer(true);

        $this->setForm($form);

        return parent::_prepareForm();
    }

}