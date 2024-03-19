<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorTextTemplatesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMediatorTextTemplatesRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerTextTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerTextTemplate
     * @var \Pggns\MidocoApi\Crmsd\StructType\TextTemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\TextTemplateDTO $MidocoCustomerTextTemplate = null;
    /**
     * Constructor method for GetMediatorTextTemplatesRequest
     * @uses GetMediatorTextTemplatesRequest::setMidocoCustomerTextTemplate()
     * @param \Pggns\MidocoApi\Crmsd\StructType\TextTemplateDTO $midocoCustomerTextTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\TextTemplateDTO $midocoCustomerTextTemplate = null)
    {
        $this
            ->setMidocoCustomerTextTemplate($midocoCustomerTextTemplate);
    }
    /**
     * Get MidocoCustomerTextTemplate value
     * @return \Pggns\MidocoApi\Crmsd\StructType\TextTemplateDTO|null
     */
    public function getMidocoCustomerTextTemplate(): ?\Pggns\MidocoApi\Crmsd\StructType\TextTemplateDTO
    {
        return $this->MidocoCustomerTextTemplate;
    }
    /**
     * Set MidocoCustomerTextTemplate value
     * @param \Pggns\MidocoApi\Crmsd\StructType\TextTemplateDTO $midocoCustomerTextTemplate
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetMediatorTextTemplatesRequest
     */
    public function setMidocoCustomerTextTemplate(?\Pggns\MidocoApi\Crmsd\StructType\TextTemplateDTO $midocoCustomerTextTemplate = null): self
    {
        $this->MidocoCustomerTextTemplate = $midocoCustomerTextTemplate;
        
        return $this;
    }
}
