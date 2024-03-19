<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteComplaintReasonRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteComplaintReasonRequest extends AbstractStructBase
{
    /**
     * The MidocoComplaintReason
     * Meta information extracted from the WSDL
     * - ref: MidocoComplaintReason
     * @var \Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDTO $MidocoComplaintReason = null;
    /**
     * Constructor method for DeleteComplaintReasonRequest
     * @uses DeleteComplaintReasonRequest::setMidocoComplaintReason()
     * @param \Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDTO $midocoComplaintReason
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDTO $midocoComplaintReason = null)
    {
        $this
            ->setMidocoComplaintReason($midocoComplaintReason);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteComplaintReasonRequest
     */
    public function setMidocoComplaintReason(?\Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDTO $midocoComplaintReason = null): self
    {
        $this->MidocoComplaintReason = $midocoComplaintReason;
        
        return $this;
    }
}
