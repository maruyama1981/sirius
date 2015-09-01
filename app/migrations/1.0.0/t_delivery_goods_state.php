<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class TDeliveryGoodsStateMigration_100 extends Migration
{

    public function up()
    {
        $this->morphTable(
            't_delivery_goods_state',
            array(
            'columns' => array(
                new Column(
                    'ship_no',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'first' => true
                    )
                ),
                new Column(
                    'ship_line_no',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'size' => 32,
                        'after' => 'ship_no'
                    )
                ),
                new Column(
                    'rec_order_no',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'ship_line_no'
                    )
                ),
                new Column(
                    'rec_order_line_no',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'size' => 32,
                        'after' => 'rec_order_no'
                    )
                ),
                new Column(
                    'rec_order_ymd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'rec_order_line_no'
                    )
                ),
                new Column(
                    'ship_ymd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'rec_order_ymd'
                    )
                ),
                new Column(
                    'ship_qty',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'size' => 32,
                        'after' => 'ship_ymd'
                    )
                ),
                new Column(
                    'deli_slip_no',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'ship_qty'
                    )
                ),
                new Column(
                    'snd_kbn',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'deli_slip_no'
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
                    'rgst_date',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'size' => 1,
                        'after' => 'snd_date'
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
                    'receipt_status',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'upd_pg_id'
                    )
                ),
                new Column(
                    'receipt_date',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'size' => 1,
                        'after' => 'receipt_status'
                    )
                ),
                new Column(
                    't_order_state_comb_hkey',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'receipt_date'
                    )
                )
            ),
            'indexes' => array(
                new Index('t_delivery_goods_state_pkc', array('ship_line_no', 'ship_no'))
            ),        )
        );
    }
}
