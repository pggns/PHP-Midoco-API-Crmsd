<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustInfoIfDifferentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustInfoIfDifferentRequest extends AbstractStructBase
{
    /**
     * The customerId1
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $customerId1;
    /**
     * The customerId2
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $customerId2;
    /**
     * Constructor method for GetCustInfoIfDifferentRequest
     * @uses GetCustInfoIfDifferentRequest::setCustomerId1()
     * @uses GetCustInfoIfDifferentRequest::setCustomerId2()
     * @param int $customerId1
     * @param int $customerId2
     */
    public function __construct(int $customerId1, int $customerId2)
    {
        $this
            ->setCustomerId1($customerId1)
            ->setCustomerId2($customerId2);
    }
    /**
     * Get customerId1 value
     * @return int
     */
    public function getCustomerId1(): int
    {
        return $this->customerId1;
    }
    /**
     * Set customerId1 value
     * @param int $customerId1
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustInfoIfDifferentRequest
     */
    public function setCustomerId1(int $customerId1): self
    {
        // validation for constraint: int
        if (!is_null($customerId1) && !(is_int($customerId1) || ctype_digit($customerId1))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId1, true), gettype($customerId1)), __LINE__);
        }
        $this->customerId1 = $customerId1;
        
        return $this;
    }
    /**
     * Get customerId2 value
     * @return int
     */
    public function getCustomerId2(): int
    {
        return $this->customerId2;
    }
    /**
     * Set customerId2 value
     * @param int $customerId2
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustInfoIfDifferentRequest
     */
    public function setCustomerId2(int $customerId2): self
    {
        // validation for constraint: int
        if (!is_null($customerId2) && !(is_int($customerId2) || ctype_digit($customerId2))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId2, true), gettype($customerId2)), __LINE__);
        }
        $this->customerId2 = $customerId2;
        
        return $this;
    }
}
