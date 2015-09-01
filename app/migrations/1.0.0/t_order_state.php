<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class TOrderStateMigration_100 extends Migration
{

    public function up()
    {
        $this->morphTable(
            't_order_state',
            array(
            'columns' => array(
                new Column(
                    't_order_state_comb_hkey',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'first' => true
                    )
                ),
                new Column(
                    'rec_order_no',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 't_order_state_comb_hkey'
                    )
                ),
                new Column(
                    'rec_order_line_no',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'size' => 32,
                        'after' => 'rec_order_no'
                    )
                ),
                new Column(
                    'order_req_no',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'rec_order_line_no'
                    )
                ),
                new Column(
                    'order_req_line_no',
                    array(
                        'type' => Column::TYPE_INTEGER,
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
                    'rec_order_ymd',
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
                        'after' => 'rec_order_ymd'
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
                    'cster_emply_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'werer_cd'
                    )
                ),
                new Column(
                    'item_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'cster_emply_cd'
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
                    'cust_to_brnch_name1',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'ship_to_brnch_cd'
                    )
                ),
                new Column(
                    'cust_to_brnch_name2',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'cust_to_brnch_name1'
                    )
                ),
                new Column(
                    'zip_no',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'cust_to_brnch_name2'
                    )
                ),
                new Column(
                    'address1',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'zip_no'
                    )
                ),
                new Column(
                    'address2',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'address1'
                    )
                ),
                new Column(
                    'address3',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'address2'
                    )
                ),
                new Column(
                    'address4',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'address3'
                    )
                ),
                new Column(
                    'order_qty',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'size' => 32,
                        'after' => 'address4'
                    )
                ),
                new Column(
                    'ship_qty',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'size' => 32,
                        'after' => 'order_qty'
                    )
                ),
                new Column(
                    'ship_ymd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'ship_qty'
                    )
                ),
                new Column(
                    'rgst_date',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'size' => 1,
                        'after' => 'ship_ymd'
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
                    'm_item_comb_hkey',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'upd_pg_id'
                    )
                ),
                new Column(
                    'm_job_type_comb_hkey',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'm_item_comb_hkey'
                    )
                ),
                new Column(
                    'm_section_comb_hkey',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'm_job_type_comb_hkey'
                    )
                ),
                new Column(
                    't_order_comb_hkey',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'm_section_comb_hkey'
                    )
                ),
                new Column(
                    'm_wearer_item_comb_hkey',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 't_order_comb_hkey'
                    )
                )
            ),
            'indexes' => array(
                new Index('t_order_state_pkc', array('rec_order_line_no', 'rec_order_no', 't_order_state_comb_hkey'))
            ),        )
        );
    }
}
