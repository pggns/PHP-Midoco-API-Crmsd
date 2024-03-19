<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreviewTemplateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PreviewTemplateResponse extends AbstractStructBase
{
    /**
     * The text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * Constructor method for PreviewTemplateResponse
     * @uses PreviewTemplateResponse::setText()
     * @param string $text
     */
    public function __construct(?string $text = null)
    {
        $this
            ->setText($text);
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Pggns\MidocoApi\Crmsd\StructType\PreviewTemplateResponse
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        
        return $this;
    }
}
