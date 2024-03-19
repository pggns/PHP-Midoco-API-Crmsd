<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCcTokenRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCcTokenRequest extends AbstractStructBase
{
    /**
     * The MidocoCcToken
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: MidocoCcToken
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken[]
     */
    protected array $MidocoCcToken;
    /**
     * The ccMask
     * @var string|null
     */
    protected ?string $ccMask = null;
    /**
     * Constructor method for SaveCcTokenRequest
     * @uses SaveCcTokenRequest::setMidocoCcToken()
     * @uses SaveCcTokenRequest::setCcMask()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken[] $midocoCcToken
     * @param string $ccMask
     */
    public function __construct(array $midocoCcToken, ?string $ccMask = null)
    {
        $this
            ->setMidocoCcToken($midocoCcToken)
            ->setCcMask($ccMask);
    }
    /**
     * Get MidocoCcToken value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken[]
     */
    public function getMidocoCcToken(): array
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
        foreach ($values as $saveCcTokenRequestMidocoCcTokenItem) {
            // validation for constraint: itemType
            if (!$saveCcTokenRequestMidocoCcTokenItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken) {
                $invalidValues[] = is_object($saveCcTokenRequestMidocoCcTokenItem) ? get_class($saveCcTokenRequestMidocoCcTokenItem) : sprintf('%s(%s)', gettype($saveCcTokenRequestMidocoCcTokenItem), var_export($saveCcTokenRequestMidocoCcTokenItem, true));
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCcTokenRequest
     */
    public function setMidocoCcToken(array $midocoCcToken): self
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCcTokenRequest
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
    /**
     * Get ccMask value
     * @return string|null
     */
    public function getCcMask(): ?string
    {
        return $this->ccMask;
    }
    /**
     * Set ccMask value
     * @param string $ccMask
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCcTokenRequest
     */
    public function setCcMask(?string $ccMask = null): self
    {
        // validation for constraint: string
        if (!is_null($ccMask) && !is_string($ccMask)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccMask, true), gettype($ccMask)), __LINE__);
        }
        $this->ccMask = $ccMask;
        
        return $this;
    }
}
