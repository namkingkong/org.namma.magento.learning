<?php
/**
 * Created by PhpStorm.
 * User: NamMA
 * Date: 9/15/14
 * Time: 3:43 AM
 */
class Excellence_Employee_Adminhtml_EmployeeController extends Mage_Adminhtml_Controller_Action {

    public function indexAction() {
        $this->loadLayout();

        $this->_addContent(
            $this->getLayout()->createBlock('excellence_employee/adminhtml_employee')
        );

        $this->renderLayout();
    }

    public function newAction() {
        $this->loadLayout();

        $this->_addContent(
            $this->getLayout()->createBlock('excellence_employee/adminhtml_employee_edit'));

        $this->_addLeft(
            $this->getLayout()->createBlock('excellence_employee/adminhtml_employee_edit_tabs'));

        $this->renderLayout();
    }

    public function editAction() {
        $id = $this->getRequest()->getParam('id');

        $model = Mage::getModel('excellence_employee/employee')->load($id);

        $this->loadLayout();

        $this->_addContent(
            $this->getLayout()
                ->createBlock('core/text')
                ->addText("<h3>Employee Name = {$model->getName()}</h3>")
        );

        $this->renderLayout();
    }

    public function deleteAction() {
        if ($id = $this->getRequest()->getParam('id')) {
            // Get session object for storing message
            $adminHtmlSession = Mage::getSingleton('adminhtml/session');

            try {
                $model = Mage::getModel('excellence_employee/employee')
                    ->setId($id)
                    ->delete();

                $adminHtmlSession->addSuccess($this->__('Employee was successfully deleted'));
                return $this->_redirect('*/*/index');
            }
            catch (Exception $ex) {
                $adminHtmlSession->addError($ex->getMessage());
                return $this->_redirect('*/*/edit', array('id' => $id));
            }
        }

        // If employee ID is not given
        Mage::getSingleton('adminhtml/session')->addError('Employee ID is required');
        return $this->_redirect('*/*/index');
    }

    public function massDeleteAction() {
        $params = $this->getRequest()->getPost();

        echo '<pre>';
        var_dump($params);
    }

    public function massStatusAction() {
        $params = $this->getRequest()->getPost();

        echo '<pre>';
        var_dump($params);
    }

}