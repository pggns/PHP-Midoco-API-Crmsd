<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoChargesListResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getMidocoChargesList --- returns all the charges set for the customer identified by the given id
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoChargesListResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoChargeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmMidocoChargeInfo
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoChargeInfoType[]
     */
    protected ?array $MidocoCrmMidocoChargeInfo = null;
    /**
     * Constructor method for GetMidocoChargesListResponse
     * @uses GetMidocoChargesListResponse::setMidocoCrmMidocoChargeInfo()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoChargeInfoType[] $midocoCrmMidocoChargeInfo
     */
    public function __construct(?array $midocoCrmMidocoChargeInfo = null)
    {
        $this
            ->setMidocoCrmMidocoChargeInfo($midocoCrmMidocoChargeInfo);
    }
    /**
     * Get MidocoCrmMidocoChargeInfo value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoChargeInfoType[]
     */
    public function getMidocoCrmMidocoChargeInfo(): ?array
    {
        return $this->MidocoCrmMidocoChargeInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmMidocoChargeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmMidocoChargeInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmMidocoChargeInfoForArrayConstraintFromSetMidocoCrmMidocoChargeInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoChargesListResponseMidocoCrmMidocoChargeInfoItem) {
            // validation for constraint: itemType
            if (!$getMidocoChargesListResponseMidocoCrmMidocoChargeInfoItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoChargeInfoType) {
                $invalidValues[] = is_object($getMidocoChargesListResponseMidocoCrmMidocoChargeInfoItem) ? get_class($getMidocoChargesListResponseMidocoCrmMidocoChargeInfoItem) : sprintf('%s(%s)', gettype($getMidocoChargesListResponseMidocoCrmMidocoChargeInfoItem), var_export($getMidocoChargesListResponseMidocoCrmMidocoChargeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmMidocoChargeInfo property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoChargeInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmMidocoChargeInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoChargeInfoType[] $midocoCrmMidocoChargeInfo
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetMidocoChargesListResponse
     */
    public function setMidocoCrmMidocoChargeInfo(?array $midocoCrmMidocoChargeInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmMidocoChargeInfoArrayErrorMessage = self::validateMidocoCrmMidocoChargeInfoForArrayConstraintFromSetMidocoCrmMidocoChargeInfo($midocoCrmMidocoChargeInfo))) {
            throw new InvalidArgumentException($midocoCrmMidocoChargeInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmMidocoChargeInfo = $midocoCrmMidocoChargeInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmMidocoChargeInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoChargeInfoType $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetMidocoChargesListResponse
     */
    public function addToMidocoCrmMidocoChargeInfo(\Pggns\MidocoApi\Crmsd\StructType\CrmMidocoChargeInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoChargeInfoType) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmMidocoChargeInfo property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoChargeInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmMidocoChargeInfo[] = $item;
        
        return $this;
    }
}
