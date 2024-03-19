<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreviewTemplateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PreviewTemplateRequest extends AbstractStructBase
{
    /**
     * The templateName
     * @var string|null
     */
    protected ?string $templateName = null;
    /**
     * Constructor method for PreviewTemplateRequest
     * @uses PreviewTemplateRequest::setTemplateName()
     * @param string $templateName
     */
    public function __construct(?string $templateName = null)
    {
        $this
            ->setTemplateName($templateName);
    }
    /**
     * Get templateName value
     * @return string|null
     */
    public function getTemplateName(): ?string
    {
        return $this->templateName;
    }
    /**
     * Set templateName value
     * @param string $templateName
     * @return \Pggns\MidocoApi\Crmsd\StructType\PreviewTemplateRequest
     */
    public function setTemplateName(?string $templateName = null): self
    {
        // validation for constraint: string
        if (!is_null($templateName) && !is_string($templateName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateName, true), gettype($templateName)), __LINE__);
        }
        $this->templateName = $templateName;
        
        return $this;
    }
}
