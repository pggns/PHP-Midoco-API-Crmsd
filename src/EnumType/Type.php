<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for type EnumType
 * @subpackage Enumerations
 */
class Type extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ORIGINAL'
     * @return string 'ORIGINAL'
     */
    const VALUE_ORIGINAL = 'ORIGINAL';
    /**
     * Constant for value 'NEW'
     * @return string 'NEW'
     */
    const VALUE_NEW = 'NEW';
    /**
     * Constant for value 'ANSWER'
     * @return string 'ANSWER'
     */
    const VALUE_ANSWER = 'ANSWER';
    /**
     * Constant for value 'FORWARD'
     * @return string 'FORWARD'
     */
    const VALUE_FORWARD = 'FORWARD';
    /**
     * Constant for value 'CALLBACK'
     * @return string 'CALLBACK'
     */
    const VALUE_CALLBACK = 'CALLBACK';
    /**
     * Constant for value 'ADDITION'
     * @return string 'ADDITION'
     */
    const VALUE_ADDITION = 'ADDITION';
    /**
     * Constant for value 'INTERMEDIATE_REPLY'
     * @return string 'INTERMEDIATE_REPLY'
     */
    const VALUE_INTERMEDIATE_REPLY = 'INTERMEDIATE_REPLY';
    /**
     * Return allowed values
     * @uses self::VALUE_ORIGINAL
     * @uses self::VALUE_NEW
     * @uses self::VALUE_ANSWER
     * @uses self::VALUE_FORWARD
     * @uses self::VALUE_CALLBACK
     * @uses self::VALUE_ADDITION
     * @uses self::VALUE_INTERMEDIATE_REPLY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ORIGINAL,
            self::VALUE_NEW,
            self::VALUE_ANSWER,
            self::VALUE_FORWARD,
            self::VALUE_CALLBACK,
            self::VALUE_ADDITION,
            self::VALUE_INTERMEDIATE_REPLY,
        ];
    }
}
