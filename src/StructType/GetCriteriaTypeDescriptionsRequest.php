<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCriteriaTypeDescriptionsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCriteriaTypeDescriptionsRequest extends AbstractStructBase
{
    /**
     * The MidocoCriteriaType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCriteriaType
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCriteriaType[]
     */
    protected ?array $MidocoCriteriaType = null;
    /**
     * Constructor method for GetCriteriaTypeDescriptionsRequest
     * @uses GetCriteriaTypeDescriptionsRequest::setMidocoCriteriaType()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCriteriaType[] $midocoCriteriaType
     */
    public function __construct(?array $midocoCriteriaType = null)
    {
        $this
            ->setMidocoCriteriaType($midocoCriteriaType);
    }
    /**
     * Get MidocoCriteriaType value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCriteriaType[]
     */
    public function getMidocoCriteriaType(): ?array
    {
        return $this->MidocoCriteriaType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCriteriaType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCriteriaType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCriteriaTypeForArrayConstraintFromSetMidocoCriteriaType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCriteriaTypeDescriptionsRequestMidocoCriteriaTypeItem) {
            // validation for constraint: itemType
            if (!$getCriteriaTypeDescriptionsRequestMidocoCriteriaTypeItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCriteriaType) {
                $invalidValues[] = is_object($getCriteriaTypeDescriptionsRequestMidocoCriteriaTypeItem) ? get_class($getCriteriaTypeDescriptionsRequestMidocoCriteriaTypeItem) : sprintf('%s(%s)', gettype($getCriteriaTypeDescriptionsRequestMidocoCriteriaTypeItem), var_export($getCriteriaTypeDescriptionsRequestMidocoCriteriaTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCriteriaType property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCriteriaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCriteriaType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCriteriaType[] $midocoCriteriaType
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCriteriaTypeDescriptionsRequest
     */
    public function setMidocoCriteriaType(?array $midocoCriteriaType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCriteriaTypeArrayErrorMessage = self::validateMidocoCriteriaTypeForArrayConstraintFromSetMidocoCriteriaType($midocoCriteriaType))) {
            throw new InvalidArgumentException($midocoCriteriaTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCriteriaType = $midocoCriteriaType;
        
        return $this;
    }
    /**
     * Add item to MidocoCriteriaType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCriteriaType $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCriteriaTypeDescriptionsRequest
     */
    public function addToMidocoCriteriaType(\Pggns\MidocoApi\Crmsd\StructType\MidocoCriteriaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCriteriaType) {
            throw new InvalidArgumentException(sprintf('The MidocoCriteriaType property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCriteriaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCriteriaType[] = $item;
        
        return $this;
    }
}
