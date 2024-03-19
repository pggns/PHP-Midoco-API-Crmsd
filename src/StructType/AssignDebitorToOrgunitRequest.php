<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignDebitorToOrgunitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AssignDebitorToOrgunitRequest extends AbstractStructBase
{
    /**
     * The MidocoDebitorAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoDebitorAssign
     * @var \Pggns\MidocoApi\Crmsd\StructType\DebitorAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\DebitorAssignDTO $MidocoDebitorAssign = null;
    /**
     * Constructor method for AssignDebitorToOrgunitRequest
     * @uses AssignDebitorToOrgunitRequest::setMidocoDebitorAssign()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DebitorAssignDTO $midocoDebitorAssign
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\DebitorAssignDTO $midocoDebitorAssign = null)
    {
        $this
            ->setMidocoDebitorAssign($midocoDebitorAssign);
    }
    /**
     * Get MidocoDebitorAssign value
     * @return \Pggns\MidocoApi\Crmsd\StructType\DebitorAssignDTO|null
     */
    public function getMidocoDebitorAssign(): ?\Pggns\MidocoApi\Crmsd\StructType\DebitorAssignDTO
    {
        return $this->MidocoDebitorAssign;
    }
    /**
     * Set MidocoDebitorAssign value
     * @param \Pggns\MidocoApi\Crmsd\StructType\DebitorAssignDTO $midocoDebitorAssign
     * @return \Pggns\MidocoApi\Crmsd\StructType\AssignDebitorToOrgunitRequest
     */
    public function setMidocoDebitorAssign(?\Pggns\MidocoApi\Crmsd\StructType\DebitorAssignDTO $midocoDebitorAssign = null): self
    {
        $this->MidocoDebitorAssign = $midocoDebitorAssign;
        
        return $this;
    }
}
