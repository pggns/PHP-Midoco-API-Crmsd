<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExternalSystemTypesResponse StructType
 * @subpackage Structs
 */
class GetExternalSystemTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoExternalSystemType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $MidocoExternalSystemType = [];
    /**
     * Constructor method for GetExternalSystemTypesResponse
     * @uses GetExternalSystemTypesResponse::setMidocoExternalSystemType()
     * @param string[] $midocoExternalSystemType
     */
    public function __construct(array $midocoExternalSystemType = [])
    {
        $this
            ->setMidocoExternalSystemType($midocoExternalSystemType);
    }
    /**
     * Get MidocoExternalSystemType value
     * @return string[]
     */
    public function getMidocoExternalSystemType(): array
    {
        return $this->MidocoExternalSystemType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoExternalSystemType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoExternalSystemType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoExternalSystemTypeForArrayConstraintsFromSetMidocoExternalSystemType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExternalSystemTypesResponseMidocoExternalSystemTypeItem) {
            // validation for constraint: itemType
            if (!is_string($getExternalSystemTypesResponseMidocoExternalSystemTypeItem)) {
                $invalidValues[] = is_object($getExternalSystemTypesResponseMidocoExternalSystemTypeItem) ? get_class($getExternalSystemTypesResponseMidocoExternalSystemTypeItem) : sprintf('%s(%s)', gettype($getExternalSystemTypesResponseMidocoExternalSystemTypeItem), var_export($getExternalSystemTypesResponseMidocoExternalSystemTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoExternalSystemType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoExternalSystemType value
     * @throws InvalidArgumentException
     * @param string[] $midocoExternalSystemType
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemTypesResponse
     */
    public function setMidocoExternalSystemType(array $midocoExternalSystemType = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoExternalSystemTypeArrayErrorMessage = self::validateMidocoExternalSystemTypeForArrayConstraintsFromSetMidocoExternalSystemType($midocoExternalSystemType))) {
            throw new InvalidArgumentException($midocoExternalSystemTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoExternalSystemType = $midocoExternalSystemType;
        
        return $this;
    }
    /**
     * Add item to MidocoExternalSystemType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemTypesResponse
     */
    public function addToMidocoExternalSystemType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The MidocoExternalSystemType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoExternalSystemType[] = $item;
        
        return $this;
    }
}
