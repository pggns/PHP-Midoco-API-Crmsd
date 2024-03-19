<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankByBLZRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBankByBLZRequest extends AbstractStructBase
{
    /**
     * The blz
     * @var string|null
     */
    protected ?string $blz = null;
    /**
     * The countryId
     * Meta information extracted from the WSDL
     * - default: DE
     * @var string|null
     */
    protected ?string $countryId = null;
    /**
     * Constructor method for GetBankByBLZRequest
     * @uses GetBankByBLZRequest::setBlz()
     * @uses GetBankByBLZRequest::setCountryId()
     * @param string $blz
     * @param string $countryId
     */
    public function __construct(?string $blz = null, ?string $countryId = 'DE')
    {
        $this
            ->setBlz($blz)
            ->setCountryId($countryId);
    }
    /**
     * Get blz value
     * @return string|null
     */
    public function getBlz(): ?string
    {
        return $this->blz;
    }
    /**
     * Set blz value
     * @param string $blz
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetBankByBLZRequest
     */
    public function setBlz(?string $blz = null): self
    {
        // validation for constraint: string
        if (!is_null($blz) && !is_string($blz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($blz, true), gettype($blz)), __LINE__);
        }
        $this->blz = $blz;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetBankByBLZRequest
     */
    public function setCountryId(?string $countryId = 'DE'): self
    {
        // validation for constraint: string
        if (!is_null($countryId) && !is_string($countryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryId, true), gettype($countryId)), __LINE__);
        }
        $this->countryId = $countryId;
        
        return $this;
    }
}
