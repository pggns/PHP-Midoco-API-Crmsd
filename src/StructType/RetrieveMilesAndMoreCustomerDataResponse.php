<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveMilesAndMoreCustomerDataResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RetrieveMilesAndMoreCustomerDataResponse extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The locale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locale = null;
    /**
     * The LocalizableMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: system:LocalizableMessage
     * @var \Pggns\MidocoApi\Crmsd\StructType\LocalizableMessageType|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\LocalizableMessageType $LocalizableMessage = null;
    /**
     * Constructor method for RetrieveMilesAndMoreCustomerDataResponse
     * @uses RetrieveMilesAndMoreCustomerDataResponse::setUnitName()
     * @uses RetrieveMilesAndMoreCustomerDataResponse::setLocale()
     * @uses RetrieveMilesAndMoreCustomerDataResponse::setLocalizableMessage()
     * @param string $unitName
     * @param string $locale
     * @param \Pggns\MidocoApi\Crmsd\StructType\LocalizableMessageType $localizableMessage
     */
    public function __construct(?string $unitName = null, ?string $locale = null, ?\Pggns\MidocoApi\Crmsd\StructType\LocalizableMessageType $localizableMessage = null)
    {
        $this
            ->setUnitName($unitName)
            ->setLocale($locale)
            ->setLocalizableMessage($localizableMessage);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Crmsd\StructType\RetrieveMilesAndMoreCustomerDataResponse
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get locale value
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Pggns\MidocoApi\Crmsd\StructType\RetrieveMilesAndMoreCustomerDataResponse
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        
        return $this;
    }
    /**
     * Get LocalizableMessage value
     * @return \Pggns\MidocoApi\Crmsd\StructType\LocalizableMessageType|null
     */
    public function getLocalizableMessage(): ?\Pggns\MidocoApi\Crmsd\StructType\LocalizableMessageType
    {
        return $this->LocalizableMessage;
    }
    /**
     * Set LocalizableMessage value
     * @param \Pggns\MidocoApi\Crmsd\StructType\LocalizableMessageType $localizableMessage
     * @return \Pggns\MidocoApi\Crmsd\StructType\RetrieveMilesAndMoreCustomerDataResponse
     */
    public function setLocalizableMessage(?\Pggns\MidocoApi\Crmsd\StructType\LocalizableMessageType $localizableMessage = null): self
    {
        $this->LocalizableMessage = $localizableMessage;
        
        return $this;
    }
}
