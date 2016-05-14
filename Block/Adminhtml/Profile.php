<?php

namespace MagentoHackathon\ImportProfiles\Block\Adminhtml;

class Profile extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_profile';
        $this->_blockGroup = 'MagentoHackathon_ImportProfiles';
        $this->_headerText = __('ImportProfiles');
        $this->_addButtonLabel = __('Add New Profile');
        parent::_construct();
        if ($this->_isAllowedAction('MagentoHackathon_ImportProfiles::save')) {
            $this->buttonList->update('add', 'label', __('Add New Profile'));
        } else {
            $this->buttonList->remove('add');
        }
    }

    /**
     * Check permission for passed action
     *
     * @param string $resourceId
     * @return bool
     */
    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
}