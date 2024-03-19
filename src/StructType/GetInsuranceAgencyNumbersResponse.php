<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInsuranceAgencyNumbersResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetInsuranceAgencyNumbersResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCriteria
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria[]
     */
    protected ?array $MidocoCrmCriteria = null;
    /**
     * Constructor method for GetInsuranceAgencyNumbersResponse
     * @uses GetInsuranceAgencyNumbersResponse::setMidocoCrmCriteria()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria[] $midocoCrmCriteria
     */
    public function __construct(?array $midocoCrmCriteria = null)
    {
        $this
            ->setMidocoCrmCriteria($midocoCrmCriteria);
    }
    /**
     * Get MidocoCrmCriteria value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria[]
     */
    public function getMidocoCrmCriteria(): ?array
    {
        return $this->MidocoCrmCriteria;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCriteria method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCriteriaForArrayConstraintFromSetMidocoCrmCriteria(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getInsuranceAgencyNumbersResponseMidocoCrmCriteriaItem) {
            // validation for constraint: itemType
            if (!$getInsuranceAgencyNumbersResponseMidocoCrmCriteriaItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria) {
                $invalidValues[] = is_object($getInsuranceAgencyNumbersResponseMidocoCrmCriteriaItem) ? get_class($getInsuranceAgencyNumbersResponseMidocoCrmCriteriaItem) : sprintf('%s(%s)', gettype($getInsuranceAgencyNumbersResponseMidocoCrmCriteriaItem), var_export($getInsuranceAgencyNumbersResponseMidocoCrmCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCriteria property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria[] $midocoCrmCriteria
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetInsuranceAgencyNumbersResponse
     */
    public function setMidocoCrmCriteria(?array $midocoCrmCriteria = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCriteriaArrayErrorMessage = self::validateMidocoCrmCriteriaForArrayConstraintFromSetMidocoCrmCriteria($midocoCrmCriteria))) {
            throw new InvalidArgumentException($midocoCrmCriteriaArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCriteria = $midocoCrmCriteria;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetInsuranceAgencyNumbersResponse
     */
    public function addToMidocoCrmCriteria(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCriteria property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCriteria[] = $item;
        
        return $this;
    }
}
