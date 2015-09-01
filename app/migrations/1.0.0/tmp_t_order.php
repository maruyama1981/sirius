<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class TmpTOrderMigration_100 extends Migration
{

    public function up()
    {
        $this->morphTable(
            'tmp_t_order',
            array(
            'columns' => array(
                new Column(
                    'order_req_no',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'first' => true
                    )
                ),
                new Column(
                    'order_req_line_no',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'size' => 32,
                        'after' => 'order_req_no'
                    )
                ),
                new Column(
                    'order_req_ymd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'order_req_line_no'
                    )
                ),
                new Column(
                    'order_kbn',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'order_req_ymd'
                    )
                ),
                new Column(
                    'rntl_cont_no',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'order_kbn'
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
                    'job_type_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'rntl_sect_cd'
                    )
                ),
                new Column(
                    'job_type_item_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'job_type_cd'
                    )
                ),
                new Column(
                    'werer_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'job_type_item_cd'
                    )
                ),
                new Column(
                    'item_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'werer_cd'
                    )
                ),
                new Column(
                    'color_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'item_cd'
                    )
                ),
                new Column(
                    'size_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'color_cd'
                    )
                ),
                new Column(
                    'size_two_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'size_cd'
                    )
                ),
                new Column(
                    'whse_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'size_two_cd'
                    )
                ),
                new Column(
                    'stk_usr_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'whse_cd'
                    )
                ),
                new Column(
                    'stk_usr_brnch_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'stk_usr_cd'
                    )
                ),
                new Column(
                    'ship_to_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'stk_usr_brnch_cd'
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
                    'order_qty',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'size' => 32,
                        'after' => 'ship_to_brnch_cd'
                    )
                ),
                new Column(
                    'memo',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'order_qty'
                    )
                ),
                new Column(
                    'werer_name',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'memo'
                    )
                ),
                new Column(
                    'cster_emply_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'werer_name'
                    )
                ),
                new Column(
                    'werer_sts_kbn',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'cster_emply_cd'
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
                    'order_sts_kbn',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'resfl_ymd'
                    )
                ),
                new Column(
                    'snd_kbn',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'order_sts_kbn'
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
                    'order_status',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'upd_pg_id'
                    )
                )
            ),
            'indexes' => array(
                new Index('tmp_t_order_pkc', array('order_req_line_no', 'order_req_no'))
            ),        )
        );
    }
}
