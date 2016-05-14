<?php
namespace MagentoHackathon\ImportProfiles\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * InstallSchema.
 *
 * @uses InstallSchemaInterface
 */
class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '1.0.1') < 0) {
            $table = $setup->getConnection()->newTable($setup->getTable('imex_profile'))
                ->addColumn(
                    'id',
                    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    null,
                    ['identity' => true, 'nullable' => false, 'primary' => true, 'auto_increment' => true]
                )
                ->addColumn(
                    'name',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    255,
                    ['nullable' => false]
                )
                ->addColumn(
                    'type',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    128,
                    ['nullable' => false]
                )
                ->addColumn(
                    'mapping',
                    \Magento\Framework\DB\Ddl\Table::TYPE_BLOB,
                    null,
                    ['nullable' => false]
                );
            $setup->getConnection()->createTable($table);
        }
        $setup->endSetup();
    }
}
