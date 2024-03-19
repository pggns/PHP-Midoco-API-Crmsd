<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignCustomerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AssignCustomerRequest extends AbstractStructBase
{
    /**
     * The MidocoAssignCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoAssignCustomer
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO $MidocoAssignCustomer = null;
    /**
     * The isFirm
     * @var bool|null
     */
    protected ?bool $isFirm = null;
    /**
     * The originCustomerGender
     * @var int|null
     */
    protected ?int $originCustomerGender = null;
    /**
     * The assignedCustomerGender
     * @var int|null
     */
    protected ?int $assignedCustomerGender = null;
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
     * Constructor method for AssignCustomerRequest
     * @uses AssignCustomerRequest::setMidocoAssignCustomer()
     * @uses AssignCustomerRequest::setIsFirm()
     * @uses AssignCustomerRequest::setOriginCustomerGender()
     * @uses AssignCustomerRequest::setAssignedCustomerGender()
     * @uses AssignCustomerRequest::setInternalVersion()
     * @uses AssignCustomerRequest::setCustomerId()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO $midocoAssignCustomer
     * @param bool $isFirm
     * @param int $originCustomerGender
     * @param int $assignedCustomerGender
     * @param int $internalVersion
     * @param int $customerId
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO $midocoAssignCustomer = null, ?bool $isFirm = null, ?int $originCustomerGender = null, ?int $assignedCustomerGender = null, ?int $internalVersion = null, ?int $customerId = null)
    {
        $this
            ->setMidocoAssignCustomer($midocoAssignCustomer)
            ->setIsFirm($isFirm)
            ->setOriginCustomerGender($originCustomerGender)
            ->setAssignedCustomerGender($assignedCustomerGender)
            ->setInternalVersion($internalVersion)
            ->setCustomerId($customerId);
    }
    /**
     * Get MidocoAssignCustomer value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO|null
     */
    public function getMidocoAssignCustomer(): ?\Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO
    {
        return $this->MidocoAssignCustomer;
    }
    /**
     * Set MidocoAssignCustomer value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO $midocoAssignCustomer
     * @return \Pggns\MidocoApi\Crmsd\StructType\AssignCustomerRequest
     */
    public function setMidocoAssignCustomer(?\Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO $midocoAssignCustomer = null): self
    {
        $this->MidocoAssignCustomer = $midocoAssignCustomer;
        
        return $this;
    }
    /**
     * Get isFirm value
     * @return bool|null
     */
    public function getIsFirm(): ?bool
    {
        return $this->isFirm;
    }
    /**
     * Set isFirm value
     * @param bool $isFirm
     * @return \Pggns\MidocoApi\Crmsd\StructType\AssignCustomerRequest
     */
    public function setIsFirm(?bool $isFirm = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFirm) && !is_bool($isFirm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFirm, true), gettype($isFirm)), __LINE__);
        }
        $this->isFirm = $isFirm;
        
        return $this;
    }
    /**
     * Get originCustomerGender value
     * @return int|null
     */
    public function getOriginCustomerGender(): ?int
    {
        return $this->originCustomerGender;
    }
    /**
     * Set originCustomerGender value
     * @param int $originCustomerGender
     * @return \Pggns\MidocoApi\Crmsd\StructType\AssignCustomerRequest
     */
    public function setOriginCustomerGender(?int $originCustomerGender = null): self
    {
        // validation for constraint: int
        if (!is_null($originCustomerGender) && !(is_int($originCustomerGender) || ctype_digit($originCustomerGender))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($originCustomerGender, true), gettype($originCustomerGender)), __LINE__);
        }
        $this->originCustomerGender = $originCustomerGender;
        
        return $this;
    }
    /**
     * Get assignedCustomerGender value
     * @return int|null
     */
    public function getAssignedCustomerGender(): ?int
    {
        return $this->assignedCustomerGender;
    }
    /**
     * Set assignedCustomerGender value
     * @param int $assignedCustomerGender
     * @return \Pggns\MidocoApi\Crmsd\StructType\AssignCustomerRequest
     */
    public function setAssignedCustomerGender(?int $assignedCustomerGender = null): self
    {
        // validation for constraint: int
        if (!is_null($assignedCustomerGender) && !(is_int($assignedCustomerGender) || ctype_digit($assignedCustomerGender))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($assignedCustomerGender, true), gettype($assignedCustomerGender)), __LINE__);
        }
        $this->assignedCustomerGender = $assignedCustomerGender;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\AssignCustomerRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\AssignCustomerRequest
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
