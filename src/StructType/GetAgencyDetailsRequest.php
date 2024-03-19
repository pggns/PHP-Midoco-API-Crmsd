<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgencyDetailsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAgencyDetailsRequest extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The cooperationDate
     * @var string|null
     */
    protected ?string $cooperationDate = null;
    /**
     * Constructor method for GetAgencyDetailsRequest
     * @uses GetAgencyDetailsRequest::setAgencyId()
     * @uses GetAgencyDetailsRequest::setCustomerId()
     * @uses GetAgencyDetailsRequest::setCooperationDate()
     * @param string $agencyId
     * @param int $customerId
     * @param string $cooperationDate
     */
    public function __construct(?string $agencyId = null, ?int $customerId = null, ?string $cooperationDate = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setCustomerId($customerId)
            ->setCooperationDate($cooperationDate);
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAgencyDetailsRequest
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAgencyDetailsRequest
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
     * Get cooperationDate value
     * @return string|null
     */
    public function getCooperationDate(): ?string
    {
        return $this->cooperationDate;
    }
    /**
     * Set cooperationDate value
     * @param string $cooperationDate
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAgencyDetailsRequest
     */
    public function setCooperationDate(?string $cooperationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationDate) && !is_string($cooperationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationDate, true), gettype($cooperationDate)), __LINE__);
        }
        $this->cooperationDate = $cooperationDate;
        
        return $this;
    }
}
