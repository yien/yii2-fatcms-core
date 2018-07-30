<?php
namespace fatcms\core\db;

use yii\db\Migration as BaseMigration;

class Migration extends BaseMigration
{
    /**
     * table Options
     *
     * @var null
     */
    public $tableOptions = null;

    /**
     * table engine
     *
     * @var bool
     */
    public $useTransaction = false;

    public function init()
    {
        parent::init();

        if ($this->db->driverName == 'mysql') {
            $engine = $this->useTransaction ? 'InnoDB' : 'MyISAM';
            $this->tableOptions = "CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci ENGINE={$engine}";
        }

    }
}