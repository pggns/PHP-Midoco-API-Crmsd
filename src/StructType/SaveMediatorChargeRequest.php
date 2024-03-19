<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMediatorChargeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMediatorChargeRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmMediatorCharge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmMediatorCharge
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeDTO $MidocoCrmMediatorCharge = null;
    /**
     * Constructor method for SaveMediatorChargeRequest
     * @uses SaveMediatorChargeRequest::setMidocoCrmMediatorCharge()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeDTO $midocoCrmMediatorCharge
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeDTO $midocoCrmMediatorCharge = null)
    {
        $this
            ->setMidocoCrmMediatorCharge($midocoCrmMediatorCharge);
    }
    /**
     * Get MidocoCrmMediatorCharge value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeDTO|null
     */
    public function getMidocoCrmMediatorCharge(): ?\Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeDTO
    {
        return $this->MidocoCrmMediatorCharge;
    }
    /**
     * Set MidocoCrmMediatorCharge value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeDTO $midocoCrmMediatorCharge
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveMediatorChargeRequest
     */
    public function setMidocoCrmMediatorCharge(?\Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeDTO $midocoCrmMediatorCharge = null): self
    {
        $this->MidocoCrmMediatorCharge = $midocoCrmMediatorCharge;
        
        return $this;
    }
}
