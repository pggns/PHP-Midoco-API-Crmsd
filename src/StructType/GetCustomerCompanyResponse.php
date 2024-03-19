<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerCompanyResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerCompanyResponse extends AbstractStructBase
{
    /**
     * The mediatorName
     * @var string|null
     */
    protected ?string $mediatorName = null;
    /**
     * Constructor method for GetCustomerCompanyResponse
     * @uses GetCustomerCompanyResponse::setMediatorName()
     * @param string $mediatorName
     */
    public function __construct(?string $mediatorName = null)
    {
        $this
            ->setMediatorName($mediatorName);
    }
    /**
     * Get mediatorName value
     * @return string|null
     */
    public function getMediatorName(): ?string
    {
        return $this->mediatorName;
    }
    /**
     * Set mediatorName value
     * @param string $mediatorName
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerCompanyResponse
     */
    public function setMediatorName(?string $mediatorName = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorName) && !is_string($mediatorName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorName, true), gettype($mediatorName)), __LINE__);
        }
        $this->mediatorName = $mediatorName;
        
        return $this;
    }
}
