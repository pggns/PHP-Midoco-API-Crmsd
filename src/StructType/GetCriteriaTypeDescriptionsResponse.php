<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCriteriaTypeDescriptionsResponse StructType
 * @subpackage Structs
 */
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
    protected array $MidocoCriteriaTypeDescription = [];
    /**
     * Constructor method for GetCriteriaTypeDescriptionsResponse
     * @uses GetCriteriaTypeDescriptionsResponse::setMidocoCriteriaTypeDescription()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CriteriaDescriptionDTO[] $midocoCriteriaTypeDescription
     */
    public function __construct(array $midocoCriteriaTypeDescription = [])
    {
        $this
            ->setMidocoCriteriaTypeDescription($midocoCriteriaTypeDescription);
    }
    /**
     * Get MidocoCriteriaTypeDescription value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CriteriaDescriptionDTO[]
     */
    public function getMidocoCriteriaTypeDescription(): array
    {
        return $this->MidocoCriteriaTypeDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCriteriaTypeDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCriteriaTypeDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCriteriaTypeDescriptionForArrayConstraintsFromSetMidocoCriteriaTypeDescription(array $values = []): string
    {
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
    public function setMidocoCriteriaTypeDescription(array $midocoCriteriaTypeDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCriteriaTypeDescriptionArrayErrorMessage = self::validateMidocoCriteriaTypeDescriptionForArrayConstraintsFromSetMidocoCriteriaTypeDescription($midocoCriteriaTypeDescription))) {
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
