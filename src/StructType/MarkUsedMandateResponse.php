<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkUsedMandateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MarkUsedMandateResponse extends AbstractStructBase
{
    /**
     * The PrintJob
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $PrintJob;
    /**
     * The mandateId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $mandateId = null;
    /**
     * The lastUsed
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $lastUsed = null;
    /**
     * Constructor method for MarkUsedMandateResponse
     * @uses MarkUsedMandateResponse::setPrintJob()
     * @uses MarkUsedMandateResponse::setMandateId()
     * @uses MarkUsedMandateResponse::setLastUsed()
     * @param string $printJob
     * @param int $mandateId
     * @param string $lastUsed
     */
    public function __construct(string $printJob, ?int $mandateId = null, ?string $lastUsed = null)
    {
        $this
            ->setPrintJob($printJob)
            ->setMandateId($mandateId)
            ->setLastUsed($lastUsed);
    }
    /**
     * Get PrintJob value
     * @return string
     */
    public function getPrintJob(): string
    {
        return $this->PrintJob;
    }
    /**
     * Set PrintJob value
     * @param string $printJob
     * @return \Pggns\MidocoApi\Crmsd\StructType\MarkUsedMandateResponse
     */
    public function setPrintJob(string $printJob): self
    {
        // validation for constraint: string
        if (!is_null($printJob) && !is_string($printJob)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printJob, true), gettype($printJob)), __LINE__);
        }
        $this->PrintJob = $printJob;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\MarkUsedMandateResponse
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
     * Get lastUsed value
     * @return string|null
     */
    public function getLastUsed(): ?string
    {
        return $this->lastUsed;
    }
    /**
     * Set lastUsed value
     * @param string $lastUsed
     * @return \Pggns\MidocoApi\Crmsd\StructType\MarkUsedMandateResponse
     */
    public function setLastUsed(?string $lastUsed = null): self
    {
        // validation for constraint: string
        if (!is_null($lastUsed) && !is_string($lastUsed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUsed, true), gettype($lastUsed)), __LINE__);
        }
        $this->lastUsed = $lastUsed;
        
        return $this;
    }
}
