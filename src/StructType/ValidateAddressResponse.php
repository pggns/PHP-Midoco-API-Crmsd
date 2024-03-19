<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateAddressResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: validateAddress --- validate an address entry using an external service, use a previously assigned session if not null. First check if the validation attribute is assigned to this OrgUnit (attrib_name = ADDRESS_VALIDATION). If the
 * attribute is set to 1?, lookup the adapter using the adapter type ADDRESS_VALIDATION_PROVIDER and call the class (must have a common AddressValidateDTO validate (CrmAddressDTO, String validation_session) interface). In case not validation flag is
 * set, the CrmAddressDTO structure is put in the return DTO and the error code is set to 0 to simulate a validation. When a validation is successful, the resulting embedded CrmAddressDTO will have the validated flag set
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidateAddressResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmAddress
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $MidocoCrmAddress = null;
    /**
     * The MidocoAddressValidate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAddressValidate
     * @var \Pggns\MidocoApi\Crmsd\StructType\AddressValidateDTO[]
     */
    protected ?array $MidocoAddressValidate = null;
    /**
     * The errorCode
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorText
     * @var string|null
     */
    protected ?string $errorText = null;
    /**
     * The validationId
     * @var string|null
     */
    protected ?string $validationId = null;
    /**
     * Constructor method for ValidateAddressResponse
     * @uses ValidateAddressResponse::setMidocoCrmAddress()
     * @uses ValidateAddressResponse::setMidocoAddressValidate()
     * @uses ValidateAddressResponse::setErrorCode()
     * @uses ValidateAddressResponse::setErrorText()
     * @uses ValidateAddressResponse::setValidationId()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $midocoCrmAddress
     * @param \Pggns\MidocoApi\Crmsd\StructType\AddressValidateDTO[] $midocoAddressValidate
     * @param string $errorCode
     * @param string $errorText
     * @param string $validationId
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $midocoCrmAddress = null, ?array $midocoAddressValidate = null, ?string $errorCode = null, ?string $errorText = null, ?string $validationId = null)
    {
        $this
            ->setMidocoCrmAddress($midocoCrmAddress)
            ->setMidocoAddressValidate($midocoAddressValidate)
            ->setErrorCode($errorCode)
            ->setErrorText($errorText)
            ->setValidationId($validationId);
    }
    /**
     * Get MidocoCrmAddress value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress|null
     */
    public function getMidocoCrmAddress(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress
    {
        return $this->MidocoCrmAddress;
    }
    /**
     * Set MidocoCrmAddress value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $midocoCrmAddress
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateAddressResponse
     */
    public function setMidocoCrmAddress(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $midocoCrmAddress = null): self
    {
        $this->MidocoCrmAddress = $midocoCrmAddress;
        
        return $this;
    }
    /**
     * Get MidocoAddressValidate value
     * @return \Pggns\MidocoApi\Crmsd\StructType\AddressValidateDTO[]
     */
    public function getMidocoAddressValidate(): ?array
    {
        return $this->MidocoAddressValidate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAddressValidate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAddressValidate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAddressValidateForArrayConstraintFromSetMidocoAddressValidate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $validateAddressResponseMidocoAddressValidateItem) {
            // validation for constraint: itemType
            if (!$validateAddressResponseMidocoAddressValidateItem instanceof \Pggns\MidocoApi\Crmsd\StructType\AddressValidateDTO) {
                $invalidValues[] = is_object($validateAddressResponseMidocoAddressValidateItem) ? get_class($validateAddressResponseMidocoAddressValidateItem) : sprintf('%s(%s)', gettype($validateAddressResponseMidocoAddressValidateItem), var_export($validateAddressResponseMidocoAddressValidateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAddressValidate property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\AddressValidateDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAddressValidate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\AddressValidateDTO[] $midocoAddressValidate
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateAddressResponse
     */
    public function setMidocoAddressValidate(?array $midocoAddressValidate = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAddressValidateArrayErrorMessage = self::validateMidocoAddressValidateForArrayConstraintFromSetMidocoAddressValidate($midocoAddressValidate))) {
            throw new InvalidArgumentException($midocoAddressValidateArrayErrorMessage, __LINE__);
        }
        $this->MidocoAddressValidate = $midocoAddressValidate;
        
        return $this;
    }
    /**
     * Add item to MidocoAddressValidate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\AddressValidateDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateAddressResponse
     */
    public function addToMidocoAddressValidate(\Pggns\MidocoApi\Crmsd\StructType\AddressValidateDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\AddressValidateDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAddressValidate property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\AddressValidateDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAddressValidate[] = $item;
        
        return $this;
    }
    /**
     * Get errorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateAddressResponse
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorText value
     * @return string|null
     */
    public function getErrorText(): ?string
    {
        return $this->errorText;
    }
    /**
     * Set errorText value
     * @param string $errorText
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateAddressResponse
     */
    public function setErrorText(?string $errorText = null): self
    {
        // validation for constraint: string
        if (!is_null($errorText) && !is_string($errorText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorText, true), gettype($errorText)), __LINE__);
        }
        $this->errorText = $errorText;
        
        return $this;
    }
    /**
     * Get validationId value
     * @return string|null
     */
    public function getValidationId(): ?string
    {
        return $this->validationId;
    }
    /**
     * Set validationId value
     * @param string $validationId
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateAddressResponse
     */
    public function setValidationId(?string $validationId = null): self
    {
        // validation for constraint: string
        if (!is_null($validationId) && !is_string($validationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validationId, true), gettype($validationId)), __LINE__);
        }
        $this->validationId = $validationId;
        
        return $this;
    }
}
