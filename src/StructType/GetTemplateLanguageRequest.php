<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateLanguageRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTemplateLanguageRequest extends AbstractStructBase
{
    /**
     * The templateId
     * @var int|null
     */
    protected ?int $templateId = null;
    /**
     * The languageId
     * @var string|null
     */
    protected ?string $languageId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for GetTemplateLanguageRequest
     * @uses GetTemplateLanguageRequest::setTemplateId()
     * @uses GetTemplateLanguageRequest::setLanguageId()
     * @uses GetTemplateLanguageRequest::setUnitName()
     * @param int $templateId
     * @param string $languageId
     * @param string $unitName
     */
    public function __construct(?int $templateId = null, ?string $languageId = null, ?string $unitName = null)
    {
        $this
            ->setTemplateId($templateId)
            ->setLanguageId($languageId)
            ->setUnitName($unitName);
    }
    /**
     * Get templateId value
     * @return int|null
     */
    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }
    /**
     * Set templateId value
     * @param int $templateId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetTemplateLanguageRequest
     */
    public function setTemplateId(?int $templateId = null): self
    {
        // validation for constraint: int
        if (!is_null($templateId) && !(is_int($templateId) || ctype_digit($templateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($templateId, true), gettype($templateId)), __LINE__);
        }
        $this->templateId = $templateId;
        
        return $this;
    }
    /**
     * Get languageId value
     * @return string|null
     */
    public function getLanguageId(): ?string
    {
        return $this->languageId;
    }
    /**
     * Set languageId value
     * @param string $languageId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetTemplateLanguageRequest
     */
    public function setLanguageId(?string $languageId = null): self
    {
        // validation for constraint: string
        if (!is_null($languageId) && !is_string($languageId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageId, true), gettype($languageId)), __LINE__);
        }
        $this->languageId = $languageId;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetTemplateLanguageRequest
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
}
