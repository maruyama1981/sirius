<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class TmpMSectionMigration_100 extends Migration
{

    public function up()
    {
        $this->morphTable(
            'tmp_m_section',
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
                    'rntl_sect_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'rntl_cont_no'
                    )
                ),
                new Column(
                    'rntl_sect_name',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'rntl_sect_cd'
                    )
                ),
                new Column(
                    'std_ship_to_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'rntl_sect_name'
                    )
                ),
                new Column(
                    'std_ship_to_brnch_cd',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'size' => 1,
                        'after' => 'std_ship_to_cd'
                    )
                ),
                new Column(
                    'rgst_date',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'size' => 1,
                        'after' => 'std_ship_to_brnch_cd'
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
                new Index('tmp_m_section_pkc', array('rntl_cont_no', 'rntl_sect_cd'))
            ),        )
        );
    }
}
