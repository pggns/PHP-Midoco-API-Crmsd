<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateLanguageResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getTemplateLanguage --- get a template language having a given id and language
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTemplateLanguageResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmTemplateLanguage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmTemplateLanguage
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateLanguageDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CrmTemplateLanguageDTO $MidocoCrmTemplateLanguage = null;
    /**
     * Constructor method for GetTemplateLanguageResponse
     * @uses GetTemplateLanguageResponse::setMidocoCrmTemplateLanguage()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateLanguageDTO $midocoCrmTemplateLanguage
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CrmTemplateLanguageDTO $midocoCrmTemplateLanguage = null)
    {
        $this
            ->setMidocoCrmTemplateLanguage($midocoCrmTemplateLanguage);
    }
    /**
     * Get MidocoCrmTemplateLanguage value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateLanguageDTO|null
     */
    public function getMidocoCrmTemplateLanguage(): ?\Pggns\MidocoApi\Crmsd\StructType\CrmTemplateLanguageDTO
    {
        return $this->MidocoCrmTemplateLanguage;
    }
    /**
     * Set MidocoCrmTemplateLanguage value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateLanguageDTO $midocoCrmTemplateLanguage
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetTemplateLanguageResponse
     */
    public function setMidocoCrmTemplateLanguage(?\Pggns\MidocoApi\Crmsd\StructType\CrmTemplateLanguageDTO $midocoCrmTemplateLanguage = null): self
    {
        $this->MidocoCrmTemplateLanguage = $midocoCrmTemplateLanguage;
        
        return $this;
    }
}
