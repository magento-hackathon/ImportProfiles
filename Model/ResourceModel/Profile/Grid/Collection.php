<?php

namespace MagentoHackathon\ImportProfiles\Model\ResourceModel\Profile\Grid;

/**
 * EmailAttachment collection
 *
 * Class Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('MagentoHackathon\ImportProfiles\Model\Profile',
            'MagentoHackathon\ImportProfiles\Model\ResourceModel\Profile');
        $this->_map['fields']['id'] = 'main_table.id';
    }
}