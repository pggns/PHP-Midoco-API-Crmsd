<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgencyExternalSystemAttributesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAgencyExternalSystemAttributesResponse extends AbstractStructBase
{
    /**
     * The MidocoExternalSystemAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoExternalSystemAttribute
     * @var \Pggns\MidocoApi\Crmsd\StructType\SystemAttributeDTO[]
     */
    protected ?array $MidocoExternalSystemAttribute = null;
    /**
     * Constructor method for GetAgencyExternalSystemAttributesResponse
     * @uses GetAgencyExternalSystemAttributesResponse::setMidocoExternalSystemAttribute()
     * @param \Pggns\MidocoApi\Crmsd\StructType\SystemAttributeDTO[] $midocoExternalSystemAttribute
     */
    public function __construct(?array $midocoExternalSystemAttribute = null)
    {
        $this
            ->setMidocoExternalSystemAttribute($midocoExternalSystemAttribute);
    }
    /**
     * Get MidocoExternalSystemAttribute value
     * @return \Pggns\MidocoApi\Crmsd\StructType\SystemAttributeDTO[]
     */
    public function getMidocoExternalSystemAttribute(): ?array
    {
        return $this->MidocoExternalSystemAttribute;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoExternalSystemAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoExternalSystemAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoExternalSystemAttributeForArrayConstraintFromSetMidocoExternalSystemAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAgencyExternalSystemAttributesResponseMidocoExternalSystemAttributeItem) {
            // validation for constraint: itemType
            if (!$getAgencyExternalSystemAttributesResponseMidocoExternalSystemAttributeItem instanceof \Pggns\MidocoApi\Crmsd\StructType\SystemAttributeDTO) {
                $invalidValues[] = is_object($getAgencyExternalSystemAttributesResponseMidocoExternalSystemAttributeItem) ? get_class($getAgencyExternalSystemAttributesResponseMidocoExternalSystemAttributeItem) : sprintf('%s(%s)', gettype($getAgencyExternalSystemAttributesResponseMidocoExternalSystemAttributeItem), var_export($getAgencyExternalSystemAttributesResponseMidocoExternalSystemAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoExternalSystemAttribute property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\SystemAttributeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoExternalSystemAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\SystemAttributeDTO[] $midocoExternalSystemAttribute
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAgencyExternalSystemAttributesResponse
     */
    public function setMidocoExternalSystemAttribute(?array $midocoExternalSystemAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoExternalSystemAttributeArrayErrorMessage = self::validateMidocoExternalSystemAttributeForArrayConstraintFromSetMidocoExternalSystemAttribute($midocoExternalSystemAttribute))) {
            throw new InvalidArgumentException($midocoExternalSystemAttributeArrayErrorMessage, __LINE__);
        }
        $this->MidocoExternalSystemAttribute = $midocoExternalSystemAttribute;
        
        return $this;
    }
    /**
     * Add item to MidocoExternalSystemAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\SystemAttributeDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAgencyExternalSystemAttributesResponse
     */
    public function addToMidocoExternalSystemAttribute(\Pggns\MidocoApi\Crmsd\StructType\SystemAttributeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\SystemAttributeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoExternalSystemAttribute property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\SystemAttributeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoExternalSystemAttribute[] = $item;
        
        return $this;
    }
}
