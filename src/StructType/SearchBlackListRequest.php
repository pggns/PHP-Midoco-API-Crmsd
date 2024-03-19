<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBlackListRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchBlackListRequest extends AbstractStructBase
{
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected ?array $unitName = null;
    /**
     * The surName
     * @var string|null
     */
    protected ?string $surName = null;
    /**
     * The foreName
     * @var string|null
     */
    protected ?string $foreName = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The streetNo
     * @var string|null
     */
    protected ?string $streetNo = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The postOfficeBox
     * @var string|null
     */
    protected ?string $postOfficeBox = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The countryCode
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * Constructor method for SearchBlackListRequest
     * @uses SearchBlackListRequest::setUnitName()
     * @uses SearchBlackListRequest::setSurName()
     * @uses SearchBlackListRequest::setForeName()
     * @uses SearchBlackListRequest::setStreet()
     * @uses SearchBlackListRequest::setStreetNo()
     * @uses SearchBlackListRequest::setPostalCode()
     * @uses SearchBlackListRequest::setPostOfficeBox()
     * @uses SearchBlackListRequest::setCity()
     * @uses SearchBlackListRequest::setCountryCode()
     * @uses SearchBlackListRequest::setEmail()
     * @param string[] $unitName
     * @param string $surName
     * @param string $foreName
     * @param string $street
     * @param string $streetNo
     * @param string $postalCode
     * @param string $postOfficeBox
     * @param string $city
     * @param string $countryCode
     * @param string $email
     */
    public function __construct(?array $unitName = null, ?string $surName = null, ?string $foreName = null, ?string $street = null, ?string $streetNo = null, ?string $postalCode = null, ?string $postOfficeBox = null, ?string $city = null, ?string $countryCode = null, ?string $email = null)
    {
        $this
            ->setUnitName($unitName)
            ->setSurName($surName)
            ->setForeName($foreName)
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setPostalCode($postalCode)
            ->setPostOfficeBox($postOfficeBox)
            ->setCity($city)
            ->setCountryCode($countryCode)
            ->setEmail($email);
    }
    /**
     * Get unitName value
     * @return string[]
     */
    public function getUnitName(): ?array
    {
        return $this->unitName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNameForArrayConstraintFromSetUnitName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchBlackListRequestUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($searchBlackListRequestUnitNameItem)) {
                $invalidValues[] = is_object($searchBlackListRequestUnitNameItem) ? get_class($searchBlackListRequestUnitNameItem) : sprintf('%s(%s)', gettype($searchBlackListRequestUnitNameItem), var_export($searchBlackListRequestUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unitName value
     * @throws InvalidArgumentException
     * @param string[] $unitName
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBlackListRequest
     */
    public function setUnitName(?array $unitName = null): self
    {
        // validation for constraint: array
        if ('' !== ($unitNameArrayErrorMessage = self::validateUnitNameForArrayConstraintFromSetUnitName($unitName))) {
            throw new InvalidArgumentException($unitNameArrayErrorMessage, __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Add item to unitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBlackListRequest
     */
    public function addToUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unitName[] = $item;
        
        return $this;
    }
    /**
     * Get surName value
     * @return string|null
     */
    public function getSurName(): ?string
    {
        return $this->surName;
    }
    /**
     * Set surName value
     * @param string $surName
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBlackListRequest
     */
    public function setSurName(?string $surName = null): self
    {
        // validation for constraint: string
        if (!is_null($surName) && !is_string($surName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surName, true), gettype($surName)), __LINE__);
        }
        $this->surName = $surName;
        
        return $this;
    }
    /**
     * Get foreName value
     * @return string|null
     */
    public function getForeName(): ?string
    {
        return $this->foreName;
    }
    /**
     * Set foreName value
     * @param string $foreName
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBlackListRequest
     */
    public function setForeName(?string $foreName = null): self
    {
        // validation for constraint: string
        if (!is_null($foreName) && !is_string($foreName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreName, true), gettype($foreName)), __LINE__);
        }
        $this->foreName = $foreName;
        
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBlackListRequest
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        
        return $this;
    }
    /**
     * Get streetNo value
     * @return string|null
     */
    public function getStreetNo(): ?string
    {
        return $this->streetNo;
    }
    /**
     * Set streetNo value
     * @param string $streetNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBlackListRequest
     */
    public function setStreetNo(?string $streetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($streetNo) && !is_string($streetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNo, true), gettype($streetNo)), __LINE__);
        }
        $this->streetNo = $streetNo;
        
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBlackListRequest
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
        
        return $this;
    }
    /**
     * Get postOfficeBox value
     * @return string|null
     */
    public function getPostOfficeBox(): ?string
    {
        return $this->postOfficeBox;
    }
    /**
     * Set postOfficeBox value
     * @param string $postOfficeBox
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBlackListRequest
     */
    public function setPostOfficeBox(?string $postOfficeBox = null): self
    {
        // validation for constraint: string
        if (!is_null($postOfficeBox) && !is_string($postOfficeBox)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postOfficeBox, true), gettype($postOfficeBox)), __LINE__);
        }
        $this->postOfficeBox = $postOfficeBox;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBlackListRequest
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBlackListRequest
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBlackListRequest
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
}
