<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCountryIsoTokenRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCountryIsoTokenRequest extends AbstractStructBase
{
    /**
     * The token
     * @var string|null
     */
    protected ?string $token = null;
    /**
     * The localization
     * @var string|null
     */
    protected ?string $localization = null;
    /**
     * The crs
     * @var string|null
     */
    protected ?string $crs = null;
    /**
     * Constructor method for GetCountryIsoTokenRequest
     * @uses GetCountryIsoTokenRequest::setToken()
     * @uses GetCountryIsoTokenRequest::setLocalization()
     * @uses GetCountryIsoTokenRequest::setCrs()
     * @param string $token
     * @param string $localization
     * @param string $crs
     */
    public function __construct(?string $token = null, ?string $localization = null, ?string $crs = null)
    {
        $this
            ->setToken($token)
            ->setLocalization($localization)
            ->setCrs($crs);
    }
    /**
     * Get token value
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCountryIsoTokenRequest
     */
    public function setToken(?string $token = null): self
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->token = $token;
        
        return $this;
    }
    /**
     * Get localization value
     * @return string|null
     */
    public function getLocalization(): ?string
    {
        return $this->localization;
    }
    /**
     * Set localization value
     * @param string $localization
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCountryIsoTokenRequest
     */
    public function setLocalization(?string $localization = null): self
    {
        // validation for constraint: string
        if (!is_null($localization) && !is_string($localization)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localization, true), gettype($localization)), __LINE__);
        }
        $this->localization = $localization;
        
        return $this;
    }
    /**
     * Get crs value
     * @return string|null
     */
    public function getCrs(): ?string
    {
        return $this->crs;
    }
    /**
     * Set crs value
     * @param string $crs
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCountryIsoTokenRequest
     */
    public function setCrs(?string $crs = null): self
    {
        // validation for constraint: string
        if (!is_null($crs) && !is_string($crs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crs, true), gettype($crs)), __LINE__);
        }
        $this->crs = $crs;
        
        return $this;
    }
}
