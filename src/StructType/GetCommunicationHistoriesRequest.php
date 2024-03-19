<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCommunicationHistoriesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCommunicationHistoriesRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The docType
     * @var string|null
     */
    protected ?string $docType = null;
    /**
     * The deliveryType
     * @var string|null
     */
    protected ?string $deliveryType = null;
    /**
     * The templateName
     * @var string|null
     */
    protected ?string $templateName = null;
    /**
     * The creationTimeFrom
     * @var string|null
     */
    protected ?string $creationTimeFrom = null;
    /**
     * The creationTimeTo
     * @var string|null
     */
    protected ?string $creationTimeTo = null;
    /**
     * The printTimeFrom
     * @var string|null
     */
    protected ?string $printTimeFrom = null;
    /**
     * The printTimeTo
     * @var string|null
     */
    protected ?string $printTimeTo = null;
    /**
     * The timePrintedFrom
     * @var string|null
     */
    protected ?string $timePrintedFrom = null;
    /**
     * The timePrintedTo
     * @var string|null
     */
    protected ?string $timePrintedTo = null;
    /**
     * The isPrinted
     * @var bool|null
     */
    protected ?bool $isPrinted = null;
    /**
     * The isGroupBy
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isGroupBy = null;
    /**
     * Constructor method for GetCommunicationHistoriesRequest
     * @uses GetCommunicationHistoriesRequest::setCustomerId()
     * @uses GetCommunicationHistoriesRequest::setDocType()
     * @uses GetCommunicationHistoriesRequest::setDeliveryType()
     * @uses GetCommunicationHistoriesRequest::setTemplateName()
     * @uses GetCommunicationHistoriesRequest::setCreationTimeFrom()
     * @uses GetCommunicationHistoriesRequest::setCreationTimeTo()
     * @uses GetCommunicationHistoriesRequest::setPrintTimeFrom()
     * @uses GetCommunicationHistoriesRequest::setPrintTimeTo()
     * @uses GetCommunicationHistoriesRequest::setTimePrintedFrom()
     * @uses GetCommunicationHistoriesRequest::setTimePrintedTo()
     * @uses GetCommunicationHistoriesRequest::setIsPrinted()
     * @uses GetCommunicationHistoriesRequest::setIsGroupBy()
     * @param int $customerId
     * @param string $docType
     * @param string $deliveryType
     * @param string $templateName
     * @param string $creationTimeFrom
     * @param string $creationTimeTo
     * @param string $printTimeFrom
     * @param string $printTimeTo
     * @param string $timePrintedFrom
     * @param string $timePrintedTo
     * @param bool $isPrinted
     * @param bool $isGroupBy
     */
    public function __construct(?int $customerId = null, ?string $docType = null, ?string $deliveryType = null, ?string $templateName = null, ?string $creationTimeFrom = null, ?string $creationTimeTo = null, ?string $printTimeFrom = null, ?string $printTimeTo = null, ?string $timePrintedFrom = null, ?string $timePrintedTo = null, ?bool $isPrinted = null, ?bool $isGroupBy = false)
    {
        $this
            ->setCustomerId($customerId)
            ->setDocType($docType)
            ->setDeliveryType($deliveryType)
            ->setTemplateName($templateName)
            ->setCreationTimeFrom($creationTimeFrom)
            ->setCreationTimeTo($creationTimeTo)
            ->setPrintTimeFrom($printTimeFrom)
            ->setPrintTimeTo($printTimeTo)
            ->setTimePrintedFrom($timePrintedFrom)
            ->setTimePrintedTo($timePrintedTo)
            ->setIsPrinted($isPrinted)
            ->setIsGroupBy($isGroupBy);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCommunicationHistoriesRequest
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
     * Get docType value
     * @return string|null
     */
    public function getDocType(): ?string
    {
        return $this->docType;
    }
    /**
     * Set docType value
     * @param string $docType
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCommunicationHistoriesRequest
     */
    public function setDocType(?string $docType = null): self
    {
        // validation for constraint: string
        if (!is_null($docType) && !is_string($docType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($docType, true), gettype($docType)), __LINE__);
        }
        $this->docType = $docType;
        
        return $this;
    }
    /**
     * Get deliveryType value
     * @return string|null
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }
    /**
     * Set deliveryType value
     * @param string $deliveryType
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCommunicationHistoriesRequest
     */
    public function setDeliveryType(?string $deliveryType = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryType) && !is_string($deliveryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryType, true), gettype($deliveryType)), __LINE__);
        }
        $this->deliveryType = $deliveryType;
        
        return $this;
    }
    /**
     * Get templateName value
     * @return string|null
     */
    public function getTemplateName(): ?string
    {
        return $this->templateName;
    }
    /**
     * Set templateName value
     * @param string $templateName
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCommunicationHistoriesRequest
     */
    public function setTemplateName(?string $templateName = null): self
    {
        // validation for constraint: string
        if (!is_null($templateName) && !is_string($templateName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateName, true), gettype($templateName)), __LINE__);
        }
        $this->templateName = $templateName;
        
        return $this;
    }
    /**
     * Get creationTimeFrom value
     * @return string|null
     */
    public function getCreationTimeFrom(): ?string
    {
        return $this->creationTimeFrom;
    }
    /**
     * Set creationTimeFrom value
     * @param string $creationTimeFrom
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCommunicationHistoriesRequest
     */
    public function setCreationTimeFrom(?string $creationTimeFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimeFrom) && !is_string($creationTimeFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimeFrom, true), gettype($creationTimeFrom)), __LINE__);
        }
        $this->creationTimeFrom = $creationTimeFrom;
        
        return $this;
    }
    /**
     * Get creationTimeTo value
     * @return string|null
     */
    public function getCreationTimeTo(): ?string
    {
        return $this->creationTimeTo;
    }
    /**
     * Set creationTimeTo value
     * @param string $creationTimeTo
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCommunicationHistoriesRequest
     */
    public function setCreationTimeTo(?string $creationTimeTo = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimeTo) && !is_string($creationTimeTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimeTo, true), gettype($creationTimeTo)), __LINE__);
        }
        $this->creationTimeTo = $creationTimeTo;
        
        return $this;
    }
    /**
     * Get printTimeFrom value
     * @return string|null
     */
    public function getPrintTimeFrom(): ?string
    {
        return $this->printTimeFrom;
    }
    /**
     * Set printTimeFrom value
     * @param string $printTimeFrom
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCommunicationHistoriesRequest
     */
    public function setPrintTimeFrom(?string $printTimeFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($printTimeFrom) && !is_string($printTimeFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printTimeFrom, true), gettype($printTimeFrom)), __LINE__);
        }
        $this->printTimeFrom = $printTimeFrom;
        
        return $this;
    }
    /**
     * Get printTimeTo value
     * @return string|null
     */
    public function getPrintTimeTo(): ?string
    {
        return $this->printTimeTo;
    }
    /**
     * Set printTimeTo value
     * @param string $printTimeTo
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCommunicationHistoriesRequest
     */
    public function setPrintTimeTo(?string $printTimeTo = null): self
    {
        // validation for constraint: string
        if (!is_null($printTimeTo) && !is_string($printTimeTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printTimeTo, true), gettype($printTimeTo)), __LINE__);
        }
        $this->printTimeTo = $printTimeTo;
        
        return $this;
    }
    /**
     * Get timePrintedFrom value
     * @return string|null
     */
    public function getTimePrintedFrom(): ?string
    {
        return $this->timePrintedFrom;
    }
    /**
     * Set timePrintedFrom value
     * @param string $timePrintedFrom
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCommunicationHistoriesRequest
     */
    public function setTimePrintedFrom(?string $timePrintedFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($timePrintedFrom) && !is_string($timePrintedFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timePrintedFrom, true), gettype($timePrintedFrom)), __LINE__);
        }
        $this->timePrintedFrom = $timePrintedFrom;
        
        return $this;
    }
    /**
     * Get timePrintedTo value
     * @return string|null
     */
    public function getTimePrintedTo(): ?string
    {
        return $this->timePrintedTo;
    }
    /**
     * Set timePrintedTo value
     * @param string $timePrintedTo
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCommunicationHistoriesRequest
     */
    public function setTimePrintedTo(?string $timePrintedTo = null): self
    {
        // validation for constraint: string
        if (!is_null($timePrintedTo) && !is_string($timePrintedTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timePrintedTo, true), gettype($timePrintedTo)), __LINE__);
        }
        $this->timePrintedTo = $timePrintedTo;
        
        return $this;
    }
    /**
     * Get isPrinted value
     * @return bool|null
     */
    public function getIsPrinted(): ?bool
    {
        return $this->isPrinted;
    }
    /**
     * Set isPrinted value
     * @param bool $isPrinted
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCommunicationHistoriesRequest
     */
    public function setIsPrinted(?bool $isPrinted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPrinted) && !is_bool($isPrinted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPrinted, true), gettype($isPrinted)), __LINE__);
        }
        $this->isPrinted = $isPrinted;
        
        return $this;
    }
    /**
     * Get isGroupBy value
     * @return bool|null
     */
    public function getIsGroupBy(): ?bool
    {
        return $this->isGroupBy;
    }
    /**
     * Set isGroupBy value
     * @param bool $isGroupBy
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCommunicationHistoriesRequest
     */
    public function setIsGroupBy(?bool $isGroupBy = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isGroupBy) && !is_bool($isGroupBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGroupBy, true), gettype($isGroupBy)), __LINE__);
        }
        $this->isGroupBy = $isGroupBy;
        
        return $this;
    }
}
