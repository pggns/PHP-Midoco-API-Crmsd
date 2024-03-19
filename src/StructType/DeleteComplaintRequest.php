<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteComplaintRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteComplaintRequest extends AbstractStructBase
{
    /**
     * The MidocoComplaint
     * Meta information extracted from the WSDL
     * - ref: MidocoComplaint
     * @var \Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO $MidocoComplaint = null;
    /**
     * Constructor method for DeleteComplaintRequest
     * @uses DeleteComplaintRequest::setMidocoComplaint()
     * @param \Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO $midocoComplaint
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO $midocoComplaint = null)
    {
        $this
            ->setMidocoComplaint($midocoComplaint);
    }
    /**
     * Get MidocoComplaint value
     * @return \Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO|null
     */
    public function getMidocoComplaint(): ?\Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO
    {
        return $this->MidocoComplaint;
    }
    /**
     * Set MidocoComplaint value
     * @param \Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO $midocoComplaint
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteComplaintRequest
     */
    public function setMidocoComplaint(?\Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO $midocoComplaint = null): self
    {
        $this->MidocoComplaint = $midocoComplaint;
        
        return $this;
    }
}
