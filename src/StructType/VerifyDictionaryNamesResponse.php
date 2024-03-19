<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyDictionaryNamesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VerifyDictionaryNamesResponse extends AbstractStructBase
{
    /**
     * The possibleInvalidNames
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $possibleInvalidNames = null;
    /**
     * Constructor method for VerifyDictionaryNamesResponse
     * @uses VerifyDictionaryNamesResponse::setPossibleInvalidNames()
     * @param string[] $possibleInvalidNames
     */
    public function __construct(?array $possibleInvalidNames = null)
    {
        $this
            ->setPossibleInvalidNames($possibleInvalidNames);
    }
    /**
     * Get possibleInvalidNames value
     * @return string[]
     */
    public function getPossibleInvalidNames(): ?array
    {
        return $this->possibleInvalidNames;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPossibleInvalidNames method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPossibleInvalidNames method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePossibleInvalidNamesForArrayConstraintFromSetPossibleInvalidNames(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $verifyDictionaryNamesResponsePossibleInvalidNamesItem) {
            // validation for constraint: itemType
            if (!is_string($verifyDictionaryNamesResponsePossibleInvalidNamesItem)) {
                $invalidValues[] = is_object($verifyDictionaryNamesResponsePossibleInvalidNamesItem) ? get_class($verifyDictionaryNamesResponsePossibleInvalidNamesItem) : sprintf('%s(%s)', gettype($verifyDictionaryNamesResponsePossibleInvalidNamesItem), var_export($verifyDictionaryNamesResponsePossibleInvalidNamesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The possibleInvalidNames property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set possibleInvalidNames value
     * @throws InvalidArgumentException
     * @param string[] $possibleInvalidNames
     * @return \Pggns\MidocoApi\Crmsd\StructType\VerifyDictionaryNamesResponse
     */
    public function setPossibleInvalidNames(?array $possibleInvalidNames = null): self
    {
        // validation for constraint: array
        if ('' !== ($possibleInvalidNamesArrayErrorMessage = self::validatePossibleInvalidNamesForArrayConstraintFromSetPossibleInvalidNames($possibleInvalidNames))) {
            throw new InvalidArgumentException($possibleInvalidNamesArrayErrorMessage, __LINE__);
        }
        $this->possibleInvalidNames = $possibleInvalidNames;
        
        return $this;
    }
    /**
     * Add item to possibleInvalidNames value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\VerifyDictionaryNamesResponse
     */
    public function addToPossibleInvalidNames(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The possibleInvalidNames property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->possibleInvalidNames[] = $item;
        
        return $this;
    }
}
