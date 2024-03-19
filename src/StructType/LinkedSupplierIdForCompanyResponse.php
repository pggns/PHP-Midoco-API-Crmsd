<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LinkedSupplierIdForCompanyResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LinkedSupplierIdForCompanyResponse extends AbstractStructBase
{
    /**
     * The linkedSupplierId
     * @var string|null
     */
    protected ?string $linkedSupplierId = null;
    /**
     * Constructor method for LinkedSupplierIdForCompanyResponse
     * @uses LinkedSupplierIdForCompanyResponse::setLinkedSupplierId()
     * @param string $linkedSupplierId
     */
    public function __construct(?string $linkedSupplierId = null)
    {
        $this
            ->setLinkedSupplierId($linkedSupplierId);
    }
    /**
     * Get linkedSupplierId value
     * @return string|null
     */
    public function getLinkedSupplierId(): ?string
    {
        return $this->linkedSupplierId;
    }
    /**
     * Set linkedSupplierId value
     * @param string $linkedSupplierId
     * @return \Pggns\MidocoApi\Crmsd\StructType\LinkedSupplierIdForCompanyResponse
     */
    public function setLinkedSupplierId(?string $linkedSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($linkedSupplierId) && !is_string($linkedSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkedSupplierId, true), gettype($linkedSupplierId)), __LINE__);
        }
        $this->linkedSupplierId = $linkedSupplierId;
        
        return $this;
    }
}
