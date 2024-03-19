<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmMidocoSettlementsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCrmMidocoSettlements --- returns the Midoco settlement defined for the given customer
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrmMidocoSettlementsResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmMidocoSettlement
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlement[]
     */
    protected ?array $MidocoCrmMidocoSettlement = null;
    /**
     * Constructor method for GetCrmMidocoSettlementsResponse
     * @uses GetCrmMidocoSettlementsResponse::setMidocoCrmMidocoSettlement()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlement[] $midocoCrmMidocoSettlement
     */
    public function __construct(?array $midocoCrmMidocoSettlement = null)
    {
        $this
            ->setMidocoCrmMidocoSettlement($midocoCrmMidocoSettlement);
    }
    /**
     * Get MidocoCrmMidocoSettlement value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlement[]
     */
    public function getMidocoCrmMidocoSettlement(): ?array
    {
        return $this->MidocoCrmMidocoSettlement;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmMidocoSettlement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmMidocoSettlement method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmMidocoSettlementForArrayConstraintFromSetMidocoCrmMidocoSettlement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCrmMidocoSettlementsResponseMidocoCrmMidocoSettlementItem) {
            // validation for constraint: itemType
            if (!$getCrmMidocoSettlementsResponseMidocoCrmMidocoSettlementItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlement) {
                $invalidValues[] = is_object($getCrmMidocoSettlementsResponseMidocoCrmMidocoSettlementItem) ? get_class($getCrmMidocoSettlementsResponseMidocoCrmMidocoSettlementItem) : sprintf('%s(%s)', gettype($getCrmMidocoSettlementsResponseMidocoCrmMidocoSettlementItem), var_export($getCrmMidocoSettlementsResponseMidocoCrmMidocoSettlementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmMidocoSettlement property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmMidocoSettlement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlement[] $midocoCrmMidocoSettlement
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmMidocoSettlementsResponse
     */
    public function setMidocoCrmMidocoSettlement(?array $midocoCrmMidocoSettlement = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmMidocoSettlementArrayErrorMessage = self::validateMidocoCrmMidocoSettlementForArrayConstraintFromSetMidocoCrmMidocoSettlement($midocoCrmMidocoSettlement))) {
            throw new InvalidArgumentException($midocoCrmMidocoSettlementArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmMidocoSettlement = $midocoCrmMidocoSettlement;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmMidocoSettlement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlement $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmMidocoSettlementsResponse
     */
    public function addToMidocoCrmMidocoSettlement(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlement) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmMidocoSettlement property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmMidocoSettlement[] = $item;
        
        return $this;
    }
}
