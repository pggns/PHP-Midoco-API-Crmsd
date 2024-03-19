<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCrmPersonTravellerResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCrmPersonTravellerResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmPersonTraveller
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmPersonTraveller
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO $MidocoCrmPersonTraveller = null;
    /**
     * Constructor method for DeleteCrmPersonTravellerResponse
     * @uses DeleteCrmPersonTravellerResponse::setMidocoCrmPersonTraveller()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller = null)
    {
        $this
            ->setMidocoCrmPersonTraveller($midocoCrmPersonTraveller);
    }
    /**
     * Get MidocoCrmPersonTraveller value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO|null
     */
    public function getMidocoCrmPersonTraveller(): ?\Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO
    {
        return $this->MidocoCrmPersonTraveller;
    }
    /**
     * Set MidocoCrmPersonTraveller value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCrmPersonTravellerResponse
     */
    public function setMidocoCrmPersonTraveller(?\Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller = null): self
    {
        $this->MidocoCrmPersonTraveller = $midocoCrmPersonTraveller;
        
        return $this;
    }
}
