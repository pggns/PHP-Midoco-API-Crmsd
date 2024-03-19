<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SwitchCustomerTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SwitchCustomerTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ID = null;
    /**
     * The CustomerType
     * @var string|null
     */
    protected ?string $CustomerType = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SwitchCustomerTypeRequest
     * @uses SwitchCustomerTypeRequest::setMidocoCustomerId()
     * @uses SwitchCustomerTypeRequest::setID()
     * @uses SwitchCustomerTypeRequest::setCustomerType()
     * @uses SwitchCustomerTypeRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @param string $iD
     * @param string $customerType
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null, ?string $iD = null, ?string $customerType = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setID($iD)
            ->setCustomerType($customerType)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    public function getMidocoCustomerId(): ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SwitchCustomerTypeRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Pggns\MidocoApi\Crmsd\StructType\SwitchCustomerTypeRequest
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get CustomerType value
     * @return string|null
     */
    public function getCustomerType(): ?string
    {
        return $this->CustomerType;
    }
    /**
     * Set CustomerType value
     * @uses \Pggns\MidocoApi\Crmsd\EnumType\CustomerType::valueIsValid()
     * @uses \Pggns\MidocoApi\Crmsd\EnumType\CustomerType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $customerType
     * @return \Pggns\MidocoApi\Crmsd\StructType\SwitchCustomerTypeRequest
     */
    public function setCustomerType(?string $customerType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crmsd\EnumType\CustomerType::valueIsValid($customerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crmsd\EnumType\CustomerType', is_array($customerType) ? implode(', ', $customerType) : var_export($customerType, true), implode(', ', \Pggns\MidocoApi\Crmsd\EnumType\CustomerType::getValidValues())), __LINE__);
        }
        $this->CustomerType = $customerType;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SwitchCustomerTypeRequest
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
