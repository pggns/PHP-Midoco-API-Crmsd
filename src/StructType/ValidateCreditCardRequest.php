<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateCreditCardRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidateCreditCardRequest extends AbstractStructBase
{
    /**
     * The ccNumber
     * @var string|null
     */
    protected ?string $ccNumber = null;
    /**
     * The creditCardType
     * @var string|null
     */
    protected ?string $creditCardType = null;
    /**
     * Constructor method for ValidateCreditCardRequest
     * @uses ValidateCreditCardRequest::setCcNumber()
     * @uses ValidateCreditCardRequest::setCreditCardType()
     * @param string $ccNumber
     * @param string $creditCardType
     */
    public function __construct(?string $ccNumber = null, ?string $creditCardType = null)
    {
        $this
            ->setCcNumber($ccNumber)
            ->setCreditCardType($creditCardType);
    }
    /**
     * Get ccNumber value
     * @return string|null
     */
    public function getCcNumber(): ?string
    {
        return $this->ccNumber;
    }
    /**
     * Set ccNumber value
     * @param string $ccNumber
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateCreditCardRequest
     */
    public function setCcNumber(?string $ccNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNumber) && !is_string($ccNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNumber, true), gettype($ccNumber)), __LINE__);
        }
        $this->ccNumber = $ccNumber;
        
        return $this;
    }
    /**
     * Get creditCardType value
     * @return string|null
     */
    public function getCreditCardType(): ?string
    {
        return $this->creditCardType;
    }
    /**
     * Set creditCardType value
     * @param string $creditCardType
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateCreditCardRequest
     */
    public function setCreditCardType(?string $creditCardType = null): self
    {
        // validation for constraint: string
        if (!is_null($creditCardType) && !is_string($creditCardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditCardType, true), gettype($creditCardType)), __LINE__);
        }
        $this->creditCardType = $creditCardType;
        
        return $this;
    }
}
