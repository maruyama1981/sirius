<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class MWearerItemMigration_100 extends Migration
{

    public function up()
    {
        $this->morphTable(
            'm_wearer_item',
            array(
            'columns' => array(
                new Column(
                    'm_wearer_item_comb_hkey',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'first' => true
                    )
                ),
                new Column(
                    'werer_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'm_wearer_item_comb_hkey'
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
                    'job_type_item_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'job_type_cd'
                    )
                ),
                new Column(
                    'item_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'job_type_item_cd'
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
                    'size_two_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'size_cd'
                    )
                ),
                new Column(
                    'input_qty',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'size' => 32,
                        'after' => 'size_two_cd'
                    )
                ),
                new Column(
                    'order_sts_kbn',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'input_qty'
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
                    'm_wearer_std_comb_hkey',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'm_section_comb_hkey'
                    )
                )
            ),
            'indexes' => array(
                new Index('m_wearer_item_pkc', array('color_cd', 'item_cd', 'job_type_cd', 'job_type_item_cd', 'm_wearer_item_comb_hkey', 'rntl_cont_no', 'rntl_sect_cd', 'size_cd', 'size_two_cd', 'werer_cd'))
            ),        )
        );
    }
}
