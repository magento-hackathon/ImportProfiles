<?php
namespace MagentoHackathon\ImportProfiles\Model\ResourceModel;

/**
 * EmailAttachment mysql resource
 */
class Profile extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('imex_profile', 'id');
    }
}