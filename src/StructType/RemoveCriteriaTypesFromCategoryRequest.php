<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveCriteriaTypesFromCategoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RemoveCriteriaTypesFromCategoryRequest extends AbstractStructBase
{
    /**
     * The categoryId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $categoryId;
    /**
     * The MidocoCriteriaTypeId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCriteriaTypeId
     * @var string[]
     */
    protected ?array $MidocoCriteriaTypeId = null;
    /**
     * Constructor method for RemoveCriteriaTypesFromCategoryRequest
     * @uses RemoveCriteriaTypesFromCategoryRequest::setCategoryId()
     * @uses RemoveCriteriaTypesFromCategoryRequest::setMidocoCriteriaTypeId()
     * @param int $categoryId
     * @param string[] $midocoCriteriaTypeId
     */
    public function __construct(int $categoryId, ?array $midocoCriteriaTypeId = null)
    {
        $this
            ->setCategoryId($categoryId)
            ->setMidocoCriteriaTypeId($midocoCriteriaTypeId);
    }
    /**
     * Get categoryId value
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param int $categoryId
     * @return \Pggns\MidocoApi\Crmsd\StructType\RemoveCriteriaTypesFromCategoryRequest
     */
    public function setCategoryId(int $categoryId): self
    {
        // validation for constraint: int
        if (!is_null($categoryId) && !(is_int($categoryId) || ctype_digit($categoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryId, true), gettype($categoryId)), __LINE__);
        }
        $this->categoryId = $categoryId;
        
        return $this;
    }
    /**
     * Get MidocoCriteriaTypeId value
     * @return string[]
     */
    public function getMidocoCriteriaTypeId(): ?array
    {
        return $this->MidocoCriteriaTypeId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCriteriaTypeId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCriteriaTypeId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCriteriaTypeIdForArrayConstraintFromSetMidocoCriteriaTypeId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $removeCriteriaTypesFromCategoryRequestMidocoCriteriaTypeIdItem) {
            // validation for constraint: itemType
            if (!is_string($removeCriteriaTypesFromCategoryRequestMidocoCriteriaTypeIdItem)) {
                $invalidValues[] = is_object($removeCriteriaTypesFromCategoryRequestMidocoCriteriaTypeIdItem) ? get_class($removeCriteriaTypesFromCategoryRequestMidocoCriteriaTypeIdItem) : sprintf('%s(%s)', gettype($removeCriteriaTypesFromCategoryRequestMidocoCriteriaTypeIdItem), var_export($removeCriteriaTypesFromCategoryRequestMidocoCriteriaTypeIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCriteriaTypeId property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCriteriaTypeId value
     * @throws InvalidArgumentException
     * @param string[] $midocoCriteriaTypeId
     * @return \Pggns\MidocoApi\Crmsd\StructType\RemoveCriteriaTypesFromCategoryRequest
     */
    public function setMidocoCriteriaTypeId(?array $midocoCriteriaTypeId = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCriteriaTypeIdArrayErrorMessage = self::validateMidocoCriteriaTypeIdForArrayConstraintFromSetMidocoCriteriaTypeId($midocoCriteriaTypeId))) {
            throw new InvalidArgumentException($midocoCriteriaTypeIdArrayErrorMessage, __LINE__);
        }
        $this->MidocoCriteriaTypeId = $midocoCriteriaTypeId;
        
        return $this;
    }
    /**
     * Add item to MidocoCriteriaTypeId value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\RemoveCriteriaTypesFromCategoryRequest
     */
    public function addToMidocoCriteriaTypeId(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The MidocoCriteriaTypeId property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCriteriaTypeId[] = $item;
        
        return $this;
    }
}
