<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllCrmMidocoSettlFeesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: GetAllCrmMidocoSettlFees --- returns the Midoco settlement levels defined for the given settl
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllCrmMidocoSettlFeesResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlFee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmMidocoSettlFee
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoSettlFeeDTO[]
     */
    protected ?array $MidocoCrmMidocoSettlFee = null;
    /**
     * Constructor method for GetAllCrmMidocoSettlFeesResponse
     * @uses GetAllCrmMidocoSettlFeesResponse::setMidocoCrmMidocoSettlFee()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoSettlFeeDTO[] $midocoCrmMidocoSettlFee
     */
    public function __construct(?array $midocoCrmMidocoSettlFee = null)
    {
        $this
            ->setMidocoCrmMidocoSettlFee($midocoCrmMidocoSettlFee);
    }
    /**
     * Get MidocoCrmMidocoSettlFee value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoSettlFeeDTO[]
     */
    public function getMidocoCrmMidocoSettlFee(): ?array
    {
        return $this->MidocoCrmMidocoSettlFee;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmMidocoSettlFee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmMidocoSettlFee method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmMidocoSettlFeeForArrayConstraintFromSetMidocoCrmMidocoSettlFee(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllCrmMidocoSettlFeesResponseMidocoCrmMidocoSettlFeeItem) {
            // validation for constraint: itemType
            if (!$getAllCrmMidocoSettlFeesResponseMidocoCrmMidocoSettlFeeItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoSettlFeeDTO) {
                $invalidValues[] = is_object($getAllCrmMidocoSettlFeesResponseMidocoCrmMidocoSettlFeeItem) ? get_class($getAllCrmMidocoSettlFeesResponseMidocoCrmMidocoSettlFeeItem) : sprintf('%s(%s)', gettype($getAllCrmMidocoSettlFeesResponseMidocoCrmMidocoSettlFeeItem), var_export($getAllCrmMidocoSettlFeesResponseMidocoCrmMidocoSettlFeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmMidocoSettlFee property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoSettlFeeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmMidocoSettlFee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoSettlFeeDTO[] $midocoCrmMidocoSettlFee
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAllCrmMidocoSettlFeesResponse
     */
    public function setMidocoCrmMidocoSettlFee(?array $midocoCrmMidocoSettlFee = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmMidocoSettlFeeArrayErrorMessage = self::validateMidocoCrmMidocoSettlFeeForArrayConstraintFromSetMidocoCrmMidocoSettlFee($midocoCrmMidocoSettlFee))) {
            throw new InvalidArgumentException($midocoCrmMidocoSettlFeeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmMidocoSettlFee = $midocoCrmMidocoSettlFee;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmMidocoSettlFee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoSettlFeeDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAllCrmMidocoSettlFeesResponse
     */
    public function addToMidocoCrmMidocoSettlFee(\Pggns\MidocoApi\Crmsd\StructType\CrmMidocoSettlFeeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoSettlFeeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmMidocoSettlFee property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmMidocoSettlFeeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmMidocoSettlFee[] = $item;
        
        return $this;
    }
}
