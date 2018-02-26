<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CodigopaisFixture
 *
 */
class CodigopaisFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cpais' => ['type' => 'string', 'length' => 4, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'xpais' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cpais'], 'length' => []],
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
            'cpais' => '0cd86869-3085-489c-a369-b49dcf1843ec',
            'xpais' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
