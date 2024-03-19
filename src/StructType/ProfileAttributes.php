<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileAttributes StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProfileAttributes extends AbstractStructBase
{
    /**
     * The MidocoProfileAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoProfileAttribute
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoProfileAttribute[]
     */
    protected ?array $MidocoProfileAttribute = null;
    /**
     * Constructor method for ProfileAttributes
     * @uses ProfileAttributes::setMidocoProfileAttribute()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoProfileAttribute[] $midocoProfileAttribute
     */
    public function __construct(?array $midocoProfileAttribute = null)
    {
        $this
            ->setMidocoProfileAttribute($midocoProfileAttribute);
    }
    /**
     * Get MidocoProfileAttribute value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoProfileAttribute[]
     */
    public function getMidocoProfileAttribute(): ?array
    {
        return $this->MidocoProfileAttribute;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoProfileAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoProfileAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoProfileAttributeForArrayConstraintFromSetMidocoProfileAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $profileAttributesMidocoProfileAttributeItem) {
            // validation for constraint: itemType
            if (!$profileAttributesMidocoProfileAttributeItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoProfileAttribute) {
                $invalidValues[] = is_object($profileAttributesMidocoProfileAttributeItem) ? get_class($profileAttributesMidocoProfileAttributeItem) : sprintf('%s(%s)', gettype($profileAttributesMidocoProfileAttributeItem), var_export($profileAttributesMidocoProfileAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoProfileAttribute property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoProfileAttribute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoProfileAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoProfileAttribute[] $midocoProfileAttribute
     * @return \Pggns\MidocoApi\Crmsd\StructType\ProfileAttributes
     */
    public function setMidocoProfileAttribute(?array $midocoProfileAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoProfileAttributeArrayErrorMessage = self::validateMidocoProfileAttributeForArrayConstraintFromSetMidocoProfileAttribute($midocoProfileAttribute))) {
            throw new InvalidArgumentException($midocoProfileAttributeArrayErrorMessage, __LINE__);
        }
        $this->MidocoProfileAttribute = $midocoProfileAttribute;
        
        return $this;
    }
    /**
     * Add item to MidocoProfileAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoProfileAttribute $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ProfileAttributes
     */
    public function addToMidocoProfileAttribute(\Pggns\MidocoApi\Crmsd\StructType\MidocoProfileAttribute $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoProfileAttribute) {
            throw new InvalidArgumentException(sprintf('The MidocoProfileAttribute property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoProfileAttribute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoProfileAttribute[] = $item;
        
        return $this;
    }
}
