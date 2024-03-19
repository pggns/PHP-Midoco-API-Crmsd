<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkCustomersAsDoubleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MarkCustomersAsDoubleRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The connectedCustomerId
     * @var int|null
     */
    protected ?int $connectedCustomerId = null;
    /**
     * Constructor method for MarkCustomersAsDoubleRequest
     * @uses MarkCustomersAsDoubleRequest::setCustomerId()
     * @uses MarkCustomersAsDoubleRequest::setConnectedCustomerId()
     * @param int $customerId
     * @param int $connectedCustomerId
     */
    public function __construct(?int $customerId = null, ?int $connectedCustomerId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setConnectedCustomerId($connectedCustomerId);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\MarkCustomersAsDoubleRequest
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
     * Get connectedCustomerId value
     * @return int|null
     */
    public function getConnectedCustomerId(): ?int
    {
        return $this->connectedCustomerId;
    }
    /**
     * Set connectedCustomerId value
     * @param int $connectedCustomerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\MarkCustomersAsDoubleRequest
     */
    public function setConnectedCustomerId(?int $connectedCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($connectedCustomerId) && !(is_int($connectedCustomerId) || ctype_digit($connectedCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($connectedCustomerId, true), gettype($connectedCustomerId)), __LINE__);
        }
        $this->connectedCustomerId = $connectedCustomerId;
        
        return $this;
    }
}
