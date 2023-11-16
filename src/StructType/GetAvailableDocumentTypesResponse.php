<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableDocumentTypesResponse StructType
 * @subpackage Structs
 */
class GetAvailableDocumentTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoDocumentType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDocumentType
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentTypeDTO[]
     */
    protected array $MidocoDocumentType = [];
    /**
     * Constructor method for GetAvailableDocumentTypesResponse
     * @uses GetAvailableDocumentTypesResponse::setMidocoDocumentType()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentTypeDTO[] $midocoDocumentType
     */
    public function __construct(array $midocoDocumentType = [])
    {
        $this
            ->setMidocoDocumentType($midocoDocumentType);
    }
    /**
     * Get MidocoDocumentType value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentTypeDTO[]
     */
    public function getMidocoDocumentType(): array
    {
        return $this->MidocoDocumentType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDocumentType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDocumentType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDocumentTypeForArrayConstraintsFromSetMidocoDocumentType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableDocumentTypesResponseMidocoDocumentTypeItem) {
            // validation for constraint: itemType
            if (!$getAvailableDocumentTypesResponseMidocoDocumentTypeItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentTypeDTO) {
                $invalidValues[] = is_object($getAvailableDocumentTypesResponseMidocoDocumentTypeItem) ? get_class($getAvailableDocumentTypesResponseMidocoDocumentTypeItem) : sprintf('%s(%s)', gettype($getAvailableDocumentTypesResponseMidocoDocumentTypeItem), var_export($getAvailableDocumentTypesResponseMidocoDocumentTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDocumentType property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentTypeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDocumentType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentTypeDTO[] $midocoDocumentType
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAvailableDocumentTypesResponse
     */
    public function setMidocoDocumentType(array $midocoDocumentType = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDocumentTypeArrayErrorMessage = self::validateMidocoDocumentTypeForArrayConstraintsFromSetMidocoDocumentType($midocoDocumentType))) {
            throw new InvalidArgumentException($midocoDocumentTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoDocumentType = $midocoDocumentType;
        
        return $this;
    }
    /**
     * Add item to MidocoDocumentType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentTypeDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAvailableDocumentTypesResponse
     */
    public function addToMidocoDocumentType(\Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentTypeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentTypeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDocumentType property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentTypeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDocumentType[] = $item;
        
        return $this;
    }
}
