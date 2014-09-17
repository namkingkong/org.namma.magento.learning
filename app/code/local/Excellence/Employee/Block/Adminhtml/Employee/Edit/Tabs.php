<?php
/**
 * Created by PhpStorm.
 * User: NamMA
 * Date: 9/16/14
 * Time: 3:11 AM
 */
class Excellence_Employee_Block_Adminhtml_Employee_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs {

    public function __construct() {
        parent::__construct();

        $this->setId('employee_form_tabs');
        $this->setDestElementId('employee_form');
        $this->setTitle($this->__('Employee Information'));
    }

    protected function _beforeToHtml() {
        $this->addTab('employee_section', array(
            'label'     => $this->__('Employee Information'),
            'title'     => $this->__('Employee Information'),
            'content'   => $this->getLayout()
                                ->createBlock('excellence_employee/adminhtml_employee_edit_tab_form')
                                ->toHtml()
        ));

        parent::_beforeToHtml();
    }

}