<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExtendedCustomerTravelsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExtendedCustomerTravelsResponse extends AbstractStructBase
{
    /**
     * The MidocoExtendedCustomerTravel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoExtendedCustomerTravel
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoExtendedCustomerTravel[]
     */
    protected ?array $MidocoExtendedCustomerTravel = null;
    /**
     * The totalNoOfRecords
     * @var int|null
     */
    protected ?int $totalNoOfRecords = null;
    /**
     * Constructor method for GetExtendedCustomerTravelsResponse
     * @uses GetExtendedCustomerTravelsResponse::setMidocoExtendedCustomerTravel()
     * @uses GetExtendedCustomerTravelsResponse::setTotalNoOfRecords()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoExtendedCustomerTravel[] $midocoExtendedCustomerTravel
     * @param int $totalNoOfRecords
     */
    public function __construct(?array $midocoExtendedCustomerTravel = null, ?int $totalNoOfRecords = null)
    {
        $this
            ->setMidocoExtendedCustomerTravel($midocoExtendedCustomerTravel)
            ->setTotalNoOfRecords($totalNoOfRecords);
    }
    /**
     * Get MidocoExtendedCustomerTravel value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoExtendedCustomerTravel[]
     */
    public function getMidocoExtendedCustomerTravel(): ?array
    {
        return $this->MidocoExtendedCustomerTravel;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoExtendedCustomerTravel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoExtendedCustomerTravel method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoExtendedCustomerTravelForArrayConstraintFromSetMidocoExtendedCustomerTravel(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExtendedCustomerTravelsResponseMidocoExtendedCustomerTravelItem) {
            // validation for constraint: itemType
            if (!$getExtendedCustomerTravelsResponseMidocoExtendedCustomerTravelItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoExtendedCustomerTravel) {
                $invalidValues[] = is_object($getExtendedCustomerTravelsResponseMidocoExtendedCustomerTravelItem) ? get_class($getExtendedCustomerTravelsResponseMidocoExtendedCustomerTravelItem) : sprintf('%s(%s)', gettype($getExtendedCustomerTravelsResponseMidocoExtendedCustomerTravelItem), var_export($getExtendedCustomerTravelsResponseMidocoExtendedCustomerTravelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoExtendedCustomerTravel property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoExtendedCustomerTravel, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoExtendedCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoExtendedCustomerTravel[] $midocoExtendedCustomerTravel
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExtendedCustomerTravelsResponse
     */
    public function setMidocoExtendedCustomerTravel(?array $midocoExtendedCustomerTravel = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoExtendedCustomerTravelArrayErrorMessage = self::validateMidocoExtendedCustomerTravelForArrayConstraintFromSetMidocoExtendedCustomerTravel($midocoExtendedCustomerTravel))) {
            throw new InvalidArgumentException($midocoExtendedCustomerTravelArrayErrorMessage, __LINE__);
        }
        $this->MidocoExtendedCustomerTravel = $midocoExtendedCustomerTravel;
        
        return $this;
    }
    /**
     * Add item to MidocoExtendedCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoExtendedCustomerTravel $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExtendedCustomerTravelsResponse
     */
    public function addToMidocoExtendedCustomerTravel(\Pggns\MidocoApi\Crmsd\StructType\MidocoExtendedCustomerTravel $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoExtendedCustomerTravel) {
            throw new InvalidArgumentException(sprintf('The MidocoExtendedCustomerTravel property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoExtendedCustomerTravel, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoExtendedCustomerTravel[] = $item;
        
        return $this;
    }
    /**
     * Get totalNoOfRecords value
     * @return int|null
     */
    public function getTotalNoOfRecords(): ?int
    {
        return $this->totalNoOfRecords;
    }
    /**
     * Set totalNoOfRecords value
     * @param int $totalNoOfRecords
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExtendedCustomerTravelsResponse
     */
    public function setTotalNoOfRecords(?int $totalNoOfRecords = null): self
    {
        // validation for constraint: int
        if (!is_null($totalNoOfRecords) && !(is_int($totalNoOfRecords) || ctype_digit($totalNoOfRecords))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNoOfRecords, true), gettype($totalNoOfRecords)), __LINE__);
        }
        $this->totalNoOfRecords = $totalNoOfRecords;
        
        return $this;
    }
}
