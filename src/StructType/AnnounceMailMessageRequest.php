<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceMailMessageRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AnnounceMailMessageRequest extends AbstractStructBase
{
    /**
     * The mailId
     * @var int|null
     */
    protected ?int $mailId = null;
    /**
     * The responseMailId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $responseMailId = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The senderEmail
     * @var string|null
     */
    protected ?string $senderEmail = null;
    /**
     * The receipientEmail
     * @var string|null
     */
    protected ?string $receipientEmail = null;
    /**
     * The ermType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ermType = null;
    /**
     * The subject
     * @var string|null
     */
    protected ?string $subject = null;
    /**
     * The text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The orderNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The messageType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $messageType = null;
    /**
     * The replyToEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $replyToEmail = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for AnnounceMailMessageRequest
     * @uses AnnounceMailMessageRequest::setMailId()
     * @uses AnnounceMailMessageRequest::setResponseMailId()
     * @uses AnnounceMailMessageRequest::setType()
     * @uses AnnounceMailMessageRequest::setSenderEmail()
     * @uses AnnounceMailMessageRequest::setReceipientEmail()
     * @uses AnnounceMailMessageRequest::setErmType()
     * @uses AnnounceMailMessageRequest::setSubject()
     * @uses AnnounceMailMessageRequest::setText()
     * @uses AnnounceMailMessageRequest::setCustomerId()
     * @uses AnnounceMailMessageRequest::setOrderNo()
     * @uses AnnounceMailMessageRequest::setTimestamp()
     * @uses AnnounceMailMessageRequest::setMessageType()
     * @uses AnnounceMailMessageRequest::setReplyToEmail()
     * @uses AnnounceMailMessageRequest::setBookingId()
     * @uses AnnounceMailMessageRequest::setSupplierId()
     * @param int $mailId
     * @param int $responseMailId
     * @param string $type
     * @param string $senderEmail
     * @param string $receipientEmail
     * @param string $ermType
     * @param string $subject
     * @param string $text
     * @param int $customerId
     * @param int $orderNo
     * @param string $timestamp
     * @param string $messageType
     * @param string $replyToEmail
     * @param string $bookingId
     * @param string $supplierId
     */
    public function __construct(?int $mailId = null, ?int $responseMailId = null, ?string $type = null, ?string $senderEmail = null, ?string $receipientEmail = null, ?string $ermType = null, ?string $subject = null, ?string $text = null, ?int $customerId = null, ?int $orderNo = null, ?string $timestamp = null, ?string $messageType = null, ?string $replyToEmail = null, ?string $bookingId = null, ?string $supplierId = null)
    {
        $this
            ->setMailId($mailId)
            ->setResponseMailId($responseMailId)
            ->setType($type)
            ->setSenderEmail($senderEmail)
            ->setReceipientEmail($receipientEmail)
            ->setErmType($ermType)
            ->setSubject($subject)
            ->setText($text)
            ->setCustomerId($customerId)
            ->setOrderNo($orderNo)
            ->setTimestamp($timestamp)
            ->setMessageType($messageType)
            ->setReplyToEmail($replyToEmail)
            ->setBookingId($bookingId)
            ->setSupplierId($supplierId);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\AnnounceMailMessageRequest
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
     * Get responseMailId value
     * @return int|null
     */
    public function getResponseMailId(): ?int
    {
        return $this->responseMailId;
    }
    /**
     * Set responseMailId value
     * @param int $responseMailId
     * @return \Pggns\MidocoApi\Crmsd\StructType\AnnounceMailMessageRequest
     */
    public function setResponseMailId(?int $responseMailId = null): self
    {
        // validation for constraint: int
        if (!is_null($responseMailId) && !(is_int($responseMailId) || ctype_digit($responseMailId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($responseMailId, true), gettype($responseMailId)), __LINE__);
        }
        $this->responseMailId = $responseMailId;
        
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
     * @uses \Pggns\MidocoApi\Crmsd\EnumType\Type::valueIsValid()
     * @uses \Pggns\MidocoApi\Crmsd\EnumType\Type::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Pggns\MidocoApi\Crmsd\StructType\AnnounceMailMessageRequest
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crmsd\EnumType\Type::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crmsd\EnumType\Type', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Pggns\MidocoApi\Crmsd\EnumType\Type::getValidValues())), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get senderEmail value
     * @return string|null
     */
    public function getSenderEmail(): ?string
    {
        return $this->senderEmail;
    }
    /**
     * Set senderEmail value
     * @param string $senderEmail
     * @return \Pggns\MidocoApi\Crmsd\StructType\AnnounceMailMessageRequest
     */
    public function setSenderEmail(?string $senderEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($senderEmail) && !is_string($senderEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderEmail, true), gettype($senderEmail)), __LINE__);
        }
        $this->senderEmail = $senderEmail;
        
        return $this;
    }
    /**
     * Get receipientEmail value
     * @return string|null
     */
    public function getReceipientEmail(): ?string
    {
        return $this->receipientEmail;
    }
    /**
     * Set receipientEmail value
     * @param string $receipientEmail
     * @return \Pggns\MidocoApi\Crmsd\StructType\AnnounceMailMessageRequest
     */
    public function setReceipientEmail(?string $receipientEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($receipientEmail) && !is_string($receipientEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receipientEmail, true), gettype($receipientEmail)), __LINE__);
        }
        $this->receipientEmail = $receipientEmail;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\AnnounceMailMessageRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\AnnounceMailMessageRequest
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
     * Get text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Pggns\MidocoApi\Crmsd\StructType\AnnounceMailMessageRequest
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\AnnounceMailMessageRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\AnnounceMailMessageRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\AnnounceMailMessageRequest
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
     * Get messageType value
     * @return string|null
     */
    public function getMessageType(): ?string
    {
        return $this->messageType;
    }
    /**
     * Set messageType value
     * @uses \Pggns\MidocoApi\Crmsd\EnumType\MessageType::valueIsValid()
     * @uses \Pggns\MidocoApi\Crmsd\EnumType\MessageType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $messageType
     * @return \Pggns\MidocoApi\Crmsd\StructType\AnnounceMailMessageRequest
     */
    public function setMessageType(?string $messageType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crmsd\EnumType\MessageType::valueIsValid($messageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crmsd\EnumType\MessageType', is_array($messageType) ? implode(', ', $messageType) : var_export($messageType, true), implode(', ', \Pggns\MidocoApi\Crmsd\EnumType\MessageType::getValidValues())), __LINE__);
        }
        $this->messageType = $messageType;
        
        return $this;
    }
    /**
     * Get replyToEmail value
     * @return string|null
     */
    public function getReplyToEmail(): ?string
    {
        return $this->replyToEmail;
    }
    /**
     * Set replyToEmail value
     * @param string $replyToEmail
     * @return \Pggns\MidocoApi\Crmsd\StructType\AnnounceMailMessageRequest
     */
    public function setReplyToEmail(?string $replyToEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($replyToEmail) && !is_string($replyToEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($replyToEmail, true), gettype($replyToEmail)), __LINE__);
        }
        $this->replyToEmail = $replyToEmail;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Crmsd\StructType\AnnounceMailMessageRequest
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Crmsd\StructType\AnnounceMailMessageRequest
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
}
