<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreviewCommunicationHistoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PreviewCommunicationHistoryRequest extends AbstractStructBase
{
    /**
     * The templateName
     * @var string|null
     */
    protected ?string $templateName = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The mediator
     * @var string|null
     */
    protected ?string $mediator = null;
    /**
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * Constructor method for PreviewCommunicationHistoryRequest
     * @uses PreviewCommunicationHistoryRequest::setTemplateName()
     * @uses PreviewCommunicationHistoryRequest::setCustomerId()
     * @uses PreviewCommunicationHistoryRequest::setMediator()
     * @uses PreviewCommunicationHistoryRequest::setTravelNo()
     * @param string $templateName
     * @param int $customerId
     * @param string $mediator
     * @param string $travelNo
     */
    public function __construct(?string $templateName = null, ?int $customerId = null, ?string $mediator = null, ?string $travelNo = null)
    {
        $this
            ->setTemplateName($templateName)
            ->setCustomerId($customerId)
            ->setMediator($mediator)
            ->setTravelNo($travelNo);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\PreviewCommunicationHistoryRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\PreviewCommunicationHistoryRequest
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
     * Get mediator value
     * @return string|null
     */
    public function getMediator(): ?string
    {
        return $this->mediator;
    }
    /**
     * Set mediator value
     * @param string $mediator
     * @return \Pggns\MidocoApi\Crmsd\StructType\PreviewCommunicationHistoryRequest
     */
    public function setMediator(?string $mediator = null): self
    {
        // validation for constraint: string
        if (!is_null($mediator) && !is_string($mediator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediator, true), gettype($mediator)), __LINE__);
        }
        $this->mediator = $mediator;
        
        return $this;
    }
    /**
     * Get travelNo value
     * @return string|null
     */
    public function getTravelNo(): ?string
    {
        return $this->travelNo;
    }
    /**
     * Set travelNo value
     * @param string $travelNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\PreviewCommunicationHistoryRequest
     */
    public function setTravelNo(?string $travelNo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNo) && !is_string($travelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNo, true), gettype($travelNo)), __LINE__);
        }
        $this->travelNo = $travelNo;
        
        return $this;
    }
}
