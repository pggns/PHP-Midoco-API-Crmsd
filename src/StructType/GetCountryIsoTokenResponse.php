<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCountryIsoTokenResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCountryIsoTokenResponse extends AbstractStructBase
{
    /**
     * The MidocoCountryToken
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCountryToken
     * @var \Pggns\MidocoApi\Crmsd\StructType\CountryTokenDTO[]
     */
    protected ?array $MidocoCountryToken = null;
    /**
     * Constructor method for GetCountryIsoTokenResponse
     * @uses GetCountryIsoTokenResponse::setMidocoCountryToken()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CountryTokenDTO[] $midocoCountryToken
     */
    public function __construct(?array $midocoCountryToken = null)
    {
        $this
            ->setMidocoCountryToken($midocoCountryToken);
    }
    /**
     * Get MidocoCountryToken value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CountryTokenDTO[]
     */
    public function getMidocoCountryToken(): ?array
    {
        return $this->MidocoCountryToken;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCountryToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCountryToken method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCountryTokenForArrayConstraintFromSetMidocoCountryToken(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCountryIsoTokenResponseMidocoCountryTokenItem) {
            // validation for constraint: itemType
            if (!$getCountryIsoTokenResponseMidocoCountryTokenItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CountryTokenDTO) {
                $invalidValues[] = is_object($getCountryIsoTokenResponseMidocoCountryTokenItem) ? get_class($getCountryIsoTokenResponseMidocoCountryTokenItem) : sprintf('%s(%s)', gettype($getCountryIsoTokenResponseMidocoCountryTokenItem), var_export($getCountryIsoTokenResponseMidocoCountryTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCountryToken property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CountryTokenDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCountryToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CountryTokenDTO[] $midocoCountryToken
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCountryIsoTokenResponse
     */
    public function setMidocoCountryToken(?array $midocoCountryToken = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCountryTokenArrayErrorMessage = self::validateMidocoCountryTokenForArrayConstraintFromSetMidocoCountryToken($midocoCountryToken))) {
            throw new InvalidArgumentException($midocoCountryTokenArrayErrorMessage, __LINE__);
        }
        $this->MidocoCountryToken = $midocoCountryToken;
        
        return $this;
    }
    /**
     * Add item to MidocoCountryToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CountryTokenDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCountryIsoTokenResponse
     */
    public function addToMidocoCountryToken(\Pggns\MidocoApi\Crmsd\StructType\CountryTokenDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CountryTokenDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCountryToken property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CountryTokenDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCountryToken[] = $item;
        
        return $this;
    }
}
