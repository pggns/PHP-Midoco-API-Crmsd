<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerMandateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerMandateRequest extends AbstractStructBase
{
    /**
     * The mandateType
     * @var string|null
     */
    protected ?string $mandateType = null;
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The documentId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * Constructor method for GetCustomerMandateRequest
     * @uses GetCustomerMandateRequest::setMandateType()
     * @uses GetCustomerMandateRequest::setCustomerId()
     * @uses GetCustomerMandateRequest::setOrderId()
     * @uses GetCustomerMandateRequest::setDocumentId()
     * @param string $mandateType
     * @param int $customerId
     * @param int $orderId
     * @param int $documentId
     */
    public function __construct(?string $mandateType = null, ?int $customerId = null, ?int $orderId = null, ?int $documentId = null)
    {
        $this
            ->setMandateType($mandateType)
            ->setCustomerId($customerId)
            ->setOrderId($orderId)
            ->setDocumentId($documentId);
    }
    /**
     * Get mandateType value
     * @return string|null
     */
    public function getMandateType(): ?string
    {
        return $this->mandateType;
    }
    /**
     * Set mandateType value
     * @param string $mandateType
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMandateRequest
     */
    public function setMandateType(?string $mandateType = null): self
    {
        // validation for constraint: string
        if (!is_null($mandateType) && !is_string($mandateType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandateType, true), gettype($mandateType)), __LINE__);
        }
        $this->mandateType = $mandateType;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMandateRequest
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
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMandateRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMandateRequest
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
}
