<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaxconnectNotifyAdvisoryPublishedRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaxconnectNotifyAdvisoryPublishedRequest extends AbstractStructBase
{
    /**
     * The refId
     * @var int|null
     */
    protected ?int $refId = null;
    /**
     * The advisoryId
     * @var string|null
     */
    protected ?string $advisoryId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for PaxconnectNotifyAdvisoryPublishedRequest
     * @uses PaxconnectNotifyAdvisoryPublishedRequest::setRefId()
     * @uses PaxconnectNotifyAdvisoryPublishedRequest::setAdvisoryId()
     * @uses PaxconnectNotifyAdvisoryPublishedRequest::setCustomerId()
     * @uses PaxconnectNotifyAdvisoryPublishedRequest::setUnitName()
     * @param int $refId
     * @param string $advisoryId
     * @param int $customerId
     * @param string $unitName
     */
    public function __construct(?int $refId = null, ?string $advisoryId = null, ?int $customerId = null, ?string $unitName = null)
    {
        $this
            ->setRefId($refId)
            ->setAdvisoryId($advisoryId)
            ->setCustomerId($customerId)
            ->setUnitName($unitName);
    }
    /**
     * Get refId value
     * @return int|null
     */
    public function getRefId(): ?int
    {
        return $this->refId;
    }
    /**
     * Set refId value
     * @param int $refId
     * @return \Pggns\MidocoApi\Crmsd\StructType\PaxconnectNotifyAdvisoryPublishedRequest
     */
    public function setRefId(?int $refId = null): self
    {
        // validation for constraint: int
        if (!is_null($refId) && !(is_int($refId) || ctype_digit($refId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refId, true), gettype($refId)), __LINE__);
        }
        $this->refId = $refId;
        
        return $this;
    }
    /**
     * Get advisoryId value
     * @return string|null
     */
    public function getAdvisoryId(): ?string
    {
        return $this->advisoryId;
    }
    /**
     * Set advisoryId value
     * @param string $advisoryId
     * @return \Pggns\MidocoApi\Crmsd\StructType\PaxconnectNotifyAdvisoryPublishedRequest
     */
    public function setAdvisoryId(?string $advisoryId = null): self
    {
        // validation for constraint: string
        if (!is_null($advisoryId) && !is_string($advisoryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($advisoryId, true), gettype($advisoryId)), __LINE__);
        }
        $this->advisoryId = $advisoryId;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\PaxconnectNotifyAdvisoryPublishedRequest
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
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Crmsd\StructType\PaxconnectNotifyAdvisoryPublishedRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
