<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAddressRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoSaveAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoSaveAddress
     * @var \Pggns\MidocoApi\Crmsd\StructType\SaveAddressDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\SaveAddressDTO $MidocoSaveAddress = null;
    /**
     * The makeDefault
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $makeDefault = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * Constructor method for SaveAddressRequest
     * @uses SaveAddressRequest::setMidocoSaveAddress()
     * @uses SaveAddressRequest::setMakeDefault()
     * @uses SaveAddressRequest::setInternalVersion()
     * @uses SaveAddressRequest::setCustomerId()
     * @param \Pggns\MidocoApi\Crmsd\StructType\SaveAddressDTO $midocoSaveAddress
     * @param bool $makeDefault
     * @param int $internalVersion
     * @param int $customerId
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\SaveAddressDTO $midocoSaveAddress = null, ?bool $makeDefault = false, ?int $internalVersion = null, ?int $customerId = null)
    {
        $this
            ->setMidocoSaveAddress($midocoSaveAddress)
            ->setMakeDefault($makeDefault)
            ->setInternalVersion($internalVersion)
            ->setCustomerId($customerId);
    }
    /**
     * Get MidocoSaveAddress value
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveAddressDTO|null
     */
    public function getMidocoSaveAddress(): ?\Pggns\MidocoApi\Crmsd\StructType\SaveAddressDTO
    {
        return $this->MidocoSaveAddress;
    }
    /**
     * Set MidocoSaveAddress value
     * @param \Pggns\MidocoApi\Crmsd\StructType\SaveAddressDTO $midocoSaveAddress
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveAddressRequest
     */
    public function setMidocoSaveAddress(?\Pggns\MidocoApi\Crmsd\StructType\SaveAddressDTO $midocoSaveAddress = null): self
    {
        $this->MidocoSaveAddress = $midocoSaveAddress;
        
        return $this;
    }
    /**
     * Get makeDefault value
     * @return bool|null
     */
    public function getMakeDefault(): ?bool
    {
        return $this->makeDefault;
    }
    /**
     * Set makeDefault value
     * @param bool $makeDefault
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveAddressRequest
     */
    public function setMakeDefault(?bool $makeDefault = false): self
    {
        // validation for constraint: boolean
        if (!is_null($makeDefault) && !is_bool($makeDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($makeDefault, true), gettype($makeDefault)), __LINE__);
        }
        $this->makeDefault = $makeDefault;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveAddressRequest
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
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveAddressRequest
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
}
