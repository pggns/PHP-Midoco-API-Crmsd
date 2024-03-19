<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVirtualCcCardResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVirtualCcCardResponse extends AbstractStructBase
{
    /**
     * The MidocoVirtualCcCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVirtualCcCard
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard[]
     */
    protected ?array $MidocoVirtualCcCard = null;
    /**
     * Constructor method for GetVirtualCcCardResponse
     * @uses GetVirtualCcCardResponse::setMidocoVirtualCcCard()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard[] $midocoVirtualCcCard
     */
    public function __construct(?array $midocoVirtualCcCard = null)
    {
        $this
            ->setMidocoVirtualCcCard($midocoVirtualCcCard);
    }
    /**
     * Get MidocoVirtualCcCard value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard[]
     */
    public function getMidocoVirtualCcCard(): ?array
    {
        return $this->MidocoVirtualCcCard;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVirtualCcCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVirtualCcCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVirtualCcCardForArrayConstraintFromSetMidocoVirtualCcCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getVirtualCcCardResponseMidocoVirtualCcCardItem) {
            // validation for constraint: itemType
            if (!$getVirtualCcCardResponseMidocoVirtualCcCardItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard) {
                $invalidValues[] = is_object($getVirtualCcCardResponseMidocoVirtualCcCardItem) ? get_class($getVirtualCcCardResponseMidocoVirtualCcCardItem) : sprintf('%s(%s)', gettype($getVirtualCcCardResponseMidocoVirtualCcCardItem), var_export($getVirtualCcCardResponseMidocoVirtualCcCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVirtualCcCard property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVirtualCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard[] $midocoVirtualCcCard
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetVirtualCcCardResponse
     */
    public function setMidocoVirtualCcCard(?array $midocoVirtualCcCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVirtualCcCardArrayErrorMessage = self::validateMidocoVirtualCcCardForArrayConstraintFromSetMidocoVirtualCcCard($midocoVirtualCcCard))) {
            throw new InvalidArgumentException($midocoVirtualCcCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoVirtualCcCard = $midocoVirtualCcCard;
        
        return $this;
    }
    /**
     * Add item to MidocoVirtualCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetVirtualCcCardResponse
     */
    public function addToMidocoVirtualCcCard(\Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard) {
            throw new InvalidArgumentException(sprintf('The MidocoVirtualCcCard property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVirtualCcCard[] = $item;
        
        return $this;
    }
}
