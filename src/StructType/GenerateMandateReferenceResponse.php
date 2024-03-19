<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateMandateReferenceResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GenerateMandateReferenceResponse extends AbstractStructBase
{
    /**
     * The referenceId
     * @var string|null
     */
    protected ?string $referenceId = null;
    /**
     * The isActive
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * Constructor method for GenerateMandateReferenceResponse
     * @uses GenerateMandateReferenceResponse::setReferenceId()
     * @uses GenerateMandateReferenceResponse::setIsActive()
     * @param string $referenceId
     * @param bool $isActive
     */
    public function __construct(?string $referenceId = null, ?bool $isActive = null)
    {
        $this
            ->setReferenceId($referenceId)
            ->setIsActive($isActive);
    }
    /**
     * Get referenceId value
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }
    /**
     * Set referenceId value
     * @param string $referenceId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GenerateMandateReferenceResponse
     */
    public function setReferenceId(?string $referenceId = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceId) && !is_string($referenceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceId, true), gettype($referenceId)), __LINE__);
        }
        $this->referenceId = $referenceId;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GenerateMandateReferenceResponse
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
}
