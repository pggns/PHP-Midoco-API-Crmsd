<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCcTokenResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCcTokenResponse extends AbstractStructBase
{
    /**
     * The MidocoCcToken
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCcToken
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken[]
     */
    protected ?array $MidocoCcToken = null;
    /**
     * Constructor method for GetCcTokenResponse
     * @uses GetCcTokenResponse::setMidocoCcToken()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken[] $midocoCcToken
     */
    public function __construct(?array $midocoCcToken = null)
    {
        $this
            ->setMidocoCcToken($midocoCcToken);
    }
    /**
     * Get MidocoCcToken value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken[]
     */
    public function getMidocoCcToken(): ?array
    {
        return $this->MidocoCcToken;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCcToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCcToken method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCcTokenForArrayConstraintFromSetMidocoCcToken(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCcTokenResponseMidocoCcTokenItem) {
            // validation for constraint: itemType
            if (!$getCcTokenResponseMidocoCcTokenItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken) {
                $invalidValues[] = is_object($getCcTokenResponseMidocoCcTokenItem) ? get_class($getCcTokenResponseMidocoCcTokenItem) : sprintf('%s(%s)', gettype($getCcTokenResponseMidocoCcTokenItem), var_export($getCcTokenResponseMidocoCcTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCcToken property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCcToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken[] $midocoCcToken
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCcTokenResponse
     */
    public function setMidocoCcToken(?array $midocoCcToken = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCcTokenArrayErrorMessage = self::validateMidocoCcTokenForArrayConstraintFromSetMidocoCcToken($midocoCcToken))) {
            throw new InvalidArgumentException($midocoCcTokenArrayErrorMessage, __LINE__);
        }
        $this->MidocoCcToken = $midocoCcToken;
        
        return $this;
    }
    /**
     * Add item to MidocoCcToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCcTokenResponse
     */
    public function addToMidocoCcToken(\Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken) {
            throw new InvalidArgumentException(sprintf('The MidocoCcToken property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCcToken[] = $item;
        
        return $this;
    }
}
