<?php
/**
 * Created by PhpStorm.
 * User: NamMA
 * Date: 9/16/14
 * Time: 2:24 AM
 */
class Excellence_Employee_Block_Adminhtml_Employee_Edit extends Mage_Adminhtml_Block_Widget_Form_Container {

    public function __construct() {
        parent::__construct();

        $this->_objectId = 'id';

        $this->_blockGroup = 'excellence_employee';
        $this->_controller = 'adminhtml_employee';

        $this->_updateButton('save', 'label', $this->__('Save'));
        $this->_updateButton('delete', 'label', $this->__('Remove'));

        $this->_addButton('btnSaveAndContinue', array(
            'label'     => $this->__('Save and Continue'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save'
        ), 100);
    }

    public function getHeaderText() {
        return $this->__('Employee Form Container');
    }

}