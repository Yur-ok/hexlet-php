<?php

/**
 * MyClass doc comment
 *
 * Long description Long description Long description Long description
 *
 * php version 7.4.3
 *
 * @category Category
 * @package  Package
 * @author   author <mail@mail.ru>
 * @license  GNU gnu.org
 * @link     somelink
 */
namespace Hexlet\Php\Runner;

use Tightenco\Support\Collection;

/**
 * Some comment
 * 
 * @return \Tightenco\Collect\Support\Collection
 */
function run()
{
    $collection = collect(
        ['taylor', 'abigail', null]
    )->map(
        function ($name) {
            return strtoupper($name);
        }
    );

    return $collection;
}