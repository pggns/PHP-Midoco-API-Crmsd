<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAddressTypeDescriptionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteAddressTypeDescriptionRequest extends AbstractStructBase
{
    /**
     * The addressTypeId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $addressTypeId;
    /**
     * The locale
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $locale;
    /**
     * Constructor method for DeleteAddressTypeDescriptionRequest
     * @uses DeleteAddressTypeDescriptionRequest::setAddressTypeId()
     * @uses DeleteAddressTypeDescriptionRequest::setLocale()
     * @param int $addressTypeId
     * @param string $locale
     */
    public function __construct(int $addressTypeId, string $locale)
    {
        $this
            ->setAddressTypeId($addressTypeId)
            ->setLocale($locale);
    }
    /**
     * Get addressTypeId value
     * @return int
     */
    public function getAddressTypeId(): int
    {
        return $this->addressTypeId;
    }
    /**
     * Set addressTypeId value
     * @param int $addressTypeId
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteAddressTypeDescriptionRequest
     */
    public function setAddressTypeId(int $addressTypeId): self
    {
        // validation for constraint: int
        if (!is_null($addressTypeId) && !(is_int($addressTypeId) || ctype_digit($addressTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressTypeId, true), gettype($addressTypeId)), __LINE__);
        }
        $this->addressTypeId = $addressTypeId;
        
        return $this;
    }
    /**
     * Get locale value
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteAddressTypeDescriptionRequest
     */
    public function setLocale(string $locale): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        
        return $this;
    }
}
