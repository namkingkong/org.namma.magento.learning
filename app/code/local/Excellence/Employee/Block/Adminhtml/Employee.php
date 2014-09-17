<?php
/**
 * Created by PhpStorm.
 * User: NamMA
 * Date: 9/15/14
 * Time: 3:20 AM
 */
class Excellence_Employee_Block_Adminhtml_Employee extends Mage_Adminhtml_Block_Widget_Grid_Container {

    public function __construct() {
        $this->_blockGroup = 'excellence_employee';
        $this->_controller = 'adminhtml_employee';

        $this->_headerText = $this->__('Employee Manager');
        $this->_addButtonLabel = $this->__('Add New Employee');

        // This line of code MUST be following that 4 lines of code
        parent::__construct();
    }
}