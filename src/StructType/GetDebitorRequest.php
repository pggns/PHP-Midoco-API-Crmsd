<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDebitorRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDebitorRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The onlyDirectAssigned
     * @var bool|null
     */
    protected ?bool $onlyDirectAssigned = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * Constructor method for GetDebitorRequest
     * @uses GetDebitorRequest::setCustomerId()
     * @uses GetDebitorRequest::setOrgUnit()
     * @uses GetDebitorRequest::setCustomerName()
     * @uses GetDebitorRequest::setOnlyDirectAssigned()
     * @uses GetDebitorRequest::setCurrency()
     * @param int $customerId
     * @param string $orgUnit
     * @param string $customerName
     * @param bool $onlyDirectAssigned
     * @param string $currency
     */
    public function __construct(?int $customerId = null, ?string $orgUnit = null, ?string $customerName = null, ?bool $onlyDirectAssigned = null, ?string $currency = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setOrgUnit($orgUnit)
            ->setCustomerName($customerName)
            ->setOnlyDirectAssigned($onlyDirectAssigned)
            ->setCurrency($currency);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitorRequest
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
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitorRequest
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitorRequest
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get onlyDirectAssigned value
     * @return bool|null
     */
    public function getOnlyDirectAssigned(): ?bool
    {
        return $this->onlyDirectAssigned;
    }
    /**
     * Set onlyDirectAssigned value
     * @param bool $onlyDirectAssigned
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitorRequest
     */
    public function setOnlyDirectAssigned(?bool $onlyDirectAssigned = null): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyDirectAssigned) && !is_bool($onlyDirectAssigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyDirectAssigned, true), gettype($onlyDirectAssigned)), __LINE__);
        }
        $this->onlyDirectAssigned = $onlyDirectAssigned;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitorRequest
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
}
