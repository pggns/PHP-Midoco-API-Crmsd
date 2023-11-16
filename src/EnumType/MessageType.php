<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for messageType EnumType
 * @subpackage Enumerations
 */
class MessageType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EMAIL'
     * @return string 'EMAIL'
     */
    const VALUE_EMAIL = 'EMAIL';
    /**
     * Constant for value 'LETTER'
     * @return string 'LETTER'
     */
    const VALUE_LETTER = 'LETTER';
    /**
     * Constant for value 'FAX'
     * @return string 'FAX'
     */
    const VALUE_FAX = 'FAX';
    /**
     * Return allowed values
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_LETTER
     * @uses self::VALUE_FAX
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EMAIL,
            self::VALUE_LETTER,
            self::VALUE_FAX,
        ];
    }
}
