<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class TmpMWearerStdMigration_100 extends Migration
{

    public function up()
    {
        $this->morphTable(
            'tmp_m_wearer_std',
            array(
            'columns' => array(
                new Column(
                    'werer_cd',
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
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'werer_cd'
                    )
                ),
                new Column(
                    'rntl_sect_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'rntl_cont_no'
                    )
                ),
                new Column(
                    'job_type_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'rntl_sect_cd'
                    )
                ),
                new Column(
                    'cster_emply_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'job_type_cd'
                    )
                ),
                new Column(
                    'werer_name',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'cster_emply_cd'
                    )
                ),
                new Column(
                    'werer_name_kana',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'werer_name'
                    )
                ),
                new Column(
                    'sex_kbn',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'werer_name_kana'
                    )
                ),
                new Column(
                    'werer_sts_kbn',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'sex_kbn'
                    )
                ),
                new Column(
                    'resfl_ymd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'werer_sts_kbn'
                    )
                ),
                new Column(
                    'ship_to_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'resfl_ymd'
                    )
                ),
                new Column(
                    'ship_to_brnch_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'ship_to_cd'
                    )
                ),
                new Column(
                    'rntl_cont_no_bef',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'ship_to_brnch_cd'
                    )
                ),
                new Column(
                    'rntl_sect_cd_bef',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'rntl_cont_no_bef'
                    )
                ),
                new Column(
                    'job_type_cd_bef',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'rntl_sect_cd_bef'
                    )
                ),
                new Column(
                    'werer_sts_kbn_bef',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'job_type_cd_bef'
                    )
                ),
                new Column(
                    'resfl_ymd_bef',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'werer_sts_kbn_bef'
                    )
                ),
                new Column(
                    'order_sts_kbn',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'resfl_ymd_bef'
                    )
                ),
                new Column(
                    'upd_kbn',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'order_sts_kbn'
                    )
                ),
                new Column(
                    'web_upd_date',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'upd_kbn'
                    )
                ),
                new Column(
                    'snd_kbn',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'web_upd_date'
                    )
                ),
                new Column(
                    'snd_date',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'size' => 1,
                        'after' => 'snd_kbn'
                    )
                ),
                new Column(
                    'del_kbn',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'snd_date'
                    )
                ),
                new Column(
                    'rgst_date',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'del_kbn'
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
                new Index('tmp_m_wearer_std_pkc', array('job_type_cd', 'rntl_cont_no', 'rntl_sect_cd', 'werer_cd'))
            ),        )
        );
    }
}
