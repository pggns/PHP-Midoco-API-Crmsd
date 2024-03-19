<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTravellerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteTravellerRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmTraveller
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmTraveller
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller $MidocoCrmTraveller = null;
    /**
     * Constructor method for DeleteTravellerRequest
     * @uses DeleteTravellerRequest::setMidocoCrmTraveller()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller $midocoCrmTraveller
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller $midocoCrmTraveller = null)
    {
        $this
            ->setMidocoCrmTraveller($midocoCrmTraveller);
    }
    /**
     * Get MidocoCrmTraveller value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller|null
     */
    public function getMidocoCrmTraveller(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller
    {
        return $this->MidocoCrmTraveller;
    }
    /**
     * Set MidocoCrmTraveller value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller $midocoCrmTraveller
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteTravellerRequest
     */
    public function setMidocoCrmTraveller(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller $midocoCrmTraveller = null): self
    {
        $this->MidocoCrmTraveller = $midocoCrmTraveller;
        
        return $this;
    }
}
