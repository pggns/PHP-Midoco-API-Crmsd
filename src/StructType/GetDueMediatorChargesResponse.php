<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDueMediatorChargesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getDueMediatorCharges --- get the charges to be included in the next settlement
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDueMediatorChargesResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMediatorChargeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmMediatorChargeInfo
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeInfoType[]
     */
    protected ?array $MidocoCrmMediatorChargeInfo = null;
    /**
     * Constructor method for GetDueMediatorChargesResponse
     * @uses GetDueMediatorChargesResponse::setMidocoCrmMediatorChargeInfo()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeInfoType[] $midocoCrmMediatorChargeInfo
     */
    public function __construct(?array $midocoCrmMediatorChargeInfo = null)
    {
        $this
            ->setMidocoCrmMediatorChargeInfo($midocoCrmMediatorChargeInfo);
    }
    /**
     * Get MidocoCrmMediatorChargeInfo value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeInfoType[]
     */
    public function getMidocoCrmMediatorChargeInfo(): ?array
    {
        return $this->MidocoCrmMediatorChargeInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmMediatorChargeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmMediatorChargeInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmMediatorChargeInfoForArrayConstraintFromSetMidocoCrmMediatorChargeInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDueMediatorChargesResponseMidocoCrmMediatorChargeInfoItem) {
            // validation for constraint: itemType
            if (!$getDueMediatorChargesResponseMidocoCrmMediatorChargeInfoItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeInfoType) {
                $invalidValues[] = is_object($getDueMediatorChargesResponseMidocoCrmMediatorChargeInfoItem) ? get_class($getDueMediatorChargesResponseMidocoCrmMediatorChargeInfoItem) : sprintf('%s(%s)', gettype($getDueMediatorChargesResponseMidocoCrmMediatorChargeInfoItem), var_export($getDueMediatorChargesResponseMidocoCrmMediatorChargeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmMediatorChargeInfo property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmMediatorChargeInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeInfoType[] $midocoCrmMediatorChargeInfo
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDueMediatorChargesResponse
     */
    public function setMidocoCrmMediatorChargeInfo(?array $midocoCrmMediatorChargeInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmMediatorChargeInfoArrayErrorMessage = self::validateMidocoCrmMediatorChargeInfoForArrayConstraintFromSetMidocoCrmMediatorChargeInfo($midocoCrmMediatorChargeInfo))) {
            throw new InvalidArgumentException($midocoCrmMediatorChargeInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmMediatorChargeInfo = $midocoCrmMediatorChargeInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmMediatorChargeInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeInfoType $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDueMediatorChargesResponse
     */
    public function addToMidocoCrmMediatorChargeInfo(\Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeInfoType) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmMediatorChargeInfo property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmMediatorChargeInfo[] = $item;
        
        return $this;
    }
}
