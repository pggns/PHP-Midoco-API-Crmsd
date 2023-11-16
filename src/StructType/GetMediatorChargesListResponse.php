<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorChargesListResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getMediatorChargesList --- returns all the charges set for the customer identified by the given id
 * @subpackage Structs
 */
class GetMediatorChargesListResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMediatorChargeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmMediatorChargeInfo
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeInfoType[]
     */
    protected array $MidocoCrmMediatorChargeInfo = [];
    /**
     * Constructor method for GetMediatorChargesListResponse
     * @uses GetMediatorChargesListResponse::setMidocoCrmMediatorChargeInfo()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeInfoType[] $midocoCrmMediatorChargeInfo
     */
    public function __construct(array $midocoCrmMediatorChargeInfo = [])
    {
        $this
            ->setMidocoCrmMediatorChargeInfo($midocoCrmMediatorChargeInfo);
    }
    /**
     * Get MidocoCrmMediatorChargeInfo value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeInfoType[]
     */
    public function getMidocoCrmMediatorChargeInfo(): array
    {
        return $this->MidocoCrmMediatorChargeInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmMediatorChargeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmMediatorChargeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmMediatorChargeInfoForArrayConstraintsFromSetMidocoCrmMediatorChargeInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMediatorChargesListResponseMidocoCrmMediatorChargeInfoItem) {
            // validation for constraint: itemType
            if (!$getMediatorChargesListResponseMidocoCrmMediatorChargeInfoItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeInfoType) {
                $invalidValues[] = is_object($getMediatorChargesListResponseMidocoCrmMediatorChargeInfoItem) ? get_class($getMediatorChargesListResponseMidocoCrmMediatorChargeInfoItem) : sprintf('%s(%s)', gettype($getMediatorChargesListResponseMidocoCrmMediatorChargeInfoItem), var_export($getMediatorChargesListResponseMidocoCrmMediatorChargeInfoItem, true));
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetMediatorChargesListResponse
     */
    public function setMidocoCrmMediatorChargeInfo(array $midocoCrmMediatorChargeInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmMediatorChargeInfoArrayErrorMessage = self::validateMidocoCrmMediatorChargeInfoForArrayConstraintsFromSetMidocoCrmMediatorChargeInfo($midocoCrmMediatorChargeInfo))) {
            throw new InvalidArgumentException($midocoCrmMediatorChargeInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmMediatorChargeInfo = $midocoCrmMediatorChargeInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmMediatorChargeInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmMediatorChargeInfoType $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetMediatorChargesListResponse
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
