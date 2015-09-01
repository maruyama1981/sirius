<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class TmpTSdmzkMigration_100 extends Migration
{

    public function up()
    {
        $this->morphTable(
            'tmp_t_sdmzk',
            array(
            'columns' => array(
                new Column(
                    'zkzkcd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'first' => true
                    )
                ),
                new Column(
                    'zkwhcd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'zkzkcd'
                    )
                ),
                new Column(
                    'zkprcd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'zkwhcd'
                    )
                ),
                new Column(
                    'zkclor',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'zkprcd'
                    )
                ),
                new Column(
                    'zksize',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'zkclor'
                    )
                ),
                new Column(
                    'zkrc2',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'size' => 32,
                        'after' => 'zksize'
                    )
                ),
                new Column(
                    'label',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'zkrc2'
                    )
                ),
                new Column(
                    'zk_status_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'label'
                    )
                ),
                new Column(
                    'rent_pattern_data',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'zk_status_cd'
                    )
                )
            ),
            'indexes' => array(
                new Index('tmp_t_sdmzk_pkc', array('zkclor', 'zkprcd', 'zksize', 'zkwhcd', 'zkzkcd'))
            ),        )
        );
    }
}
