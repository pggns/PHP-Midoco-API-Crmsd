<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetLastExecutedMediatorChargeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetLastExecutedMediatorChargeRequest extends AbstractStructBase
{
    /**
     * The lastExecDate
     * @var string|null
     */
    protected ?string $lastExecDate = null;
    /**
     * The lastExecUser
     * @var int|null
     */
    protected ?int $lastExecUser = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The chargeId
     * @var int|null
     */
    protected ?int $chargeId = null;
    /**
     * Constructor method for SetLastExecutedMediatorChargeRequest
     * @uses SetLastExecutedMediatorChargeRequest::setLastExecDate()
     * @uses SetLastExecutedMediatorChargeRequest::setLastExecUser()
     * @uses SetLastExecutedMediatorChargeRequest::setCustomerId()
     * @uses SetLastExecutedMediatorChargeRequest::setChargeId()
     * @param string $lastExecDate
     * @param int $lastExecUser
     * @param int $customerId
     * @param int $chargeId
     */
    public function __construct(?string $lastExecDate = null, ?int $lastExecUser = null, ?int $customerId = null, ?int $chargeId = null)
    {
        $this
            ->setLastExecDate($lastExecDate)
            ->setLastExecUser($lastExecUser)
            ->setCustomerId($customerId)
            ->setChargeId($chargeId);
    }
    /**
     * Get lastExecDate value
     * @return string|null
     */
    public function getLastExecDate(): ?string
    {
        return $this->lastExecDate;
    }
    /**
     * Set lastExecDate value
     * @param string $lastExecDate
     * @return \Pggns\MidocoApi\Crmsd\StructType\SetLastExecutedMediatorChargeRequest
     */
    public function setLastExecDate(?string $lastExecDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastExecDate) && !is_string($lastExecDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastExecDate, true), gettype($lastExecDate)), __LINE__);
        }
        $this->lastExecDate = $lastExecDate;
        
        return $this;
    }
    /**
     * Get lastExecUser value
     * @return int|null
     */
    public function getLastExecUser(): ?int
    {
        return $this->lastExecUser;
    }
    /**
     * Set lastExecUser value
     * @param int $lastExecUser
     * @return \Pggns\MidocoApi\Crmsd\StructType\SetLastExecutedMediatorChargeRequest
     */
    public function setLastExecUser(?int $lastExecUser = null): self
    {
        // validation for constraint: int
        if (!is_null($lastExecUser) && !(is_int($lastExecUser) || ctype_digit($lastExecUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastExecUser, true), gettype($lastExecUser)), __LINE__);
        }
        $this->lastExecUser = $lastExecUser;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SetLastExecutedMediatorChargeRequest
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
     * Get chargeId value
     * @return int|null
     */
    public function getChargeId(): ?int
    {
        return $this->chargeId;
    }
    /**
     * Set chargeId value
     * @param int $chargeId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SetLastExecutedMediatorChargeRequest
     */
    public function setChargeId(?int $chargeId = null): self
    {
        // validation for constraint: int
        if (!is_null($chargeId) && !(is_int($chargeId) || ctype_digit($chargeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($chargeId, true), gettype($chargeId)), __LINE__);
        }
        $this->chargeId = $chargeId;
        
        return $this;
    }
}
