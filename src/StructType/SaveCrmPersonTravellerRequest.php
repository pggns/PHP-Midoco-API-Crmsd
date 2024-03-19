<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmPersonTravellerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCrmPersonTravellerRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmPersonTraveller
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmPersonTraveller
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO $MidocoCrmPersonTraveller = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveCrmPersonTravellerRequest
     * @uses SaveCrmPersonTravellerRequest::setMidocoCrmPersonTraveller()
     * @uses SaveCrmPersonTravellerRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCrmPersonTraveller($midocoCrmPersonTraveller)
            ->setInternalVersion($internalVersion);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCrmPersonTravellerRequest
     */
    public function setMidocoCrmPersonTraveller(?\Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller = null): self
    {
        $this->MidocoCrmPersonTraveller = $midocoCrmPersonTraveller;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCrmPersonTravellerRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
