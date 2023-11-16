<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableCardDescriptionsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: returns the available card type descriptions
 * @subpackage Structs
 */
class GetAvailableCardDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoCardDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCardDescription
     * @var \Pggns\MidocoApi\Crmsd\StructType\CardDescriptionDTO[]
     */
    protected array $MidocoCardDescription = [];
    /**
     * Constructor method for GetAvailableCardDescriptionsResponse
     * @uses GetAvailableCardDescriptionsResponse::setMidocoCardDescription()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CardDescriptionDTO[] $midocoCardDescription
     */
    public function __construct(array $midocoCardDescription = [])
    {
        $this
            ->setMidocoCardDescription($midocoCardDescription);
    }
    /**
     * Get MidocoCardDescription value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CardDescriptionDTO[]
     */
    public function getMidocoCardDescription(): array
    {
        return $this->MidocoCardDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCardDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCardDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCardDescriptionForArrayConstraintsFromSetMidocoCardDescription(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableCardDescriptionsResponseMidocoCardDescriptionItem) {
            // validation for constraint: itemType
            if (!$getAvailableCardDescriptionsResponseMidocoCardDescriptionItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CardDescriptionDTO) {
                $invalidValues[] = is_object($getAvailableCardDescriptionsResponseMidocoCardDescriptionItem) ? get_class($getAvailableCardDescriptionsResponseMidocoCardDescriptionItem) : sprintf('%s(%s)', gettype($getAvailableCardDescriptionsResponseMidocoCardDescriptionItem), var_export($getAvailableCardDescriptionsResponseMidocoCardDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCardDescription property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CardDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCardDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CardDescriptionDTO[] $midocoCardDescription
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAvailableCardDescriptionsResponse
     */
    public function setMidocoCardDescription(array $midocoCardDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCardDescriptionArrayErrorMessage = self::validateMidocoCardDescriptionForArrayConstraintsFromSetMidocoCardDescription($midocoCardDescription))) {
            throw new InvalidArgumentException($midocoCardDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoCardDescription = $midocoCardDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoCardDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CardDescriptionDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAvailableCardDescriptionsResponse
     */
    public function addToMidocoCardDescription(\Pggns\MidocoApi\Crmsd\StructType\CardDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CardDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCardDescription property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CardDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCardDescription[] = $item;
        
        return $this;
    }
}
