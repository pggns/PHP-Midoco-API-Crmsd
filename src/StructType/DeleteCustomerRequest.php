<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCustomerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCustomerRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The reasonId
     * @var int|null
     */
    protected ?int $reasonId = null;
    /**
     * Constructor method for DeleteCustomerRequest
     * @uses DeleteCustomerRequest::setMidocoCustomerId()
     * @uses DeleteCustomerRequest::setReasonId()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @param int $reasonId
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null, ?int $reasonId = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setReasonId($reasonId);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCustomerRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get reasonId value
     * @return int|null
     */
    public function getReasonId(): ?int
    {
        return $this->reasonId;
    }
    /**
     * Set reasonId value
     * @param int $reasonId
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCustomerRequest
     */
    public function setReasonId(?int $reasonId = null): self
    {
        // validation for constraint: int
        if (!is_null($reasonId) && !(is_int($reasonId) || ctype_digit($reasonId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reasonId, true), gettype($reasonId)), __LINE__);
        }
        $this->reasonId = $reasonId;
        
        return $this;
    }
}
