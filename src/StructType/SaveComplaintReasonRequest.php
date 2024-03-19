<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveComplaintReasonRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveComplaintReasonRequest extends AbstractStructBase
{
    /**
     * The MidocoComplaintReason
     * Meta information extracted from the WSDL
     * - ref: MidocoComplaintReason
     * @var \Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDTO $MidocoComplaintReason = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveComplaintReasonRequest
     * @uses SaveComplaintReasonRequest::setMidocoComplaintReason()
     * @uses SaveComplaintReasonRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDTO $midocoComplaintReason
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDTO $midocoComplaintReason = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoComplaintReason($midocoComplaintReason)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoComplaintReason value
     * @return \Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDTO|null
     */
    public function getMidocoComplaintReason(): ?\Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDTO
    {
        return $this->MidocoComplaintReason;
    }
    /**
     * Set MidocoComplaintReason value
     * @param \Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDTO $midocoComplaintReason
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveComplaintReasonRequest
     */
    public function setMidocoComplaintReason(?\Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDTO $midocoComplaintReason = null): self
    {
        $this->MidocoComplaintReason = $midocoComplaintReason;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveComplaintReasonRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
