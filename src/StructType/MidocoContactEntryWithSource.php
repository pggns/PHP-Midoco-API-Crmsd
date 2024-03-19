<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoContactEntryWithSource StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoContactEntryWithSource extends AbstractStructBase
{
    /**
     * The MidocoContactEntry
     * Meta information extracted from the WSDL
     * - ref: MidocoContactEntry
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType $MidocoContactEntry = null;
    /**
     * The MidocoContactSource
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactSource
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoContactSource[]
     */
    protected ?array $MidocoContactSource = null;
    /**
     * Constructor method for MidocoContactEntryWithSource
     * @uses MidocoContactEntryWithSource::setMidocoContactEntry()
     * @uses MidocoContactEntryWithSource::setMidocoContactSource()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType $midocoContactEntry
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactSource[] $midocoContactSource
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType $midocoContactEntry = null, ?array $midocoContactSource = null)
    {
        $this
            ->setMidocoContactEntry($midocoContactEntry)
            ->setMidocoContactSource($midocoContactSource);
    }
    /**
     * Get MidocoContactEntry value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType|null
     */
    public function getMidocoContactEntry(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType
    {
        return $this->MidocoContactEntry;
    }
    /**
     * Set MidocoContactEntry value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType $midocoContactEntry
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryWithSource
     */
    public function setMidocoContactEntry(?\Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType $midocoContactEntry = null): self
    {
        $this->MidocoContactEntry = $midocoContactEntry;
        
        return $this;
    }
    /**
     * Get MidocoContactSource value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoContactSource[]
     */
    public function getMidocoContactSource(): ?array
    {
        return $this->MidocoContactSource;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoContactSource method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactSource method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactSourceForArrayConstraintFromSetMidocoContactSource(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoContactEntryWithSourceMidocoContactSourceItem) {
            // validation for constraint: itemType
            if (!$midocoContactEntryWithSourceMidocoContactSourceItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactSource) {
                $invalidValues[] = is_object($midocoContactEntryWithSourceMidocoContactSourceItem) ? get_class($midocoContactEntryWithSourceMidocoContactSourceItem) : sprintf('%s(%s)', gettype($midocoContactEntryWithSourceMidocoContactSourceItem), var_export($midocoContactEntryWithSourceMidocoContactSourceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactSource property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactSource, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactSource value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactSource[] $midocoContactSource
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryWithSource
     */
    public function setMidocoContactSource(?array $midocoContactSource = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactSourceArrayErrorMessage = self::validateMidocoContactSourceForArrayConstraintFromSetMidocoContactSource($midocoContactSource))) {
            throw new InvalidArgumentException($midocoContactSourceArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactSource = $midocoContactSource;
        
        return $this;
    }
    /**
     * Add item to MidocoContactSource value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactSource $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryWithSource
     */
    public function addToMidocoContactSource(\Pggns\MidocoApi\Crmsd\StructType\MidocoContactSource $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactSource) {
            throw new InvalidArgumentException(sprintf('The MidocoContactSource property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactSource, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactSource[] = $item;
        
        return $this;
    }
}
