<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateMilesAndMoreConnectLinkResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidateMilesAndMoreConnectLinkResponse extends AbstractStructBase
{
    /**
     * The unitId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $unitId = null;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
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
     * The requestId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $requestId = null;
    /**
     * The signature
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $signature = null;
    /**
     * The LocalizableMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: system:LocalizableMessage
     * @var \Pggns\MidocoApi\Crmsd\StructType\LocalizableMessageType|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\LocalizableMessageType $LocalizableMessage = null;
    /**
     * Constructor method for ValidateMilesAndMoreConnectLinkResponse
     * @uses ValidateMilesAndMoreConnectLinkResponse::setUnitId()
     * @uses ValidateMilesAndMoreConnectLinkResponse::setUnitName()
     * @uses ValidateMilesAndMoreConnectLinkResponse::setLocale()
     * @uses ValidateMilesAndMoreConnectLinkResponse::setRequestId()
     * @uses ValidateMilesAndMoreConnectLinkResponse::setSignature()
     * @uses ValidateMilesAndMoreConnectLinkResponse::setLocalizableMessage()
     * @param string $unitId
     * @param string $unitName
     * @param string $locale
     * @param string $requestId
     * @param string $signature
     * @param \Pggns\MidocoApi\Crmsd\StructType\LocalizableMessageType $localizableMessage
     */
    public function __construct(?string $unitId = null, ?string $unitName = null, ?string $locale = null, ?string $requestId = null, ?string $signature = null, ?\Pggns\MidocoApi\Crmsd\StructType\LocalizableMessageType $localizableMessage = null)
    {
        $this
            ->setUnitId($unitId)
            ->setUnitName($unitName)
            ->setLocale($locale)
            ->setRequestId($requestId)
            ->setSignature($signature)
            ->setLocalizableMessage($localizableMessage);
    }
    /**
     * Get unitId value
     * @return string|null
     */
    public function getUnitId(): ?string
    {
        return $this->unitId;
    }
    /**
     * Set unitId value
     * @param string $unitId
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateMilesAndMoreConnectLinkResponse
     */
    public function setUnitId(?string $unitId = null): self
    {
        // validation for constraint: string
        if (!is_null($unitId) && !is_string($unitId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitId, true), gettype($unitId)), __LINE__);
        }
        $this->unitId = $unitId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateMilesAndMoreConnectLinkResponse
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateMilesAndMoreConnectLinkResponse
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
     * Get requestId value
     * @return string|null
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }
    /**
     * Set requestId value
     * @param string $requestId
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateMilesAndMoreConnectLinkResponse
     */
    public function setRequestId(?string $requestId = null): self
    {
        // validation for constraint: string
        if (!is_null($requestId) && !is_string($requestId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestId, true), gettype($requestId)), __LINE__);
        }
        $this->requestId = $requestId;
        
        return $this;
    }
    /**
     * Get signature value
     * @return string|null
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }
    /**
     * Set signature value
     * @param string $signature
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateMilesAndMoreConnectLinkResponse
     */
    public function setSignature(?string $signature = null): self
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->signature = $signature;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateMilesAndMoreConnectLinkResponse
     */
    public function setLocalizableMessage(?\Pggns\MidocoApi\Crmsd\StructType\LocalizableMessageType $localizableMessage = null): self
    {
        $this->LocalizableMessage = $localizableMessage;
        
        return $this;
    }
}
