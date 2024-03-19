<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getTemplate --- get a template having a given id
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTemplateResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmTemplate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmTemplate
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO $MidocoCrmTemplate = null;
    /**
     * Constructor method for GetTemplateResponse
     * @uses GetTemplateResponse::setMidocoCrmTemplate()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO $midocoCrmTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO $midocoCrmTemplate = null)
    {
        $this
            ->setMidocoCrmTemplate($midocoCrmTemplate);
    }
    /**
     * Get MidocoCrmTemplate value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO|null
     */
    public function getMidocoCrmTemplate(): ?\Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO
    {
        return $this->MidocoCrmTemplate;
    }
    /**
     * Set MidocoCrmTemplate value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO $midocoCrmTemplate
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetTemplateResponse
     */
    public function setMidocoCrmTemplate(?\Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO $midocoCrmTemplate = null): self
    {
        $this->MidocoCrmTemplate = $midocoCrmTemplate;
        
        return $this;
    }
}
