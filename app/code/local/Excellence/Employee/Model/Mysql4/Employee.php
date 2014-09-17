<?php
/**
 * Created by PhpStorm.
 * User: NamMA
 * Date: 9/15/14
 * Time: 3:50 AM
 */
class Excellence_Employee_Model_Mysql4_Employee extends Mage_Core_Model_Mysql4_Abstract {

    protected function _construct() {
        $this->_init('excellence_employee/employee', 'id');
    }

}