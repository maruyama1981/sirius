<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class TInfoMigration_100 extends Migration
{

    public function up()
    {
        $this->morphTable(
            't_info',
            array(
            'columns' => array(
                new Column(
                    'index',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'autoIncrement' => true,
                        'size' => 32,
                        'first' => true
                    )
                ),
                new Column(
                    'message',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'index'
                    )
                ),
                new Column(
                    'display_order',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'size' => 32,
                        'after' => 'message'
                    )
                ),
                new Column(
                    'open_date',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'display_order'
                    )
                ),
                new Column(
                    'close_date',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'open_date'
                    )
                ),
                new Column(
                    'rgst_date',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'size' => 1,
                        'after' => 'close_date'
                    )
                ),
                new Column(
                    'rgst_user_id',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'rgst_date'
                    )
                ),
                new Column(
                    'upd_date',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'size' => 1,
                        'after' => 'rgst_user_id'
                    )
                ),
                new Column(
                    'upd_user_id',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'upd_date'
                    )
                )
            ),
            'indexes' => array(
                new Index('t_info_pkc', array('index'))
            ),        )
        );
    }
}
