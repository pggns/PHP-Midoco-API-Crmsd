<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListAddressTypesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListAddressTypesRequest extends AbstractStructBase
{
    /**
     * The locale
     * Meta information extracted from the WSDL
     * - default: de
     * @var string|null
     */
    protected ?string $locale = null;
    /**
     * Constructor method for ListAddressTypesRequest
     * @uses ListAddressTypesRequest::setLocale()
     * @param string $locale
     */
    public function __construct(?string $locale = 'de')
    {
        $this
            ->setLocale($locale);
    }
    /**
     * Get locale value
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Pggns\MidocoApi\Crmsd\StructType\ListAddressTypesRequest
     */
    public function setLocale(?string $locale = 'de'): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        
        return $this;
    }
}
