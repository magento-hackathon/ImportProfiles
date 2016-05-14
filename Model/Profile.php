<?php

namespace MagentoHackathon\ImportProfiles\Model;

class Profile extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('MagentoHackathon\ImportProfiles\Model\ResourceModel\Profile');
    }
}