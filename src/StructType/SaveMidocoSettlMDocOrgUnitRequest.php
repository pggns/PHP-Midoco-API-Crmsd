<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoSettlMDocOrgUnitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoSettlMDocOrgUnitRequest extends AbstractStructBase
{
    /**
     * The MidocoAssignedMidocoMdocOUnit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoAssignedMidocoMdocOUnit
     * @var \Pggns\MidocoApi\Crmsd\StructType\AssignedMidocoMdocOUnitDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\AssignedMidocoMdocOUnitDTO $MidocoAssignedMidocoMdocOUnit = null;
    /**
     * Constructor method for SaveMidocoSettlMDocOrgUnitRequest
     * @uses SaveMidocoSettlMDocOrgUnitRequest::setMidocoAssignedMidocoMdocOUnit()
     * @param \Pggns\MidocoApi\Crmsd\StructType\AssignedMidocoMdocOUnitDTO $midocoAssignedMidocoMdocOUnit
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\AssignedMidocoMdocOUnitDTO $midocoAssignedMidocoMdocOUnit = null)
    {
        $this
            ->setMidocoAssignedMidocoMdocOUnit($midocoAssignedMidocoMdocOUnit);
    }
    /**
     * Get MidocoAssignedMidocoMdocOUnit value
     * @return \Pggns\MidocoApi\Crmsd\StructType\AssignedMidocoMdocOUnitDTO|null
     */
    public function getMidocoAssignedMidocoMdocOUnit(): ?\Pggns\MidocoApi\Crmsd\StructType\AssignedMidocoMdocOUnitDTO
    {
        return $this->MidocoAssignedMidocoMdocOUnit;
    }
    /**
     * Set MidocoAssignedMidocoMdocOUnit value
     * @param \Pggns\MidocoApi\Crmsd\StructType\AssignedMidocoMdocOUnitDTO $midocoAssignedMidocoMdocOUnit
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveMidocoSettlMDocOrgUnitRequest
     */
    public function setMidocoAssignedMidocoMdocOUnit(?\Pggns\MidocoApi\Crmsd\StructType\AssignedMidocoMdocOUnitDTO $midocoAssignedMidocoMdocOUnit = null): self
    {
        $this->MidocoAssignedMidocoMdocOUnit = $midocoAssignedMidocoMdocOUnit;
        
        return $this;
    }
}
