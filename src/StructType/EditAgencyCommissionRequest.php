<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EditAgencyCommissionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EditAgencyCommissionRequest extends AbstractStructBase
{
    /**
     * The MidocoAgencyCommission
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencyCommission
     * @var \Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO $MidocoAgencyCommission = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for EditAgencyCommissionRequest
     * @uses EditAgencyCommissionRequest::setMidocoAgencyCommission()
     * @uses EditAgencyCommissionRequest::setCustomerId()
     * @uses EditAgencyCommissionRequest::setValidFrom()
     * @uses EditAgencyCommissionRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO $midocoAgencyCommission
     * @param int $customerId
     * @param string $validFrom
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO $midocoAgencyCommission = null, ?int $customerId = null, ?string $validFrom = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoAgencyCommission($midocoAgencyCommission)
            ->setCustomerId($customerId)
            ->setValidFrom($validFrom)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoAgencyCommission value
     * @return \Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO|null
     */
    public function getMidocoAgencyCommission(): ?\Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO
    {
        return $this->MidocoAgencyCommission;
    }
    /**
     * Set MidocoAgencyCommission value
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO $midocoAgencyCommission
     * @return \Pggns\MidocoApi\Crmsd\StructType\EditAgencyCommissionRequest
     */
    public function setMidocoAgencyCommission(?\Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO $midocoAgencyCommission = null): self
    {
        $this->MidocoAgencyCommission = $midocoAgencyCommission;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\EditAgencyCommissionRequest
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Crmsd\StructType\EditAgencyCommissionRequest
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\EditAgencyCommissionRequest
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
