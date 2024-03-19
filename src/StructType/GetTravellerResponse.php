<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravellerResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCostCenter --- returns the list of CompanyCostCenters for the given customer id
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTravellerResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmTraveller
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmTraveller
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller[]
     */
    protected ?array $MidocoCrmTraveller = null;
    /**
     * Constructor method for GetTravellerResponse
     * @uses GetTravellerResponse::setMidocoCrmTraveller()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller[] $midocoCrmTraveller
     */
    public function __construct(?array $midocoCrmTraveller = null)
    {
        $this
            ->setMidocoCrmTraveller($midocoCrmTraveller);
    }
    /**
     * Get MidocoCrmTraveller value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller[]
     */
    public function getMidocoCrmTraveller(): ?array
    {
        return $this->MidocoCrmTraveller;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmTraveller method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmTraveller method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmTravellerForArrayConstraintFromSetMidocoCrmTraveller(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTravellerResponseMidocoCrmTravellerItem) {
            // validation for constraint: itemType
            if (!$getTravellerResponseMidocoCrmTravellerItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller) {
                $invalidValues[] = is_object($getTravellerResponseMidocoCrmTravellerItem) ? get_class($getTravellerResponseMidocoCrmTravellerItem) : sprintf('%s(%s)', gettype($getTravellerResponseMidocoCrmTravellerItem), var_export($getTravellerResponseMidocoCrmTravellerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmTraveller property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller[] $midocoCrmTraveller
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetTravellerResponse
     */
    public function setMidocoCrmTraveller(?array $midocoCrmTraveller = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmTravellerArrayErrorMessage = self::validateMidocoCrmTravellerForArrayConstraintFromSetMidocoCrmTraveller($midocoCrmTraveller))) {
            throw new InvalidArgumentException($midocoCrmTravellerArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmTraveller = $midocoCrmTraveller;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetTravellerResponse
     */
    public function addToMidocoCrmTraveller(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmTraveller property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmTraveller[] = $item;
        
        return $this;
    }
}
