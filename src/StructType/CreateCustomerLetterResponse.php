<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCustomerLetterResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateCustomerLetterResponse extends AbstractStructBase
{
    /**
     * The PrintjobContent
     * @var string|null
     */
    protected ?string $PrintjobContent = null;
    /**
     * Constructor method for CreateCustomerLetterResponse
     * @uses CreateCustomerLetterResponse::setPrintjobContent()
     * @param string $printjobContent
     */
    public function __construct(?string $printjobContent = null)
    {
        $this
            ->setPrintjobContent($printjobContent);
    }
    /**
     * Get PrintjobContent value
     * @return string|null
     */
    public function getPrintjobContent(): ?string
    {
        return $this->PrintjobContent;
    }
    /**
     * Set PrintjobContent value
     * @param string $printjobContent
     * @return \Pggns\MidocoApi\Crmsd\StructType\CreateCustomerLetterResponse
     */
    public function setPrintjobContent(?string $printjobContent = null): self
    {
        // validation for constraint: string
        if (!is_null($printjobContent) && !is_string($printjobContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printjobContent, true), gettype($printjobContent)), __LINE__);
        }
        $this->PrintjobContent = $printjobContent;
        
        return $this;
    }
}
