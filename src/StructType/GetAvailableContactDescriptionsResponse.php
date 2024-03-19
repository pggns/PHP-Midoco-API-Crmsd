<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableContactDescriptionsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getContactDescriptions --- returns the list of contact descriptions
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableContactDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoContactDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactDescription
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoContactDescription[]
     */
    protected ?array $MidocoContactDescription = null;
    /**
     * Constructor method for GetAvailableContactDescriptionsResponse
     * @uses GetAvailableContactDescriptionsResponse::setMidocoContactDescription()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactDescription[] $midocoContactDescription
     */
    public function __construct(?array $midocoContactDescription = null)
    {
        $this
            ->setMidocoContactDescription($midocoContactDescription);
    }
    /**
     * Get MidocoContactDescription value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoContactDescription[]
     */
    public function getMidocoContactDescription(): ?array
    {
        return $this->MidocoContactDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoContactDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactDescriptionForArrayConstraintFromSetMidocoContactDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableContactDescriptionsResponseMidocoContactDescriptionItem) {
            // validation for constraint: itemType
            if (!$getAvailableContactDescriptionsResponseMidocoContactDescriptionItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactDescription) {
                $invalidValues[] = is_object($getAvailableContactDescriptionsResponseMidocoContactDescriptionItem) ? get_class($getAvailableContactDescriptionsResponseMidocoContactDescriptionItem) : sprintf('%s(%s)', gettype($getAvailableContactDescriptionsResponseMidocoContactDescriptionItem), var_export($getAvailableContactDescriptionsResponseMidocoContactDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactDescription property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactDescription, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactDescription[] $midocoContactDescription
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAvailableContactDescriptionsResponse
     */
    public function setMidocoContactDescription(?array $midocoContactDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactDescriptionArrayErrorMessage = self::validateMidocoContactDescriptionForArrayConstraintFromSetMidocoContactDescription($midocoContactDescription))) {
            throw new InvalidArgumentException($midocoContactDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactDescription = $midocoContactDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoContactDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactDescription $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAvailableContactDescriptionsResponse
     */
    public function addToMidocoContactDescription(\Pggns\MidocoApi\Crmsd\StructType\MidocoContactDescription $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactDescription) {
            throw new InvalidArgumentException(sprintf('The MidocoContactDescription property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactDescription, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactDescription[] = $item;
        
        return $this;
    }
}
