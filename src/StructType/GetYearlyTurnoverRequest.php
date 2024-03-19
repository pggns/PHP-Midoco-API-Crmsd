<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetYearlyTurnoverRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetYearlyTurnoverRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The noOfYears
     * Meta information extracted from the WSDL
     * - default: 4
     * @var int|null
     */
    protected ?int $noOfYears = null;
    /**
     * Constructor method for GetYearlyTurnoverRequest
     * @uses GetYearlyTurnoverRequest::setCustomerId()
     * @uses GetYearlyTurnoverRequest::setNoOfYears()
     * @param int $customerId
     * @param int $noOfYears
     */
    public function __construct(?int $customerId = null, ?int $noOfYears = 4)
    {
        $this
            ->setCustomerId($customerId)
            ->setNoOfYears($noOfYears);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetYearlyTurnoverRequest
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
     * Get noOfYears value
     * @return int|null
     */
    public function getNoOfYears(): ?int
    {
        return $this->noOfYears;
    }
    /**
     * Set noOfYears value
     * @param int $noOfYears
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetYearlyTurnoverRequest
     */
    public function setNoOfYears(?int $noOfYears = 4): self
    {
        // validation for constraint: int
        if (!is_null($noOfYears) && !(is_int($noOfYears) || ctype_digit($noOfYears))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfYears, true), gettype($noOfYears)), __LINE__);
        }
        $this->noOfYears = $noOfYears;
        
        return $this;
    }
}
