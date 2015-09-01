<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class TLogMigration_100 extends Migration
{

    public function up()
    {
        $this->morphTable(
            't_log',
            array(
            'columns' => array(
                new Column(
                    'log_id',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'autoIncrement' => true,
                        'size' => 32,
                        'first' => true
                    )
                ),
                new Column(
                    'scr_name',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'log_id'
                    )
                ),
                new Column(
                    'log_type',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'size' => 32,
                        'after' => 'scr_name'
                    )
                ),
                new Column(
                    'log_level',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'size' => 32,
                        'after' => 'log_type'
                    )
                ),
                new Column(
                    'user_id',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'log_level'
                    )
                ),
                new Column(
                    'ctrl_date',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'user_id'
                    )
                ),
                new Column(
                    'access_url',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'ctrl_date'
                    )
                ),
                new Column(
                    'post_param',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'access_url'
                    )
                ),
                new Column(
                    'ip_address',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'post_param'
                    )
                ),
                new Column(
                    'user_agent',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'ip_address'
                    )
                ),
                new Column(
                    'memo',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'user_agent'
                    )
                )
            ),
            'indexes' => array(
                new Index('t_log_pkc', array('log_id'))
            ),        )
        );
    }
}
