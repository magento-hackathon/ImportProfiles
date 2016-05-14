<?php

namespace MagentoHackathon\ImportProfiles\Model\ResourceModel\Profile;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('MagentoHackathon\ImportProfiles\Model\Profile',
            'MagentoHackathon\ImportProfiles\Model\ResourceModel\Profile');
    }
}