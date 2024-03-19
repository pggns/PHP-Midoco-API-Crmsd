<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTemplateLanguageRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: deleteTemplateLanguage --- deletes the template for the given language
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteTemplateLanguageRequest extends AbstractStructBase
{
    /**
     * The templateId
     * @var int|null
     */
    protected ?int $templateId = null;
    /**
     * The language
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * Constructor method for DeleteTemplateLanguageRequest
     * @uses DeleteTemplateLanguageRequest::setTemplateId()
     * @uses DeleteTemplateLanguageRequest::setLanguage()
     * @param int $templateId
     * @param string $language
     */
    public function __construct(?int $templateId = null, ?string $language = null)
    {
        $this
            ->setTemplateId($templateId)
            ->setLanguage($language);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteTemplateLanguageRequest
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
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteTemplateLanguageRequest
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
}
