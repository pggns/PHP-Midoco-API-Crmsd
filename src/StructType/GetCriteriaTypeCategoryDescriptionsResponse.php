<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCriteriaTypeCategoryDescriptionsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCriteriaTypeCategoryDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoCriteriaTypeCategoryDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCriteriaTypeCategoryDescription
     * @var \Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO[]
     */
    protected ?array $MidocoCriteriaTypeCategoryDescription = null;
    /**
     * Constructor method for GetCriteriaTypeCategoryDescriptionsResponse
     * @uses GetCriteriaTypeCategoryDescriptionsResponse::setMidocoCriteriaTypeCategoryDescription()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO[] $midocoCriteriaTypeCategoryDescription
     */
    public function __construct(?array $midocoCriteriaTypeCategoryDescription = null)
    {
        $this
            ->setMidocoCriteriaTypeCategoryDescription($midocoCriteriaTypeCategoryDescription);
    }
    /**
     * Get MidocoCriteriaTypeCategoryDescription value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO[]
     */
    public function getMidocoCriteriaTypeCategoryDescription(): ?array
    {
        return $this->MidocoCriteriaTypeCategoryDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCriteriaTypeCategoryDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCriteriaTypeCategoryDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCriteriaTypeCategoryDescriptionForArrayConstraintFromSetMidocoCriteriaTypeCategoryDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCriteriaTypeCategoryDescriptionsResponseMidocoCriteriaTypeCategoryDescriptionItem) {
            // validation for constraint: itemType
            if (!$getCriteriaTypeCategoryDescriptionsResponseMidocoCriteriaTypeCategoryDescriptionItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO) {
                $invalidValues[] = is_object($getCriteriaTypeCategoryDescriptionsResponseMidocoCriteriaTypeCategoryDescriptionItem) ? get_class($getCriteriaTypeCategoryDescriptionsResponseMidocoCriteriaTypeCategoryDescriptionItem) : sprintf('%s(%s)', gettype($getCriteriaTypeCategoryDescriptionsResponseMidocoCriteriaTypeCategoryDescriptionItem), var_export($getCriteriaTypeCategoryDescriptionsResponseMidocoCriteriaTypeCategoryDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCriteriaTypeCategoryDescription property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCriteriaTypeCategoryDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO[] $midocoCriteriaTypeCategoryDescription
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCriteriaTypeCategoryDescriptionsResponse
     */
    public function setMidocoCriteriaTypeCategoryDescription(?array $midocoCriteriaTypeCategoryDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCriteriaTypeCategoryDescriptionArrayErrorMessage = self::validateMidocoCriteriaTypeCategoryDescriptionForArrayConstraintFromSetMidocoCriteriaTypeCategoryDescription($midocoCriteriaTypeCategoryDescription))) {
            throw new InvalidArgumentException($midocoCriteriaTypeCategoryDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoCriteriaTypeCategoryDescription = $midocoCriteriaTypeCategoryDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoCriteriaTypeCategoryDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCriteriaTypeCategoryDescriptionsResponse
     */
    public function addToMidocoCriteriaTypeCategoryDescription(\Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCriteriaTypeCategoryDescription property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CritTypeCatDescrDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCriteriaTypeCategoryDescription[] = $item;
        
        return $this;
    }
}
