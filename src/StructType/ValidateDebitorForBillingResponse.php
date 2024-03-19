<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateDebitorForBillingResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: validateDebitorForBilling --- validates if the debitor no supplied for a billing document is a valid one
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidateDebitorForBillingResponse extends AbstractStructBase
{
    /**
     * The isValid
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $isValid;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for ValidateDebitorForBillingResponse
     * @uses ValidateDebitorForBillingResponse::setIsValid()
     * @uses ValidateDebitorForBillingResponse::setDescription()
     * @param bool $isValid
     * @param string $description
     */
    public function __construct(bool $isValid, ?string $description = null)
    {
        $this
            ->setIsValid($isValid)
            ->setDescription($description);
    }
    /**
     * Get isValid value
     * @return bool
     */
    public function getIsValid(): bool
    {
        return $this->isValid;
    }
    /**
     * Set isValid value
     * @param bool $isValid
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateDebitorForBillingResponse
     */
    public function setIsValid(bool $isValid): self
    {
        // validation for constraint: boolean
        if (!is_null($isValid) && !is_bool($isValid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isValid, true), gettype($isValid)), __LINE__);
        }
        $this->isValid = $isValid;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateDebitorForBillingResponse
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
}
