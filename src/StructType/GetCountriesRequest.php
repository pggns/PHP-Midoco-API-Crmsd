<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCountriesRequest StructType
 * @subpackage Structs
 */
class GetCountriesRequest extends AbstractStructBase
{
    /**
     * The CountryIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $CountryIds = [];
    /**
     * Constructor method for GetCountriesRequest
     * @uses GetCountriesRequest::setCountryIds()
     * @param string[] $countryIds
     */
    public function __construct(array $countryIds = [])
    {
        $this
            ->setCountryIds($countryIds);
    }
    /**
     * Get CountryIds value
     * @return string[]
     */
    public function getCountryIds(): array
    {
        return $this->CountryIds;
    }
    /**
     * This method is responsible for validating the values passed to the setCountryIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountryIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountryIdsForArrayConstraintsFromSetCountryIds(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCountriesRequestCountryIdsItem) {
            // validation for constraint: itemType
            if (!is_string($getCountriesRequestCountryIdsItem)) {
                $invalidValues[] = is_object($getCountriesRequestCountryIdsItem) ? get_class($getCountriesRequestCountryIdsItem) : sprintf('%s(%s)', gettype($getCountriesRequestCountryIdsItem), var_export($getCountriesRequestCountryIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CountryIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CountryIds value
     * @throws InvalidArgumentException
     * @param string[] $countryIds
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCountriesRequest
     */
    public function setCountryIds(array $countryIds = []): self
    {
        // validation for constraint: array
        if ('' !== ($countryIdsArrayErrorMessage = self::validateCountryIdsForArrayConstraintsFromSetCountryIds($countryIds))) {
            throw new InvalidArgumentException($countryIdsArrayErrorMessage, __LINE__);
        }
        $this->CountryIds = $countryIds;
        
        return $this;
    }
    /**
     * Add item to CountryIds value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCountriesRequest
     */
    public function addToCountryIds(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The CountryIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CountryIds[] = $item;
        
        return $this;
    }
}
