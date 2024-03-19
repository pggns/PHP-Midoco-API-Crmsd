<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTemplateLanguageRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveTemplateLanguageRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmTemplateLanguage
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmTemplateLanguage
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateLanguageDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CrmTemplateLanguageDTO $MidocoCrmTemplateLanguage = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for SaveTemplateLanguageRequest
     * @uses SaveTemplateLanguageRequest::setMidocoCrmTemplateLanguage()
     * @uses SaveTemplateLanguageRequest::setUnitName()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateLanguageDTO $midocoCrmTemplateLanguage
     * @param string $unitName
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CrmTemplateLanguageDTO $midocoCrmTemplateLanguage = null, ?string $unitName = null)
    {
        $this
            ->setMidocoCrmTemplateLanguage($midocoCrmTemplateLanguage)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveTemplateLanguageRequest
     */
    public function setMidocoCrmTemplateLanguage(?\Pggns\MidocoApi\Crmsd\StructType\CrmTemplateLanguageDTO $midocoCrmTemplateLanguage = null): self
    {
        $this->MidocoCrmTemplateLanguage = $midocoCrmTemplateLanguage;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveTemplateLanguageRequest
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
