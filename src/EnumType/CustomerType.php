<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CustomerType EnumType
 * @subpackage Enumerations
 */
class CustomerType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PERSON'
     * @return string 'PERSON'
     */
    const VALUE_PERSON = 'PERSON';
    /**
     * Constant for value 'COMPANY'
     * @return string 'COMPANY'
     */
    const VALUE_COMPANY = 'COMPANY';
    /**
     * Constant for value 'AGENCY'
     * @return string 'AGENCY'
     */
    const VALUE_AGENCY = 'AGENCY';
    /**
     * Constant for value 'MEDIATOR'
     * @return string 'MEDIATOR'
     */
    const VALUE_MEDIATOR = 'MEDIATOR';
    /**
     * Constant for value 'COOPERATION'
     * @return string 'COOPERATION'
     */
    const VALUE_COOPERATION = 'COOPERATION';
    /**
     * Return allowed values
     * @uses self::VALUE_PERSON
     * @uses self::VALUE_COMPANY
     * @uses self::VALUE_AGENCY
     * @uses self::VALUE_MEDIATOR
     * @uses self::VALUE_COOPERATION
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PERSON,
            self::VALUE_COMPANY,
            self::VALUE_AGENCY,
            self::VALUE_MEDIATOR,
            self::VALUE_COOPERATION,
        ];
    }
}
