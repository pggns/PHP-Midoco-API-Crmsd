<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmailsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEmailsRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The deliveryCustomerId
     * @var int|null
     */
    protected ?int $deliveryCustomerId = null;
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * Constructor method for GetEmailsRequest
     * @uses GetEmailsRequest::setCustomerId()
     * @uses GetEmailsRequest::setDeliveryCustomerId()
     * @uses GetEmailsRequest::setAgencyId()
     * @uses GetEmailsRequest::setMediatorId()
     * @param int $customerId
     * @param int $deliveryCustomerId
     * @param string $agencyId
     * @param string $mediatorId
     */
    public function __construct(?int $customerId = null, ?int $deliveryCustomerId = null, ?string $agencyId = null, ?string $mediatorId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setDeliveryCustomerId($deliveryCustomerId)
            ->setAgencyId($agencyId)
            ->setMediatorId($mediatorId);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetEmailsRequest
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
     * Get deliveryCustomerId value
     * @return int|null
     */
    public function getDeliveryCustomerId(): ?int
    {
        return $this->deliveryCustomerId;
    }
    /**
     * Set deliveryCustomerId value
     * @param int $deliveryCustomerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetEmailsRequest
     */
    public function setDeliveryCustomerId(?int $deliveryCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($deliveryCustomerId) && !(is_int($deliveryCustomerId) || ctype_digit($deliveryCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deliveryCustomerId, true), gettype($deliveryCustomerId)), __LINE__);
        }
        $this->deliveryCustomerId = $deliveryCustomerId;
        
        return $this;
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetEmailsRequest
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetEmailsRequest
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
}
