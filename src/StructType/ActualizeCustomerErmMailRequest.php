<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActualizeCustomerErmMailRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ActualizeCustomerErmMailRequest extends AbstractStructBase
{
    /**
     * The mailId
     * @var int|null
     */
    protected ?int $mailId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The ermType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ermType = null;
    /**
     * The receipient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $receipient = null;
    /**
     * The sender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sender = null;
    /**
     * The subject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $subject = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The timestamp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The orderNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * Constructor method for ActualizeCustomerErmMailRequest
     * @uses ActualizeCustomerErmMailRequest::setMailId()
     * @uses ActualizeCustomerErmMailRequest::setCustomerId()
     * @uses ActualizeCustomerErmMailRequest::setErmType()
     * @uses ActualizeCustomerErmMailRequest::setReceipient()
     * @uses ActualizeCustomerErmMailRequest::setSender()
     * @uses ActualizeCustomerErmMailRequest::setSubject()
     * @uses ActualizeCustomerErmMailRequest::setType()
     * @uses ActualizeCustomerErmMailRequest::setTimestamp()
     * @uses ActualizeCustomerErmMailRequest::setOrderNo()
     * @param int $mailId
     * @param int $customerId
     * @param string $ermType
     * @param string $receipient
     * @param string $sender
     * @param string $subject
     * @param string $type
     * @param string $timestamp
     * @param int $orderNo
     */
    public function __construct(?int $mailId = null, ?int $customerId = null, ?string $ermType = null, ?string $receipient = null, ?string $sender = null, ?string $subject = null, ?string $type = null, ?string $timestamp = null, ?int $orderNo = null)
    {
        $this
            ->setMailId($mailId)
            ->setCustomerId($customerId)
            ->setErmType($ermType)
            ->setReceipient($receipient)
            ->setSender($sender)
            ->setSubject($subject)
            ->setType($type)
            ->setTimestamp($timestamp)
            ->setOrderNo($orderNo);
    }
    /**
     * Get mailId value
     * @return int|null
     */
    public function getMailId(): ?int
    {
        return $this->mailId;
    }
    /**
     * Set mailId value
     * @param int $mailId
     * @return \Pggns\MidocoApi\Crmsd\StructType\ActualizeCustomerErmMailRequest
     */
    public function setMailId(?int $mailId = null): self
    {
        // validation for constraint: int
        if (!is_null($mailId) && !(is_int($mailId) || ctype_digit($mailId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mailId, true), gettype($mailId)), __LINE__);
        }
        $this->mailId = $mailId;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\ActualizeCustomerErmMailRequest
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
     * Get ermType value
     * @return string|null
     */
    public function getErmType(): ?string
    {
        return $this->ermType;
    }
    /**
     * Set ermType value
     * @param string $ermType
     * @return \Pggns\MidocoApi\Crmsd\StructType\ActualizeCustomerErmMailRequest
     */
    public function setErmType(?string $ermType = null): self
    {
        // validation for constraint: string
        if (!is_null($ermType) && !is_string($ermType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ermType, true), gettype($ermType)), __LINE__);
        }
        $this->ermType = $ermType;
        
        return $this;
    }
    /**
     * Get receipient value
     * @return string|null
     */
    public function getReceipient(): ?string
    {
        return $this->receipient;
    }
    /**
     * Set receipient value
     * @param string $receipient
     * @return \Pggns\MidocoApi\Crmsd\StructType\ActualizeCustomerErmMailRequest
     */
    public function setReceipient(?string $receipient = null): self
    {
        // validation for constraint: string
        if (!is_null($receipient) && !is_string($receipient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receipient, true), gettype($receipient)), __LINE__);
        }
        $this->receipient = $receipient;
        
        return $this;
    }
    /**
     * Get sender value
     * @return string|null
     */
    public function getSender(): ?string
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param string $sender
     * @return \Pggns\MidocoApi\Crmsd\StructType\ActualizeCustomerErmMailRequest
     */
    public function setSender(?string $sender = null): self
    {
        // validation for constraint: string
        if (!is_null($sender) && !is_string($sender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sender, true), gettype($sender)), __LINE__);
        }
        $this->sender = $sender;
        
        return $this;
    }
    /**
     * Get subject value
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }
    /**
     * Set subject value
     * @param string $subject
     * @return \Pggns\MidocoApi\Crmsd\StructType\ActualizeCustomerErmMailRequest
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->subject = $subject;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Crmsd\StructType\ActualizeCustomerErmMailRequest
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Crmsd\StructType\ActualizeCustomerErmMailRequest
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\ActualizeCustomerErmMailRequest
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
}
