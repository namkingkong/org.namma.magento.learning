<?php
/**
 * Created by PhpStorm.
 * User: NamMA
 * Date: 9/15/14
 * Time: 3:27 AM
 */
class Excellence_Employee_Block_Adminhtml_Employee_Grid extends Mage_Adminhtml_Block_Widget_Grid {

    public function __construct() {
        // Now this line of code MUST be called FIRST
        parent::__construct();

        $this->setId('employee_grid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('desc');
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection() {
        $this->setCollection(
            Mage::getModel('excellence_employee/employee')->getCollection()
        );

        return parent::_prepareCollection();
    }

    protected function _prepareMassaction() {
        $this->setMassactionIdField('employee_grid_massaction');

        // Set massaction-url-param-name
        $this->getMassactionBlock()->setFormFieldName('id');

        // Add a massive-deletion button
        $this->getMassactionBlock()
            ->addItem('delete', array(
                'label'     => $this->__('Remove Selected Employees'),
                'url'       => $this->getUrl('*/*/massDelete'),
                'confirm'   => $this->__('Sure, hey?'),
            ));

        // Prepare data for the massive-status-changing button (just down there...)
        $statuses = array(
            array('value' => 1, 'label' => $this->__('Enabled')),
            array('value' => 0, 'label' => $this->__('Disabled'))
        );

        // Add a massive-status-changing button
        $this->getMassactionBlock()
            ->addItem('status', array(
                'label'     => $this->__('Change status'),
                'url'       => $this->getUrl('*/*/massStatus', array('_current' => true)),
                'additional'=> array(
                    'cmbStatus' => array(
                        'name'  => 'status',
                        'type'  => 'select',
                        'class' => 'required-entry',
                        'label' => $this->__('Status'),
                        'values'=> $statuses
                    ),
//                    'txtStatus2' => array(
//                        'name'  => 'status2',
//                        'type'  => 'text',
//                        'class' => 'required-entry',
//                        'label' => $this->__('Status 2'),
//                        'class' => 'required-entry'
//                    )
                )
            ));

        return parent::_prepareMassaction();
    }

    protected function _prepareColumns() {
        $this->addColumn('id', array(
            'header'    => $this->__('Employee ID'),
            'align'     => 'right',
            'index'     => 'id'
        ));

        $this->addColumn('name', array(
            'header'    => $this->__('Employee Name'),
            'index'     => 'name'
        ));

        $this->addColumn('content', array(
            'header'    => $this->__('Content'),
            'index'     => 'content'
        ));

        $this->addColumn('type', array(
            'header'    => $this->__('Employee Type'),
            'index'     => 'type',
            'type'      => 'options',
            'options'   => array(
                1   => 'Normal',
                2   => 'Admin',
                3   => 'Guest'
            )
        ));

        $this->addColumn('status', array(
            'header'    => $this->__('Status'),
            'index'     => 'status',
            'type'      => 'options',
            'options'   => array(
                true    => 'Enabled',
                false   => 'Disabled'
            )
        ));

        $this->addColumn('action', array(
            'header'    => 'Action',
            'type'      => 'action',
            'getter'    => 'getId',
            'actions'   => array(
                array(
                    'caption'   => $this->__(Edit),
                    'url'       => $this->getUrl('*/*/edit'),
                    'field'     => 'id'
                ),
                array(
                    'caption'   => $this->__('Remove'),
                    'url'       => $this->getUrl('*/*/delete'),
                    'field'     => 'id'
                )
            ),
            'filter'    => false,
            'sortable'  => false
        ));
    }

    public function getRowUrl($row) {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}