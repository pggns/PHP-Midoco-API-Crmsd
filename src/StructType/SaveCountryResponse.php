<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCountryResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCountryResponse extends AbstractStructBase
{
    /**
     * The MidocoCountry
     * Meta information extracted from the WSDL
     * - ref: MidocoCountry
     * @var \Pggns\MidocoApi\Crmsd\StructType\CountryDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CountryDTO $MidocoCountry = null;
    /**
     * Constructor method for SaveCountryResponse
     * @uses SaveCountryResponse::setMidocoCountry()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CountryDTO $midocoCountry
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CountryDTO $midocoCountry = null)
    {
        $this
            ->setMidocoCountry($midocoCountry);
    }
    /**
     * Get MidocoCountry value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CountryDTO|null
     */
    public function getMidocoCountry(): ?\Pggns\MidocoApi\Crmsd\StructType\CountryDTO
    {
        return $this->MidocoCountry;
    }
    /**
     * Set MidocoCountry value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CountryDTO $midocoCountry
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCountryResponse
     */
    public function setMidocoCountry(?\Pggns\MidocoApi\Crmsd\StructType\CountryDTO $midocoCountry = null): self
    {
        $this->MidocoCountry = $midocoCountry;
        
        return $this;
    }
}
