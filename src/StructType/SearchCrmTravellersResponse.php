<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCrmTravellersResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCrmTravellersResponse extends AbstractStructBase
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
     * The noOfResults
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for SearchCrmTravellersResponse
     * @uses SearchCrmTravellersResponse::setMidocoCrmTraveller()
     * @uses SearchCrmTravellersResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller[] $midocoCrmTraveller
     * @param int $noOfResults
     */
    public function __construct(?array $midocoCrmTraveller = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoCrmTraveller($midocoCrmTraveller)
            ->setNoOfResults($noOfResults);
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
        foreach ($values as $searchCrmTravellersResponseMidocoCrmTravellerItem) {
            // validation for constraint: itemType
            if (!$searchCrmTravellersResponseMidocoCrmTravellerItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmTraveller) {
                $invalidValues[] = is_object($searchCrmTravellersResponseMidocoCrmTravellerItem) ? get_class($searchCrmTravellersResponseMidocoCrmTravellerItem) : sprintf('%s(%s)', gettype($searchCrmTravellersResponseMidocoCrmTravellerItem), var_export($searchCrmTravellersResponseMidocoCrmTravellerItem, true));
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCrmTravellersResponse
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCrmTravellersResponse
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
    /**
     * Get noOfResults value
     * @return int|null
     */
    public function getNoOfResults(): ?int
    {
        return $this->noOfResults;
    }
    /**
     * Set noOfResults value
     * @param int $noOfResults
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCrmTravellersResponse
     */
    public function setNoOfResults(?int $noOfResults = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfResults) && !(is_int($noOfResults) || ctype_digit($noOfResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfResults, true), gettype($noOfResults)), __LINE__);
        }
        $this->noOfResults = $noOfResults;
        
        return $this;
    }
}
