<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyDictionaryNamesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VerifyDictionaryNamesRequest extends AbstractStructBase
{
    /**
     * The MidocoDictionaryPerson
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDictionaryPerson
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoDictionaryPerson[]
     */
    protected ?array $MidocoDictionaryPerson = null;
    /**
     * Constructor method for VerifyDictionaryNamesRequest
     * @uses VerifyDictionaryNamesRequest::setMidocoDictionaryPerson()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoDictionaryPerson[] $midocoDictionaryPerson
     */
    public function __construct(?array $midocoDictionaryPerson = null)
    {
        $this
            ->setMidocoDictionaryPerson($midocoDictionaryPerson);
    }
    /**
     * Get MidocoDictionaryPerson value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoDictionaryPerson[]
     */
    public function getMidocoDictionaryPerson(): ?array
    {
        return $this->MidocoDictionaryPerson;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDictionaryPerson method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDictionaryPerson method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDictionaryPersonForArrayConstraintFromSetMidocoDictionaryPerson(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $verifyDictionaryNamesRequestMidocoDictionaryPersonItem) {
            // validation for constraint: itemType
            if (!$verifyDictionaryNamesRequestMidocoDictionaryPersonItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoDictionaryPerson) {
                $invalidValues[] = is_object($verifyDictionaryNamesRequestMidocoDictionaryPersonItem) ? get_class($verifyDictionaryNamesRequestMidocoDictionaryPersonItem) : sprintf('%s(%s)', gettype($verifyDictionaryNamesRequestMidocoDictionaryPersonItem), var_export($verifyDictionaryNamesRequestMidocoDictionaryPersonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDictionaryPerson property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoDictionaryPerson, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDictionaryPerson value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoDictionaryPerson[] $midocoDictionaryPerson
     * @return \Pggns\MidocoApi\Crmsd\StructType\VerifyDictionaryNamesRequest
     */
    public function setMidocoDictionaryPerson(?array $midocoDictionaryPerson = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDictionaryPersonArrayErrorMessage = self::validateMidocoDictionaryPersonForArrayConstraintFromSetMidocoDictionaryPerson($midocoDictionaryPerson))) {
            throw new InvalidArgumentException($midocoDictionaryPersonArrayErrorMessage, __LINE__);
        }
        $this->MidocoDictionaryPerson = $midocoDictionaryPerson;
        
        return $this;
    }
    /**
     * Add item to MidocoDictionaryPerson value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoDictionaryPerson $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\VerifyDictionaryNamesRequest
     */
    public function addToMidocoDictionaryPerson(\Pggns\MidocoApi\Crmsd\StructType\MidocoDictionaryPerson $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoDictionaryPerson) {
            throw new InvalidArgumentException(sprintf('The MidocoDictionaryPerson property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoDictionaryPerson, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDictionaryPerson[] = $item;
        
        return $this;
    }
}
