<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateUstIdResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidateUstIdResponse extends AbstractStructBase
{
    /**
     * The isValid
     * @var bool|null
     */
    protected ?bool $isValid = null;
    /**
     * Constructor method for ValidateUstIdResponse
     * @uses ValidateUstIdResponse::setIsValid()
     * @param bool $isValid
     */
    public function __construct(?bool $isValid = null)
    {
        $this
            ->setIsValid($isValid);
    }
    /**
     * Get isValid value
     * @return bool|null
     */
    public function getIsValid(): ?bool
    {
        return $this->isValid;
    }
    /**
     * Set isValid value
     * @param bool $isValid
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateUstIdResponse
     */
    public function setIsValid(?bool $isValid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isValid) && !is_bool($isValid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isValid, true), gettype($isValid)), __LINE__);
        }
        $this->isValid = $isValid;
        
        return $this;
    }
}
