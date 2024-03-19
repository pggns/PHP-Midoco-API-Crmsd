<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankNameByBLZResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBankNameByBLZResponse extends AbstractStructBase
{
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The countryId
     * Meta information extracted from the WSDL
     * - default: DE
     * @var string|null
     */
    protected ?string $countryId = null;
    /**
     * Constructor method for GetBankNameByBLZResponse
     * @uses GetBankNameByBLZResponse::setName()
     * @uses GetBankNameByBLZResponse::setCountryId()
     * @param string $name
     * @param string $countryId
     */
    public function __construct(?string $name = null, ?string $countryId = 'DE')
    {
        $this
            ->setName($name)
            ->setCountryId($countryId);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetBankNameByBLZResponse
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetBankNameByBLZResponse
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
