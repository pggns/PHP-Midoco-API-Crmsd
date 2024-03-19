<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgencyDetailsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAgencyDetailsResponse extends AbstractStructBase
{
    /**
     * The MidocoAgency
     * Meta information extracted from the WSDL
     * - ref: MidocoAgency
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoAgency|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoAgency $MidocoAgency = null;
    /**
     * Constructor method for GetAgencyDetailsResponse
     * @uses GetAgencyDetailsResponse::setMidocoAgency()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoAgency $midocoAgency
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoAgency $midocoAgency = null)
    {
        $this
            ->setMidocoAgency($midocoAgency);
    }
    /**
     * Get MidocoAgency value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoAgency|null
     */
    public function getMidocoAgency(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoAgency
    {
        return $this->MidocoAgency;
    }
    /**
     * Set MidocoAgency value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoAgency $midocoAgency
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAgencyDetailsResponse
     */
    public function setMidocoAgency(?\Pggns\MidocoApi\Crmsd\StructType\MidocoAgency $midocoAgency = null): self
    {
        $this->MidocoAgency = $midocoAgency;
        
        return $this;
    }
}
