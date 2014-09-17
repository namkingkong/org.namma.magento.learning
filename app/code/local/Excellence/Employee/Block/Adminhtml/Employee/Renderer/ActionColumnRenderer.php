<?php
/**
 * Created by PhpStorm.
 * User: NamMA
 * Date: 9/15/14
 * Time: 5:04 AM
 */
class Excellence_Employee_Block_Adminhtml_Employee_Renderer_ActionColumnRenderer
        extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Text {

    public function render(Varien_Object $row) {
        $url = $this->getUrl('*/*/delete', array('id' => $row->getId()));
        return "<a href='{$url}'>Remove</a>";
    }

}