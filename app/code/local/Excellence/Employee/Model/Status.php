<?php
/**
 * Created by PhpStorm.
 * User: NamMA
 * Date: 9/15/14
 * Time: 4:36 AM
 */
class Excellence_Employee_Model_Status extends Varien_Object {

    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;

    public function getOptionArray() {
        return array(
            self::STATUS_ENABLED    => Mage::helper('excellence_employee')->__('Enabled'),
            self::STATUS_DISABLED   => Mage::helper('excellence_employee')->__('Disabled')
        );
    }

}