<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCommissionDescriptionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCommissionDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoCommissionDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoCommissionDescription
     * @var \Pggns\MidocoApi\Crmsd\StructType\CommissionDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CommissionDescriptionDTO $MidocoCommissionDescription = null;
    /**
     * Constructor method for SaveCommissionDescriptionRequest
     * @uses SaveCommissionDescriptionRequest::setMidocoCommissionDescription()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CommissionDescriptionDTO $midocoCommissionDescription
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CommissionDescriptionDTO $midocoCommissionDescription = null)
    {
        $this
            ->setMidocoCommissionDescription($midocoCommissionDescription);
    }
    /**
     * Get MidocoCommissionDescription value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CommissionDescriptionDTO|null
     */
    public function getMidocoCommissionDescription(): ?\Pggns\MidocoApi\Crmsd\StructType\CommissionDescriptionDTO
    {
        return $this->MidocoCommissionDescription;
    }
    /**
     * Set MidocoCommissionDescription value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CommissionDescriptionDTO $midocoCommissionDescription
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCommissionDescriptionRequest
     */
    public function setMidocoCommissionDescription(?\Pggns\MidocoApi\Crmsd\StructType\CommissionDescriptionDTO $midocoCommissionDescription = null): self
    {
        $this->MidocoCommissionDescription = $midocoCommissionDescription;
        
        return $this;
    }
}
