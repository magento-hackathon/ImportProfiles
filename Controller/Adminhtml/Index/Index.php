<?php

namespace MagentoHackathon\ImportProfiles\Controller\Adminhtml\Index;

class Index extends \Magento\Backend\App\Action
{
    /**
     * EmailAttachment List action
     *
     * @return void
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_setActiveMenu(
            'MagentoHackathon_ImportProfiles::Profiles_manage'
        )->_addBreadcrumb(
            __('Profiles'),
            __('Profiles')
        )->_addBreadcrumb(
            __('Manage Profiles'),
            __('Manage Profiles')
        );
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Profiles'));
        $this->_view->renderLayout();
    }

    /**
     * Check the permission to run it
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('MagentoHackathon_ImportProfiles::Profiles_manage');
    }
}