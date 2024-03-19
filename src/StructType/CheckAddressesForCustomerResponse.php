<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckAddressesForCustomerResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckAddressesForCustomerResponse extends AbstractStructBase
{
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The message
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * The MidocoCrmAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoCrmAddress
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress[]
     */
    protected ?array $MidocoCrmAddress = null;
    /**
     * The errors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected ?array $errors = null;
    /**
     * Constructor method for CheckAddressesForCustomerResponse
     * @uses CheckAddressesForCustomerResponse::setCode()
     * @uses CheckAddressesForCustomerResponse::setMessage()
     * @uses CheckAddressesForCustomerResponse::setMidocoCrmAddress()
     * @uses CheckAddressesForCustomerResponse::setErrors()
     * @param string $code
     * @param string $message
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @param string[] $errors
     */
    public function __construct(?string $code = null, ?string $message = null, ?array $midocoCrmAddress = null, ?array $errors = null)
    {
        $this
            ->setCode($code)
            ->setMessage($message)
            ->setMidocoCrmAddress($midocoCrmAddress)
            ->setErrors($errors);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Crmsd\StructType\CheckAddressesForCustomerResponse
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Pggns\MidocoApi\Crmsd\StructType\CheckAddressesForCustomerResponse
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        
        return $this;
    }
    /**
     * Get MidocoCrmAddress value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress[]
     */
    public function getMidocoCrmAddress(): ?array
    {
        return $this->MidocoCrmAddress;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmAddressForArrayConstraintFromSetMidocoCrmAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $checkAddressesForCustomerResponseMidocoCrmAddressItem) {
            // validation for constraint: itemType
            if (!$checkAddressesForCustomerResponseMidocoCrmAddressItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress) {
                $invalidValues[] = is_object($checkAddressesForCustomerResponseMidocoCrmAddressItem) ? get_class($checkAddressesForCustomerResponseMidocoCrmAddressItem) : sprintf('%s(%s)', gettype($checkAddressesForCustomerResponseMidocoCrmAddressItem), var_export($checkAddressesForCustomerResponseMidocoCrmAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @return \Pggns\MidocoApi\Crmsd\StructType\CheckAddressesForCustomerResponse
     */
    public function setMidocoCrmAddress(?array $midocoCrmAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmAddressArrayErrorMessage = self::validateMidocoCrmAddressForArrayConstraintFromSetMidocoCrmAddress($midocoCrmAddress))) {
            throw new InvalidArgumentException($midocoCrmAddressArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmAddress = $midocoCrmAddress;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\CheckAddressesForCustomerResponse
     */
    public function addToMidocoCrmAddress(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmAddress[] = $item;
        
        return $this;
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
        foreach ($values as $checkAddressesForCustomerResponseErrorsItem) {
            // validation for constraint: itemType
            if (!is_string($checkAddressesForCustomerResponseErrorsItem)) {
                $invalidValues[] = is_object($checkAddressesForCustomerResponseErrorsItem) ? get_class($checkAddressesForCustomerResponseErrorsItem) : sprintf('%s(%s)', gettype($checkAddressesForCustomerResponseErrorsItem), var_export($checkAddressesForCustomerResponseErrorsItem, true));
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\CheckAddressesForCustomerResponse
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\CheckAddressesForCustomerResponse
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
}
