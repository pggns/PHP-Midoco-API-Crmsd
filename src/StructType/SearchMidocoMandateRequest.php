<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMidocoMandateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchMidocoMandateRequest extends AbstractStructBase
{
    /**
     * The MidocoMandate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMandate
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $MidocoMandate = null;
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
     * The receiptId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $receiptId = null;
    /**
     * The isActive
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * The mandateId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $mandateId = null;
    /**
     * The isUsed
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $isUsed = null;
    /**
     * The mandateReference
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $mandateReference = null;
    /**
     * The iban
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * Constructor method for SearchMidocoMandateRequest
     * @uses SearchMidocoMandateRequest::setMidocoMandate()
     * @uses SearchMidocoMandateRequest::setMandateType()
     * @uses SearchMidocoMandateRequest::setCustomerId()
     * @uses SearchMidocoMandateRequest::setOrderId()
     * @uses SearchMidocoMandateRequest::setDocumentId()
     * @uses SearchMidocoMandateRequest::setReceiptId()
     * @uses SearchMidocoMandateRequest::setIsActive()
     * @uses SearchMidocoMandateRequest::setMandateId()
     * @uses SearchMidocoMandateRequest::setIsUsed()
     * @uses SearchMidocoMandateRequest::setMandateReference()
     * @uses SearchMidocoMandateRequest::setIban()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate
     * @param string $mandateType
     * @param int $customerId
     * @param int $orderId
     * @param int $documentId
     * @param int $receiptId
     * @param bool $isActive
     * @param int $mandateId
     * @param bool $isUsed
     * @param string $mandateReference
     * @param string $iban
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate = null, ?string $mandateType = null, ?int $customerId = null, ?int $orderId = null, ?int $documentId = null, ?int $receiptId = null, ?bool $isActive = null, ?int $mandateId = null, ?bool $isUsed = null, ?string $mandateReference = null, ?string $iban = null)
    {
        $this
            ->setMidocoMandate($midocoMandate)
            ->setMandateType($mandateType)
            ->setCustomerId($customerId)
            ->setOrderId($orderId)
            ->setDocumentId($documentId)
            ->setReceiptId($receiptId)
            ->setIsActive($isActive)
            ->setMandateId($mandateId)
            ->setIsUsed($isUsed)
            ->setMandateReference($mandateReference)
            ->setIban($iban);
    }
    /**
     * Get MidocoMandate value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate|null
     */
    public function getMidocoMandate(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate
    {
        return $this->MidocoMandate;
    }
    /**
     * Set MidocoMandate value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchMidocoMandateRequest
     */
    public function setMidocoMandate(?\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate = null): self
    {
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchMidocoMandateRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchMidocoMandateRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchMidocoMandateRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchMidocoMandateRequest
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
    /**
     * Get receiptId value
     * @return int|null
     */
    public function getReceiptId(): ?int
    {
        return $this->receiptId;
    }
    /**
     * Set receiptId value
     * @param int $receiptId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchMidocoMandateRequest
     */
    public function setReceiptId(?int $receiptId = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptId) && !(is_int($receiptId) || ctype_digit($receiptId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptId, true), gettype($receiptId)), __LINE__);
        }
        $this->receiptId = $receiptId;
        
        return $this;
    }
    /**
     * Get isActive value
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }
    /**
     * Set isActive value
     * @param bool $isActive
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchMidocoMandateRequest
     */
    public function setIsActive(?bool $isActive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isActive) && !is_bool($isActive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActive, true), gettype($isActive)), __LINE__);
        }
        $this->isActive = $isActive;
        
        return $this;
    }
    /**
     * Get mandateId value
     * @return int|null
     */
    public function getMandateId(): ?int
    {
        return $this->mandateId;
    }
    /**
     * Set mandateId value
     * @param int $mandateId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchMidocoMandateRequest
     */
    public function setMandateId(?int $mandateId = null): self
    {
        // validation for constraint: int
        if (!is_null($mandateId) && !(is_int($mandateId) || ctype_digit($mandateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mandateId, true), gettype($mandateId)), __LINE__);
        }
        $this->mandateId = $mandateId;
        
        return $this;
    }
    /**
     * Get isUsed value
     * @return bool|null
     */
    public function getIsUsed(): ?bool
    {
        return $this->isUsed;
    }
    /**
     * Set isUsed value
     * @param bool $isUsed
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchMidocoMandateRequest
     */
    public function setIsUsed(?bool $isUsed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUsed) && !is_bool($isUsed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUsed, true), gettype($isUsed)), __LINE__);
        }
        $this->isUsed = $isUsed;
        
        return $this;
    }
    /**
     * Get mandateReference value
     * @return string|null
     */
    public function getMandateReference(): ?string
    {
        return $this->mandateReference;
    }
    /**
     * Set mandateReference value
     * @param string $mandateReference
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchMidocoMandateRequest
     */
    public function setMandateReference(?string $mandateReference = null): self
    {
        // validation for constraint: string
        if (!is_null($mandateReference) && !is_string($mandateReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandateReference, true), gettype($mandateReference)), __LINE__);
        }
        $this->mandateReference = $mandateReference;
        
        return $this;
    }
    /**
     * Get iban value
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }
    /**
     * Set iban value
     * @param string $iban
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchMidocoMandateRequest
     */
    public function setIban(?string $iban = null): self
    {
        // validation for constraint: string
        if (!is_null($iban) && !is_string($iban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iban, true), gettype($iban)), __LINE__);
        }
        $this->iban = $iban;
        
        return $this;
    }
}
