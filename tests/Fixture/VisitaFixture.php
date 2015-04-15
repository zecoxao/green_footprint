<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VisitaFixture
 *
 */
class VisitaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'visita';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'data' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'empresa' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'profissional' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'equipamento' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'empresa' => ['type' => 'index', 'columns' => ['empresa'], 'length' => []],
            'profissional' => ['type' => 'index', 'columns' => ['profissional'], 'length' => []],
            'equipamento' => ['type' => 'index', 'columns' => ['equipamento'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'visita_ibfk_1' => ['type' => 'foreign', 'columns' => ['empresa'], 'references' => ['empresa', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'visita_ibfk_2' => ['type' => 'foreign', 'columns' => ['profissional'], 'references' => ['profissional', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'visita_ibfk_3' => ['type' => 'foreign', 'columns' => ['equipamento'], 'references' => ['equipamento', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
'engine' => 'InnoDB', 'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'data' => '2015-04-15',
            'empresa' => 1,
            'profissional' => 1,
            'equipamento' => 1
        ],
    ];
}
