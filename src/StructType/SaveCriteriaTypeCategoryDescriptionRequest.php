<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCriteriaTypeCategoryDescriptionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCriteriaTypeCategoryDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoCriteriaTypeCategoryDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoCriteriaTypeCategoryDescription
     * @var \Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO $MidocoCriteriaTypeCategoryDescription = null;
    /**
     * Constructor method for SaveCriteriaTypeCategoryDescriptionRequest
     * @uses SaveCriteriaTypeCategoryDescriptionRequest::setMidocoCriteriaTypeCategoryDescription()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO $midocoCriteriaTypeCategoryDescription
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO $midocoCriteriaTypeCategoryDescription = null)
    {
        $this
            ->setMidocoCriteriaTypeCategoryDescription($midocoCriteriaTypeCategoryDescription);
    }
    /**
     * Get MidocoCriteriaTypeCategoryDescription value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO|null
     */
    public function getMidocoCriteriaTypeCategoryDescription(): ?\Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO
    {
        return $this->MidocoCriteriaTypeCategoryDescription;
    }
    /**
     * Set MidocoCriteriaTypeCategoryDescription value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO $midocoCriteriaTypeCategoryDescription
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCriteriaTypeCategoryDescriptionRequest
     */
    public function setMidocoCriteriaTypeCategoryDescription(?\Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO $midocoCriteriaTypeCategoryDescription = null): self
    {
        $this->MidocoCriteriaTypeCategoryDescription = $midocoCriteriaTypeCategoryDescription;
        
        return $this;
    }
}
