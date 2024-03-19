<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableBonusDescriptionsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: returns the available bonus card descriptions
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableBonusDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoBonusDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBonusDescription
     * @var \Pggns\MidocoApi\Crmsd\StructType\BonusDescriptionDTO[]
     */
    protected ?array $MidocoBonusDescription = null;
    /**
     * Constructor method for GetAvailableBonusDescriptionsResponse
     * @uses GetAvailableBonusDescriptionsResponse::setMidocoBonusDescription()
     * @param \Pggns\MidocoApi\Crmsd\StructType\BonusDescriptionDTO[] $midocoBonusDescription
     */
    public function __construct(?array $midocoBonusDescription = null)
    {
        $this
            ->setMidocoBonusDescription($midocoBonusDescription);
    }
    /**
     * Get MidocoBonusDescription value
     * @return \Pggns\MidocoApi\Crmsd\StructType\BonusDescriptionDTO[]
     */
    public function getMidocoBonusDescription(): ?array
    {
        return $this->MidocoBonusDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBonusDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBonusDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBonusDescriptionForArrayConstraintFromSetMidocoBonusDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableBonusDescriptionsResponseMidocoBonusDescriptionItem) {
            // validation for constraint: itemType
            if (!$getAvailableBonusDescriptionsResponseMidocoBonusDescriptionItem instanceof \Pggns\MidocoApi\Crmsd\StructType\BonusDescriptionDTO) {
                $invalidValues[] = is_object($getAvailableBonusDescriptionsResponseMidocoBonusDescriptionItem) ? get_class($getAvailableBonusDescriptionsResponseMidocoBonusDescriptionItem) : sprintf('%s(%s)', gettype($getAvailableBonusDescriptionsResponseMidocoBonusDescriptionItem), var_export($getAvailableBonusDescriptionsResponseMidocoBonusDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBonusDescription property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\BonusDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBonusDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\BonusDescriptionDTO[] $midocoBonusDescription
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAvailableBonusDescriptionsResponse
     */
    public function setMidocoBonusDescription(?array $midocoBonusDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBonusDescriptionArrayErrorMessage = self::validateMidocoBonusDescriptionForArrayConstraintFromSetMidocoBonusDescription($midocoBonusDescription))) {
            throw new InvalidArgumentException($midocoBonusDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoBonusDescription = $midocoBonusDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoBonusDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\BonusDescriptionDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAvailableBonusDescriptionsResponse
     */
    public function addToMidocoBonusDescription(\Pggns\MidocoApi\Crmsd\StructType\BonusDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\BonusDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBonusDescription property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\BonusDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBonusDescription[] = $item;
        
        return $this;
    }
}
