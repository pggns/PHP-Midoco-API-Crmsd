<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AutoGenCrmMidocoCrmMandateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AutoGenCrmMidocoCrmMandateRequest extends AbstractStructBase
{
    /**
     * The BankCountry
     * @var string|null
     */
    protected ?string $BankCountry = null;
    /**
     * Constructor method for AutoGenCrmMidocoCrmMandateRequest
     * @uses AutoGenCrmMidocoCrmMandateRequest::setBankCountry()
     * @param string $bankCountry
     */
    public function __construct(?string $bankCountry = null)
    {
        $this
            ->setBankCountry($bankCountry);
    }
    /**
     * Get BankCountry value
     * @return string|null
     */
    public function getBankCountry(): ?string
    {
        return $this->BankCountry;
    }
    /**
     * Set BankCountry value
     * @param string $bankCountry
     * @return \Pggns\MidocoApi\Crmsd\StructType\AutoGenCrmMidocoCrmMandateRequest
     */
    public function setBankCountry(?string $bankCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($bankCountry) && !is_string($bankCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankCountry, true), gettype($bankCountry)), __LINE__);
        }
        $this->BankCountry = $bankCountry;
        
        return $this;
    }
}
