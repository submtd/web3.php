<?php

/**
 * This file is part of web3.php package.
 * 
 * (c) Kuan-Cheng,Lai <alk03073135@gmail.com>
 * 
 * @author Peter Lai <alk03073135@gmail.com>
 * @license MIT
 */

namespace Submtd\Web3\Formatters;

use InvalidArgumentException;
use Submtd\Web3\Utils;
use Submtd\Web3\Formatters\IFormatter;

class StringFormatter implements IFormatter
{
    /**
     * format
     * 
     * @param mixed $value
     * @return string
     */
    public static function format($value)
    {
        return Utils::toString($value);
    }
}