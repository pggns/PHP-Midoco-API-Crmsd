<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDebitCardTypesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDebitCardTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoDebitCardType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDebitCardType
     * @var \Pggns\MidocoApi\Crmsd\StructType\DebitCardTypeDTO[]
     */
    protected ?array $MidocoDebitCardType = null;
    /**
     * Constructor method for GetDebitCardTypesResponse
     * @uses GetDebitCardTypesResponse::setMidocoDebitCardType()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DebitCardTypeDTO[] $midocoDebitCardType
     */
    public function __construct(?array $midocoDebitCardType = null)
    {
        $this
            ->setMidocoDebitCardType($midocoDebitCardType);
    }
    /**
     * Get MidocoDebitCardType value
     * @return \Pggns\MidocoApi\Crmsd\StructType\DebitCardTypeDTO[]
     */
    public function getMidocoDebitCardType(): ?array
    {
        return $this->MidocoDebitCardType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDebitCardType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDebitCardType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDebitCardTypeForArrayConstraintFromSetMidocoDebitCardType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDebitCardTypesResponseMidocoDebitCardTypeItem) {
            // validation for constraint: itemType
            if (!$getDebitCardTypesResponseMidocoDebitCardTypeItem instanceof \Pggns\MidocoApi\Crmsd\StructType\DebitCardTypeDTO) {
                $invalidValues[] = is_object($getDebitCardTypesResponseMidocoDebitCardTypeItem) ? get_class($getDebitCardTypesResponseMidocoDebitCardTypeItem) : sprintf('%s(%s)', gettype($getDebitCardTypesResponseMidocoDebitCardTypeItem), var_export($getDebitCardTypesResponseMidocoDebitCardTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDebitCardType property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\DebitCardTypeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDebitCardType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\DebitCardTypeDTO[] $midocoDebitCardType
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitCardTypesResponse
     */
    public function setMidocoDebitCardType(?array $midocoDebitCardType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDebitCardTypeArrayErrorMessage = self::validateMidocoDebitCardTypeForArrayConstraintFromSetMidocoDebitCardType($midocoDebitCardType))) {
            throw new InvalidArgumentException($midocoDebitCardTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoDebitCardType = $midocoDebitCardType;
        
        return $this;
    }
    /**
     * Add item to MidocoDebitCardType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\DebitCardTypeDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitCardTypesResponse
     */
    public function addToMidocoDebitCardType(\Pggns\MidocoApi\Crmsd\StructType\DebitCardTypeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\DebitCardTypeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDebitCardType property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\DebitCardTypeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDebitCardType[] = $item;
        
        return $this;
    }
}
