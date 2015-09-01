<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class TmpMJobTypeMigration_100 extends Migration
{

    public function up()
    {
        $this->morphTable(
            'tmp_m_job_type',
            array(
            'columns' => array(
                new Column(
                    'rntl_cont_no',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'first' => true
                    )
                ),
                new Column(
                    'job_type_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'rntl_cont_no'
                    )
                ),
                new Column(
                    'job_type_name',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'job_type_cd'
                    )
                ),
                new Column(
                    'rgst_date',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'size' => 1,
                        'after' => 'job_type_name'
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
                )
            ),
            'indexes' => array(
                new Index('tmp_m_job_type_pkc', array('job_type_cd', 'rntl_cont_no'))
            ),        )
        );
    }
}
