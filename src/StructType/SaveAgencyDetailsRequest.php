<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAgencyDetailsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAgencyDetailsRequest extends AbstractStructBase
{
    /**
     * The SaveMidocoAgencyDetails
     * Meta information extracted from the WSDL
     * - ref: SaveMidocoAgencyDetails
     * @var \Pggns\MidocoApi\Crmsd\StructType\AgencyDetailDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\AgencyDetailDTO $SaveMidocoAgencyDetails = null;
    /**
     * The collectiveInvoice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $collectiveInvoice = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveAgencyDetailsRequest
     * @uses SaveAgencyDetailsRequest::setSaveMidocoAgencyDetails()
     * @uses SaveAgencyDetailsRequest::setCollectiveInvoice()
     * @uses SaveAgencyDetailsRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyDetailDTO $saveMidocoAgencyDetails
     * @param bool $collectiveInvoice
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\AgencyDetailDTO $saveMidocoAgencyDetails = null, ?bool $collectiveInvoice = null, ?int $internalVersion = null)
    {
        $this
            ->setSaveMidocoAgencyDetails($saveMidocoAgencyDetails)
            ->setCollectiveInvoice($collectiveInvoice)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get SaveMidocoAgencyDetails value
     * @return \Pggns\MidocoApi\Crmsd\StructType\AgencyDetailDTO|null
     */
    public function getSaveMidocoAgencyDetails(): ?\Pggns\MidocoApi\Crmsd\StructType\AgencyDetailDTO
    {
        return $this->SaveMidocoAgencyDetails;
    }
    /**
     * Set SaveMidocoAgencyDetails value
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyDetailDTO $saveMidocoAgencyDetails
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveAgencyDetailsRequest
     */
    public function setSaveMidocoAgencyDetails(?\Pggns\MidocoApi\Crmsd\StructType\AgencyDetailDTO $saveMidocoAgencyDetails = null): self
    {
        $this->SaveMidocoAgencyDetails = $saveMidocoAgencyDetails;
        
        return $this;
    }
    /**
     * Get collectiveInvoice value
     * @return bool|null
     */
    public function getCollectiveInvoice(): ?bool
    {
        return $this->collectiveInvoice;
    }
    /**
     * Set collectiveInvoice value
     * @param bool $collectiveInvoice
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveAgencyDetailsRequest
     */
    public function setCollectiveInvoice(?bool $collectiveInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($collectiveInvoice) && !is_bool($collectiveInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collectiveInvoice, true), gettype($collectiveInvoice)), __LINE__);
        }
        $this->collectiveInvoice = $collectiveInvoice;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveAgencyDetailsRequest
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
