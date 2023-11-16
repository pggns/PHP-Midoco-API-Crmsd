<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for action EnumType
 * @subpackage Enumerations
 */
class Action extends AbstractStructEnumBase
{
    /**
     * Constant for value 'TRANSFER'
     * @return string 'TRANSFER'
     */
    const VALUE_TRANSFER = 'TRANSFER';
    /**
     * Constant for value 'SHOW'
     * @return string 'SHOW'
     */
    const VALUE_SHOW = 'SHOW';
    /**
     * Return allowed values
     * @uses self::VALUE_TRANSFER
     * @uses self::VALUE_SHOW
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TRANSFER,
            self::VALUE_SHOW,
        ];
    }
}
