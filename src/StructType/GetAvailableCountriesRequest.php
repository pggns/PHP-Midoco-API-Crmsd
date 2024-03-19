<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableCountriesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableCountriesRequest extends AbstractStructBase
{
    /**
     * The countryId
     * @var string|null
     */
    protected ?string $countryId = null;
    /**
     * Constructor method for GetAvailableCountriesRequest
     * @uses GetAvailableCountriesRequest::setCountryId()
     * @param string $countryId
     */
    public function __construct(?string $countryId = null)
    {
        $this
            ->setCountryId($countryId);
    }
    /**
     * Get countryId value
     * @return string|null
     */
    public function getCountryId(): ?string
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param string $countryId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAvailableCountriesRequest
     */
    public function setCountryId(?string $countryId = null): self
    {
        // validation for constraint: string
        if (!is_null($countryId) && !is_string($countryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryId, true), gettype($countryId)), __LINE__);
        }
        $this->countryId = $countryId;
        
        return $this;
    }
}
