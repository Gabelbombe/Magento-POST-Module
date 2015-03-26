<?php
Class Ehime_Postmodule_IndexController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->_addContent(
            $this->getLayout()->createBlock('core/text', 'tester-block')->setText(
                '<h1>Werks</h1>' // idk, maybe just set it here...
            )
        );

        $this->_setActiveMenu('tester_menu')->renderLayout();
    }
}