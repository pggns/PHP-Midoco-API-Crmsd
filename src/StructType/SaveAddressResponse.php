<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAddressResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveAddress --- save address data and connect to a customer, this is used to add a new address or to save a modified, previously retrieved address. If makeDefault is set, this (new or updated) address entry should be made default
 * after saving
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAddressResponse extends AbstractStructBase
{
    /**
     * The hasAddressChanged
     * @var bool|null
     */
    protected ?bool $hasAddressChanged = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveAddressResponse
     * @uses SaveAddressResponse::setHasAddressChanged()
     * @uses SaveAddressResponse::setInternalVersion()
     * @param bool $hasAddressChanged
     * @param int $internalVersion
     */
    public function __construct(?bool $hasAddressChanged = null, ?int $internalVersion = null)
    {
        $this
            ->setHasAddressChanged($hasAddressChanged)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get hasAddressChanged value
     * @return bool|null
     */
    public function getHasAddressChanged(): ?bool
    {
        return $this->hasAddressChanged;
    }
    /**
     * Set hasAddressChanged value
     * @param bool $hasAddressChanged
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveAddressResponse
     */
    public function setHasAddressChanged(?bool $hasAddressChanged = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasAddressChanged) && !is_bool($hasAddressChanged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasAddressChanged, true), gettype($hasAddressChanged)), __LINE__);
        }
        $this->hasAddressChanged = $hasAddressChanged;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveAddressResponse
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
