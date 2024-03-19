<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContactEntriesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getContactEntries --- returns the list of contact entries corresponding to a customer id
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetContactEntriesResponse extends AbstractStructBase
{
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
     * Constructor method for GetContactEntriesResponse
     * @uses GetContactEntriesResponse::setMidocoContactEntry()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType[] $midocoContactEntry
     */
    public function __construct(?array $midocoContactEntry = null)
    {
        $this
            ->setMidocoContactEntry($midocoContactEntry);
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
        foreach ($values as $getContactEntriesResponseMidocoContactEntryItem) {
            // validation for constraint: itemType
            if (!$getContactEntriesResponseMidocoContactEntryItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType) {
                $invalidValues[] = is_object($getContactEntriesResponseMidocoContactEntryItem) ? get_class($getContactEntriesResponseMidocoContactEntryItem) : sprintf('%s(%s)', gettype($getContactEntriesResponseMidocoContactEntryItem), var_export($getContactEntriesResponseMidocoContactEntryItem, true));
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetContactEntriesResponse
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetContactEntriesResponse
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
}
