<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTextTemplateTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveTextTemplateTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoTextTemplateType
     * Meta information extracted from the WSDL
     * - ref: MidocoTextTemplateType
     * @var \Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeDTO $MidocoTextTemplateType = null;
    /**
     * Constructor method for SaveTextTemplateTypeRequest
     * @uses SaveTextTemplateTypeRequest::setMidocoTextTemplateType()
     * @param \Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeDTO $midocoTextTemplateType
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeDTO $midocoTextTemplateType = null)
    {
        $this
            ->setMidocoTextTemplateType($midocoTextTemplateType);
    }
    /**
     * Get MidocoTextTemplateType value
     * @return \Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeDTO|null
     */
    public function getMidocoTextTemplateType(): ?\Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeDTO
    {
        return $this->MidocoTextTemplateType;
    }
    /**
     * Set MidocoTextTemplateType value
     * @param \Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeDTO $midocoTextTemplateType
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveTextTemplateTypeRequest
     */
    public function setMidocoTextTemplateType(?\Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeDTO $midocoTextTemplateType = null): self
    {
        $this->MidocoTextTemplateType = $midocoTextTemplateType;
        
        return $this;
    }
}
