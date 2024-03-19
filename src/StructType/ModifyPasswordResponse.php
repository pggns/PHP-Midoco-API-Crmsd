<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyPasswordResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains an error code if the customer was not found or if the e-mail address was found for more than one customer.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ModifyPasswordResponse extends AbstractStructBase
{
    /**
     * The errorCode
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorText
     * @var string|null
     */
    protected ?string $errorText = null;
    /**
     * Constructor method for ModifyPasswordResponse
     * @uses ModifyPasswordResponse::setErrorCode()
     * @uses ModifyPasswordResponse::setErrorText()
     * @param string $errorCode
     * @param string $errorText
     */
    public function __construct(?string $errorCode = null, ?string $errorText = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorText($errorText);
    }
    /**
     * Get errorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \Pggns\MidocoApi\Crmsd\StructType\ModifyPasswordResponse
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorText value
     * @return string|null
     */
    public function getErrorText(): ?string
    {
        return $this->errorText;
    }
    /**
     * Set errorText value
     * @param string $errorText
     * @return \Pggns\MidocoApi\Crmsd\StructType\ModifyPasswordResponse
     */
    public function setErrorText(?string $errorText = null): self
    {
        // validation for constraint: string
        if (!is_null($errorText) && !is_string($errorText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorText, true), gettype($errorText)), __LINE__);
        }
        $this->errorText = $errorText;
        
        return $this;
    }
}
