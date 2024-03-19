<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDictionaryNameResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDictionaryNameResponse extends AbstractStructBase
{
    /**
     * The MidocoDictionaryName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDictionaryName
     * @var \Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO[]
     */
    protected ?array $MidocoDictionaryName = null;
    /**
     * Constructor method for GetDictionaryNameResponse
     * @uses GetDictionaryNameResponse::setMidocoDictionaryName()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO[] $midocoDictionaryName
     */
    public function __construct(?array $midocoDictionaryName = null)
    {
        $this
            ->setMidocoDictionaryName($midocoDictionaryName);
    }
    /**
     * Get MidocoDictionaryName value
     * @return \Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO[]
     */
    public function getMidocoDictionaryName(): ?array
    {
        return $this->MidocoDictionaryName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDictionaryName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDictionaryName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDictionaryNameForArrayConstraintFromSetMidocoDictionaryName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDictionaryNameResponseMidocoDictionaryNameItem) {
            // validation for constraint: itemType
            if (!$getDictionaryNameResponseMidocoDictionaryNameItem instanceof \Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO) {
                $invalidValues[] = is_object($getDictionaryNameResponseMidocoDictionaryNameItem) ? get_class($getDictionaryNameResponseMidocoDictionaryNameItem) : sprintf('%s(%s)', gettype($getDictionaryNameResponseMidocoDictionaryNameItem), var_export($getDictionaryNameResponseMidocoDictionaryNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDictionaryName property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDictionaryName value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO[] $midocoDictionaryName
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDictionaryNameResponse
     */
    public function setMidocoDictionaryName(?array $midocoDictionaryName = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDictionaryNameArrayErrorMessage = self::validateMidocoDictionaryNameForArrayConstraintFromSetMidocoDictionaryName($midocoDictionaryName))) {
            throw new InvalidArgumentException($midocoDictionaryNameArrayErrorMessage, __LINE__);
        }
        $this->MidocoDictionaryName = $midocoDictionaryName;
        
        return $this;
    }
    /**
     * Add item to MidocoDictionaryName value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDictionaryNameResponse
     */
    public function addToMidocoDictionaryName(\Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDictionaryName property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDictionaryName[] = $item;
        
        return $this;
    }
}
