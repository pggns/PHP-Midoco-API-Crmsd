<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteContactEntryResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: deleteContactEntry --- deletes a specified contact entry. return void
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteContactEntryResponse extends AbstractStructBase
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
     * Constructor method for DeleteContactEntryResponse
     * @uses DeleteContactEntryResponse::setErrors()
     * @uses DeleteContactEntryResponse::setInternalVersion()
     * @param string[] $errors
     * @param int $internalVersion
     */
    public function __construct(?array $errors = null, ?int $internalVersion = null)
    {
        $this
            ->setErrors($errors)
            ->setInternalVersion($internalVersion);
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
        foreach ($values as $deleteContactEntryResponseErrorsItem) {
            // validation for constraint: itemType
            if (!is_string($deleteContactEntryResponseErrorsItem)) {
                $invalidValues[] = is_object($deleteContactEntryResponseErrorsItem) ? get_class($deleteContactEntryResponseErrorsItem) : sprintf('%s(%s)', gettype($deleteContactEntryResponseErrorsItem), var_export($deleteContactEntryResponseErrorsItem, true));
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteContactEntryResponse
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteContactEntryResponse
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteContactEntryResponse
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
}
