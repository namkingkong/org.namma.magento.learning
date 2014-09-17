<?php
/**
 * Created by PhpStorm.
 * User: NamMA
 * Date: 9/16/14
 * Time: 3:19 AM
 */
class Excellence_Employee_Block_Adminhtml_Employee_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form {

    protected function _prepareForm() {
        $form = new Varien_Data_Form();

        $this->setForm($form);

        $fieldset = $form->addFieldset('employee_form', array(
            'legend' => $this->__('Employee_Information')
        ));

        $fieldset->addField('name', 'text', array(
            'name'      => 'name',
            'label'     => 'Employee Name',
            'class'     => 'required-entry',
            'required'  => true
        ));

        $fieldset->addField('type', 'select', array(
            'name'      => 'type',
            'label'     => 'Employee Type',
            'class'     => 'required-entry',
            'required'  => true,
            'values'    => array(
                array('value' => '1', 'label' => $this->__('Normal')),
                array('value' => '2', 'label' => $this->__('Admin')),
                array('value' => '3', 'label' => $this->__('Guest'))
            )
        ));

        $fieldset->addField('content', 'textarea', array(
            'name'      => 'content',
            'label'     => $this->__('Content')
        ));

        $fieldset->addField('status', 'checkbox', array(
            'name'      => 'is_active',
            'label'     => $this->__('Is Active')
        ));

        return parent::_prepareForm();
    }

}