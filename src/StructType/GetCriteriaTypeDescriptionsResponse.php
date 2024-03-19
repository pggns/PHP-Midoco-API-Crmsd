<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCriteriaTypeDescriptionsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCriteriaTypeDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoCriteriaTypeDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCriteriaTypeDescription
     * @var \Pggns\MidocoApi\Crmsd\StructType\CriteriaDescriptionDTO[]
     */
    protected ?array $MidocoCriteriaTypeDescription = null;
    /**
     * Constructor method for GetCriteriaTypeDescriptionsResponse
     * @uses GetCriteriaTypeDescriptionsResponse::setMidocoCriteriaTypeDescription()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CriteriaDescriptionDTO[] $midocoCriteriaTypeDescription
     */
    public function __construct(?array $midocoCriteriaTypeDescription = null)
    {
        $this
            ->setMidocoCriteriaTypeDescription($midocoCriteriaTypeDescription);
    }
    /**
     * Get MidocoCriteriaTypeDescription value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CriteriaDescriptionDTO[]
     */
    public function getMidocoCriteriaTypeDescription(): ?array
    {
        return $this->MidocoCriteriaTypeDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCriteriaTypeDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCriteriaTypeDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCriteriaTypeDescriptionForArrayConstraintFromSetMidocoCriteriaTypeDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCriteriaTypeDescriptionsResponseMidocoCriteriaTypeDescriptionItem) {
            // validation for constraint: itemType
            if (!$getCriteriaTypeDescriptionsResponseMidocoCriteriaTypeDescriptionItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CriteriaDescriptionDTO) {
                $invalidValues[] = is_object($getCriteriaTypeDescriptionsResponseMidocoCriteriaTypeDescriptionItem) ? get_class($getCriteriaTypeDescriptionsResponseMidocoCriteriaTypeDescriptionItem) : sprintf('%s(%s)', gettype($getCriteriaTypeDescriptionsResponseMidocoCriteriaTypeDescriptionItem), var_export($getCriteriaTypeDescriptionsResponseMidocoCriteriaTypeDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCriteriaTypeDescription property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CriteriaDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCriteriaTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CriteriaDescriptionDTO[] $midocoCriteriaTypeDescription
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCriteriaTypeDescriptionsResponse
     */
    public function setMidocoCriteriaTypeDescription(?array $midocoCriteriaTypeDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCriteriaTypeDescriptionArrayErrorMessage = self::validateMidocoCriteriaTypeDescriptionForArrayConstraintFromSetMidocoCriteriaTypeDescription($midocoCriteriaTypeDescription))) {
            throw new InvalidArgumentException($midocoCriteriaTypeDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoCriteriaTypeDescription = $midocoCriteriaTypeDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoCriteriaTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CriteriaDescriptionDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCriteriaTypeDescriptionsResponse
     */
    public function addToMidocoCriteriaTypeDescription(\Pggns\MidocoApi\Crmsd\StructType\CriteriaDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CriteriaDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCriteriaTypeDescription property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CriteriaDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCriteriaTypeDescription[] = $item;
        
        return $this;
    }
}
