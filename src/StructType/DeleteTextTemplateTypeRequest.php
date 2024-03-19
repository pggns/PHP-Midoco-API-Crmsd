<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTextTemplateTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteTextTemplateTypeRequest extends AbstractStructBase
{
    /**
     * The templateId
     * @var string|null
     */
    protected ?string $templateId = null;
    /**
     * Constructor method for DeleteTextTemplateTypeRequest
     * @uses DeleteTextTemplateTypeRequest::setTemplateId()
     * @param string $templateId
     */
    public function __construct(?string $templateId = null)
    {
        $this
            ->setTemplateId($templateId);
    }
    /**
     * Get templateId value
     * @return string|null
     */
    public function getTemplateId(): ?string
    {
        return $this->templateId;
    }
    /**
     * Set templateId value
     * @param string $templateId
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteTextTemplateTypeRequest
     */
    public function setTemplateId(?string $templateId = null): self
    {
        // validation for constraint: string
        if (!is_null($templateId) && !is_string($templateId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateId, true), gettype($templateId)), __LINE__);
        }
        $this->templateId = $templateId;
        
        return $this;
    }
}
