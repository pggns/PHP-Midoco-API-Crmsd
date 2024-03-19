<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateDebitCardResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: validateDebitCard --- validate the debit card information
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidateDebitCardResponse extends AbstractStructBase
{
    /**
     * The isValid
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $isValid;
    /**
     * Constructor method for ValidateDebitCardResponse
     * @uses ValidateDebitCardResponse::setIsValid()
     * @param bool $isValid
     */
    public function __construct(bool $isValid)
    {
        $this
            ->setIsValid($isValid);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateDebitCardResponse
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
}
