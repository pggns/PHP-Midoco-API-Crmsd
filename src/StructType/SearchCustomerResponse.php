<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCustomerResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: searchCustomer --- a phonetic search is executed according to the parameters in the searchcriteria: Each filled (non-null) field from the embedded DTO is considered in the search All fields from CustomerDTO will be mapped 1:1 The
 * phonetic fields from CrmPersonDTO (name, forename), from CrmCompanyDTO (organisation_name), CrmAddressDTO (street, city) will be queried using the connected phonetic entry. All other fields will be queried using the 1:1 mapped fields in the DB
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCustomerResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerSearch
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerSearch
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerSearch[]
     */
    protected ?array $MidocoCustomerSearch = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - documentation: The number of MidocoCustomerSearch included in the response, not the total number of matching customers.
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for SearchCustomerResponse
     * @uses SearchCustomerResponse::setMidocoCustomerSearch()
     * @uses SearchCustomerResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerSearch[] $midocoCustomerSearch
     * @param int $noOfResults
     */
    public function __construct(?array $midocoCustomerSearch = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoCustomerSearch($midocoCustomerSearch)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoCustomerSearch value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerSearch[]
     */
    public function getMidocoCustomerSearch(): ?array
    {
        return $this->MidocoCustomerSearch;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerSearch method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerSearch method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerSearchForArrayConstraintFromSetMidocoCustomerSearch(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchCustomerResponseMidocoCustomerSearchItem) {
            // validation for constraint: itemType
            if (!$searchCustomerResponseMidocoCustomerSearchItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerSearch) {
                $invalidValues[] = is_object($searchCustomerResponseMidocoCustomerSearchItem) ? get_class($searchCustomerResponseMidocoCustomerSearchItem) : sprintf('%s(%s)', gettype($searchCustomerResponseMidocoCustomerSearchItem), var_export($searchCustomerResponseMidocoCustomerSearchItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerSearch property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerSearch, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerSearch value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerSearch[] $midocoCustomerSearch
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerResponse
     */
    public function setMidocoCustomerSearch(?array $midocoCustomerSearch = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerSearchArrayErrorMessage = self::validateMidocoCustomerSearchForArrayConstraintFromSetMidocoCustomerSearch($midocoCustomerSearch))) {
            throw new InvalidArgumentException($midocoCustomerSearchArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerSearch = $midocoCustomerSearch;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerSearch value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerSearch $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerResponse
     */
    public function addToMidocoCustomerSearch(\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerSearch $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerSearch) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerSearch property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerSearch, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerSearch[] = $item;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerResponse
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
