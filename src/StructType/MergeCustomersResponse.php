<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MergeCustomersResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: mergeCustomers --- merge 2 customers that are considered to be the same
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MergeCustomersResponse extends AbstractStructBase
{
    /**
     * The customersMerged
     * @var bool|null
     */
    protected ?bool $customersMerged = null;
    /**
     * Constructor method for MergeCustomersResponse
     * @uses MergeCustomersResponse::setCustomersMerged()
     * @param bool $customersMerged
     */
    public function __construct(?bool $customersMerged = null)
    {
        $this
            ->setCustomersMerged($customersMerged);
    }
    /**
     * Get customersMerged value
     * @return bool|null
     */
    public function getCustomersMerged(): ?bool
    {
        return $this->customersMerged;
    }
    /**
     * Set customersMerged value
     * @param bool $customersMerged
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersResponse
     */
    public function setCustomersMerged(?bool $customersMerged = null): self
    {
        // validation for constraint: boolean
        if (!is_null($customersMerged) && !is_bool($customersMerged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($customersMerged, true), gettype($customersMerged)), __LINE__);
        }
        $this->customersMerged = $customersMerged;
        
        return $this;
    }
}
