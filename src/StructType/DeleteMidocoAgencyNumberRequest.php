<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoAgencyNumberRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoAgencyNumberRequest extends AbstractStructBase
{
    /**
     * The MidocoAgencyNumber
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencyNumber
     * @var \Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO $MidocoAgencyNumber = null;
    /**
     * Constructor method for DeleteMidocoAgencyNumberRequest
     * @uses DeleteMidocoAgencyNumberRequest::setMidocoAgencyNumber()
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO $midocoAgencyNumber
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO $midocoAgencyNumber = null)
    {
        $this
            ->setMidocoAgencyNumber($midocoAgencyNumber);
    }
    /**
     * Get MidocoAgencyNumber value
     * @return \Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO|null
     */
    public function getMidocoAgencyNumber(): ?\Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO
    {
        return $this->MidocoAgencyNumber;
    }
    /**
     * Set MidocoAgencyNumber value
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO $midocoAgencyNumber
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteMidocoAgencyNumberRequest
     */
    public function setMidocoAgencyNumber(?\Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO $midocoAgencyNumber = null): self
    {
        $this->MidocoAgencyNumber = $midocoAgencyNumber;
        
        return $this;
    }
}
