<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveContactEntryResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveContactEntry --- depending if a contact_id is already set, insert or update a ContactEntry for the customer
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveContactEntryResponse extends AbstractStructBase
{
    /**
     * The errors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $errors = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The contactId
     * @var int|null
     */
    protected ?int $contactId = null;
    /**
     * Constructor method for SaveContactEntryResponse
     * @uses SaveContactEntryResponse::setErrors()
     * @uses SaveContactEntryResponse::setInternalVersion()
     * @uses SaveContactEntryResponse::setContactId()
     * @param string[] $errors
     * @param int $internalVersion
     * @param int $contactId
     */
    public function __construct(?array $errors = null, ?int $internalVersion = null, ?int $contactId = null)
    {
        $this
            ->setErrors($errors)
            ->setInternalVersion($internalVersion)
            ->setContactId($contactId);
    }
    /**
     * Get errors value
     * @return string[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setErrors method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrors method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorsForArrayConstraintFromSetErrors(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveContactEntryResponseErrorsItem) {
            // validation for constraint: itemType
            if (!is_string($saveContactEntryResponseErrorsItem)) {
                $invalidValues[] = is_object($saveContactEntryResponseErrorsItem) ? get_class($saveContactEntryResponseErrorsItem) : sprintf('%s(%s)', gettype($saveContactEntryResponseErrorsItem), var_export($saveContactEntryResponseErrorsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The errors property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set errors value
     * @throws InvalidArgumentException
     * @param string[] $errors
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveContactEntryResponse
     */
    public function setErrors(?array $errors = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorsArrayErrorMessage = self::validateErrorsForArrayConstraintFromSetErrors($errors))) {
            throw new InvalidArgumentException($errorsArrayErrorMessage, __LINE__);
        }
        $this->errors = $errors;
        
        return $this;
    }
    /**
     * Add item to errors value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveContactEntryResponse
     */
    public function addToErrors(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The errors property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->errors[] = $item;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveContactEntryResponse
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
    /**
     * Get contactId value
     * @return int|null
     */
    public function getContactId(): ?int
    {
        return $this->contactId;
    }
    /**
     * Set contactId value
     * @param int $contactId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveContactEntryResponse
     */
    public function setContactId(?int $contactId = null): self
    {
        // validation for constraint: int
        if (!is_null($contactId) && !(is_int($contactId) || ctype_digit($contactId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($contactId, true), gettype($contactId)), __LINE__);
        }
        $this->contactId = $contactId;
        
        return $this;
    }
}
