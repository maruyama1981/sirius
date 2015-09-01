<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class MAccountMigration_100 extends Migration
{

    public function up()
    {
        $this->morphTable(
            'm_account',
            array(
            'columns' => array(
                new Column(
                    'user_id',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'first' => true
                    )
                ),
                new Column(
                    'rntl_cont_no',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'user_id'
                    )
                ),
                new Column(
                    'rntl_sect_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'rntl_cont_no'
                    )
                ),
                new Column(
                    'pass_word',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'rntl_sect_cd'
                    )
                ),
                new Column(
                    'user_name',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'pass_word'
                    )
                ),
                new Column(
                    'use_limit',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'user_name'
                    )
                ),
                new Column(
                    'err_qty',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'size' => 32,
                        'after' => 'use_limit'
                    )
                ),
                new Column(
                    'rgst_date',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'size' => 1,
                        'after' => 'err_qty'
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
                        'notNull' => true,
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
                ),
                new Column(
                    'upd_pg_id',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'upd_user_id'
                    )
                ),
                new Column(
                    'old_pass_word',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'upd_pg_id'
                    )
                ),
                new Column(
                    'last_pass_word_upd_date',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'size' => 1,
                        'after' => 'old_pass_word'
                    )
                ),
                new Column(
                    'user_type',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'last_pass_word_upd_date'
                    )
                ),
                new Column(
                    'position_name',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'user_type'
                    )
                ),
                new Column(
                    'login_err_count',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'size' => 32,
                        'after' => 'position_name'
                    )
                )
            ),
            'indexes' => array(
                new Index('m_account_pkc', array('user_id'))
            ),        )
        );
    }
}
