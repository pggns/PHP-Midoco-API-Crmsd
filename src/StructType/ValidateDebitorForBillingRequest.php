<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateDebitorForBillingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidateDebitorForBillingRequest extends AbstractStructBase
{
    /**
     * The debitorNo
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $debitorNo;
    /**
     * The orgUnit
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $orgUnit;
    /**
     * The customerNo
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $customerNo = null;
    /**
     * Constructor method for ValidateDebitorForBillingRequest
     * @uses ValidateDebitorForBillingRequest::setDebitorNo()
     * @uses ValidateDebitorForBillingRequest::setOrgUnit()
     * @uses ValidateDebitorForBillingRequest::setCustomerNo()
     * @param string $debitorNo
     * @param string $orgUnit
     * @param int $customerNo
     */
    public function __construct(string $debitorNo, string $orgUnit, ?int $customerNo = null)
    {
        $this
            ->setDebitorNo($debitorNo)
            ->setOrgUnit($orgUnit)
            ->setCustomerNo($customerNo);
    }
    /**
     * Get debitorNo value
     * @return string
     */
    public function getDebitorNo(): string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateDebitorForBillingRequest
     */
    public function setDebitorNo(string $debitorNo): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string
     */
    public function getOrgUnit(): string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateDebitorForBillingRequest
     */
    public function setOrgUnit(string $orgUnit): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get customerNo value
     * @return int|null
     */
    public function getCustomerNo(): ?int
    {
        return $this->customerNo;
    }
    /**
     * Set customerNo value
     * @param int $customerNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateDebitorForBillingRequest
     */
    public function setCustomerNo(?int $customerNo = null): self
    {
        // validation for constraint: int
        if (!is_null($customerNo) && !(is_int($customerNo) || ctype_digit($customerNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerNo, true), gettype($customerNo)), __LINE__);
        }
        $this->customerNo = $customerNo;
        
        return $this;
    }
}
