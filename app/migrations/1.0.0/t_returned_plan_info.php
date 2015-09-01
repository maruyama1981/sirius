<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class TReturnedPlanInfoMigration_100 extends Migration
{

    public function up()
    {
        $this->morphTable(
            't_returned_plan_info',
            array(
            'columns' => array(
                new Column(
                    't_returned_plan_info_comb_hkey',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'first' => true
                    )
                ),
                new Column(
                    'order_no',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 't_returned_plan_info_comb_hkey'
                    )
                ),
                new Column(
                    'item_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'order_no'
                    )
                ),
                new Column(
                    'color_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'item_cd'
                    )
                ),
                new Column(
                    'size_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'color_cd'
                    )
                ),
                new Column(
                    'cster_emply_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'size_cd'
                    )
                ),
                new Column(
                    'rntl_sect_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'cster_emply_cd'
                    )
                ),
                new Column(
                    'rent_pattern_code',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'rntl_sect_cd'
                    )
                ),
                new Column(
                    'order_date',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'rent_pattern_code'
                    )
                ),
                new Column(
                    'rerutn_status',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'order_date'
                    )
                ),
                new Column(
                    'order_kbn',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'rerutn_status'
                    )
                ),
                new Column(
                    'rerutn_plan_qty',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'size' => 32,
                        'after' => 'order_kbn'
                    )
                )
            ),
            'indexes' => array(
                new Index('t_returned_plan_info_pkc', array('color_cd', 'item_cd', 'order_no', 'size_cd', 't_returned_plan_info_comb_hkey'))
            ),        )
        );
    }
}
