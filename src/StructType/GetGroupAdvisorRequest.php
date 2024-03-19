<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGroupAdvisorRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetGroupAdvisorRequest extends AbstractStructBase
{
    /**
     * The customer_id
     * @var int|null
     */
    protected ?int $customer_id = null;
    /**
     * Constructor method for GetGroupAdvisorRequest
     * @uses GetGroupAdvisorRequest::setCustomer_id()
     * @param int $customer_id
     */
    public function __construct(?int $customer_id = null)
    {
        $this
            ->setCustomer_id($customer_id);
    }
    /**
     * Get customer_id value
     * @return int|null
     */
    public function getCustomer_id(): ?int
    {
        return $this->customer_id;
    }
    /**
     * Set customer_id value
     * @param int $customer_id
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetGroupAdvisorRequest
     */
    public function setCustomer_id(?int $customer_id = null): self
    {
        // validation for constraint: int
        if (!is_null($customer_id) && !(is_int($customer_id) || ctype_digit($customer_id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customer_id, true), gettype($customer_id)), __LINE__);
        }
        $this->customer_id = $customer_id;
        
        return $this;
    }
}
