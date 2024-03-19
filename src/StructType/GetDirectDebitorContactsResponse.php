<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDirectDebitorContactsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDirectDebitorContactsResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The MidocoContactEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactEntry
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType[]
     */
    protected ?array $MidocoContactEntry = null;
    /**
     * The needsSignature
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $needsSignature = null;
    /**
     * Constructor method for GetDirectDebitorContactsResponse
     * @uses GetDirectDebitorContactsResponse::setMidocoCustomerId()
     * @uses GetDirectDebitorContactsResponse::setMidocoContactEntry()
     * @uses GetDirectDebitorContactsResponse::setNeedsSignature()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @param bool $needsSignature
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null, ?array $midocoContactEntry = null, ?bool $needsSignature = false)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setMidocoContactEntry($midocoContactEntry)
            ->setNeedsSignature($needsSignature);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    public function getMidocoCustomerId(): ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDirectDebitorContactsResponse
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get MidocoContactEntry value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType[]
     */
    public function getMidocoContactEntry(): ?array
    {
        return $this->MidocoContactEntry;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoContactEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactEntry method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactEntryForArrayConstraintFromSetMidocoContactEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDirectDebitorContactsResponseMidocoContactEntryItem) {
            // validation for constraint: itemType
            if (!$getDirectDebitorContactsResponseMidocoContactEntryItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType) {
                $invalidValues[] = is_object($getDirectDebitorContactsResponseMidocoContactEntryItem) ? get_class($getDirectDebitorContactsResponseMidocoContactEntryItem) : sprintf('%s(%s)', gettype($getDirectDebitorContactsResponseMidocoContactEntryItem), var_export($getDirectDebitorContactsResponseMidocoContactEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDirectDebitorContactsResponse
     */
    public function setMidocoContactEntry(?array $midocoContactEntry = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactEntryArrayErrorMessage = self::validateMidocoContactEntryForArrayConstraintFromSetMidocoContactEntry($midocoContactEntry))) {
            throw new InvalidArgumentException($midocoContactEntryArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactEntry = $midocoContactEntry;
        
        return $this;
    }
    /**
     * Add item to MidocoContactEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDirectDebitorContactsResponse
     */
    public function addToMidocoContactEntry(\Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType) {
            throw new InvalidArgumentException(sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactEntry[] = $item;
        
        return $this;
    }
    /**
     * Get needsSignature value
     * @return bool|null
     */
    public function getNeedsSignature(): ?bool
    {
        return $this->needsSignature;
    }
    /**
     * Set needsSignature value
     * @param bool $needsSignature
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDirectDebitorContactsResponse
     */
    public function setNeedsSignature(?bool $needsSignature = false): self
    {
        // validation for constraint: boolean
        if (!is_null($needsSignature) && !is_bool($needsSignature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsSignature, true), gettype($needsSignature)), __LINE__);
        }
        $this->needsSignature = $needsSignature;
        
        return $this;
    }
}
