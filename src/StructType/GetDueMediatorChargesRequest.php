<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDueMediatorChargesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDueMediatorChargesRequest extends AbstractStructBase
{
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $customerId;
    /**
     * The dueDate
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $dueDate;
    /**
     * The chargeId
     * @var int|null
     */
    protected ?int $chargeId = null;
    /**
     * Constructor method for GetDueMediatorChargesRequest
     * @uses GetDueMediatorChargesRequest::setCustomerId()
     * @uses GetDueMediatorChargesRequest::setDueDate()
     * @uses GetDueMediatorChargesRequest::setChargeId()
     * @param int $customerId
     * @param string $dueDate
     * @param int $chargeId
     */
    public function __construct(int $customerId, string $dueDate, ?int $chargeId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setDueDate($dueDate)
            ->setChargeId($chargeId);
    }
    /**
     * Get customerId value
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDueMediatorChargesRequest
     */
    public function setCustomerId(int $customerId): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get dueDate value
     * @return string
     */
    public function getDueDate(): string
    {
        return $this->dueDate;
    }
    /**
     * Set dueDate value
     * @param string $dueDate
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDueMediatorChargesRequest
     */
    public function setDueDate(string $dueDate): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->dueDate = $dueDate;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDueMediatorChargesRequest
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
