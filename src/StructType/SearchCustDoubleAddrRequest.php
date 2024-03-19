<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCustDoubleAddrRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCustDoubleAddrRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The zipCode
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The phone
     * @var string|null
     */
    protected ?string $phone = null;
    /**
     * The isNameCriteria
     * @var bool|null
     */
    protected ?bool $isNameCriteria = null;
    /**
     * The isForenameCriteria
     * @var bool|null
     */
    protected ?bool $isForenameCriteria = null;
    /**
     * The isEmailCriteria
     * @var bool|null
     */
    protected ?bool $isEmailCriteria = null;
    /**
     * The isTypeCriteria
     * @var bool|null
     */
    protected ?bool $isTypeCriteria = null;
    /**
     * The isCountryCriteria
     * @var bool|null
     */
    protected ?bool $isCountryCriteria = null;
    /**
     * The isCityCriteria
     * @var bool|null
     */
    protected ?bool $isCityCriteria = null;
    /**
     * The isZipCodeCriteria
     * @var bool|null
     */
    protected ?bool $isZipCodeCriteria = null;
    /**
     * The isStreetCriteria
     * @var bool|null
     */
    protected ?bool $isStreetCriteria = null;
    /**
     * The isPhoneCriteria
     * @var bool|null
     */
    protected ?bool $isPhoneCriteria = null;
    /**
     * The typeOfSearch
     * @var int|null
     */
    protected ?int $typeOfSearch = null;
    /**
     * The maxReturned
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * Constructor method for SearchCustDoubleAddrRequest
     * @uses SearchCustDoubleAddrRequest::setUnitName()
     * @uses SearchCustDoubleAddrRequest::setName()
     * @uses SearchCustDoubleAddrRequest::setForename()
     * @uses SearchCustDoubleAddrRequest::setEmail()
     * @uses SearchCustDoubleAddrRequest::setType()
     * @uses SearchCustDoubleAddrRequest::setCountry()
     * @uses SearchCustDoubleAddrRequest::setCity()
     * @uses SearchCustDoubleAddrRequest::setZipCode()
     * @uses SearchCustDoubleAddrRequest::setStreet()
     * @uses SearchCustDoubleAddrRequest::setPhone()
     * @uses SearchCustDoubleAddrRequest::setIsNameCriteria()
     * @uses SearchCustDoubleAddrRequest::setIsForenameCriteria()
     * @uses SearchCustDoubleAddrRequest::setIsEmailCriteria()
     * @uses SearchCustDoubleAddrRequest::setIsTypeCriteria()
     * @uses SearchCustDoubleAddrRequest::setIsCountryCriteria()
     * @uses SearchCustDoubleAddrRequest::setIsCityCriteria()
     * @uses SearchCustDoubleAddrRequest::setIsZipCodeCriteria()
     * @uses SearchCustDoubleAddrRequest::setIsStreetCriteria()
     * @uses SearchCustDoubleAddrRequest::setIsPhoneCriteria()
     * @uses SearchCustDoubleAddrRequest::setTypeOfSearch()
     * @uses SearchCustDoubleAddrRequest::setMaxReturned()
     * @param string $unitName
     * @param string $name
     * @param string $forename
     * @param string $email
     * @param int $type
     * @param string $country
     * @param string $city
     * @param string $zipCode
     * @param string $street
     * @param string $phone
     * @param bool $isNameCriteria
     * @param bool $isForenameCriteria
     * @param bool $isEmailCriteria
     * @param bool $isTypeCriteria
     * @param bool $isCountryCriteria
     * @param bool $isCityCriteria
     * @param bool $isZipCodeCriteria
     * @param bool $isStreetCriteria
     * @param bool $isPhoneCriteria
     * @param int $typeOfSearch
     * @param int $maxReturned
     */
    public function __construct(?string $unitName = null, ?string $name = null, ?string $forename = null, ?string $email = null, ?int $type = null, ?string $country = null, ?string $city = null, ?string $zipCode = null, ?string $street = null, ?string $phone = null, ?bool $isNameCriteria = null, ?bool $isForenameCriteria = null, ?bool $isEmailCriteria = null, ?bool $isTypeCriteria = null, ?bool $isCountryCriteria = null, ?bool $isCityCriteria = null, ?bool $isZipCodeCriteria = null, ?bool $isStreetCriteria = null, ?bool $isPhoneCriteria = null, ?int $typeOfSearch = null, ?int $maxReturned = null)
    {
        $this
            ->setUnitName($unitName)
            ->setName($name)
            ->setForename($forename)
            ->setEmail($email)
            ->setType($type)
            ->setCountry($country)
            ->setCity($city)
            ->setZipCode($zipCode)
            ->setStreet($street)
            ->setPhone($phone)
            ->setIsNameCriteria($isNameCriteria)
            ->setIsForenameCriteria($isForenameCriteria)
            ->setIsEmailCriteria($isEmailCriteria)
            ->setIsTypeCriteria($isTypeCriteria)
            ->setIsCountryCriteria($isCountryCriteria)
            ->setIsCityCriteria($isCityCriteria)
            ->setIsZipCodeCriteria($isZipCodeCriteria)
            ->setIsStreetCriteria($isStreetCriteria)
            ->setIsPhoneCriteria($isPhoneCriteria)
            ->setTypeOfSearch($typeOfSearch)
            ->setMaxReturned($maxReturned);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
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
    /**
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
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
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
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
     * Get phone value
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        
        return $this;
    }
    /**
     * Get isNameCriteria value
     * @return bool|null
     */
    public function getIsNameCriteria(): ?bool
    {
        return $this->isNameCriteria;
    }
    /**
     * Set isNameCriteria value
     * @param bool $isNameCriteria
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setIsNameCriteria(?bool $isNameCriteria = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNameCriteria) && !is_bool($isNameCriteria)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNameCriteria, true), gettype($isNameCriteria)), __LINE__);
        }
        $this->isNameCriteria = $isNameCriteria;
        
        return $this;
    }
    /**
     * Get isForenameCriteria value
     * @return bool|null
     */
    public function getIsForenameCriteria(): ?bool
    {
        return $this->isForenameCriteria;
    }
    /**
     * Set isForenameCriteria value
     * @param bool $isForenameCriteria
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setIsForenameCriteria(?bool $isForenameCriteria = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isForenameCriteria) && !is_bool($isForenameCriteria)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isForenameCriteria, true), gettype($isForenameCriteria)), __LINE__);
        }
        $this->isForenameCriteria = $isForenameCriteria;
        
        return $this;
    }
    /**
     * Get isEmailCriteria value
     * @return bool|null
     */
    public function getIsEmailCriteria(): ?bool
    {
        return $this->isEmailCriteria;
    }
    /**
     * Set isEmailCriteria value
     * @param bool $isEmailCriteria
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setIsEmailCriteria(?bool $isEmailCriteria = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEmailCriteria) && !is_bool($isEmailCriteria)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEmailCriteria, true), gettype($isEmailCriteria)), __LINE__);
        }
        $this->isEmailCriteria = $isEmailCriteria;
        
        return $this;
    }
    /**
     * Get isTypeCriteria value
     * @return bool|null
     */
    public function getIsTypeCriteria(): ?bool
    {
        return $this->isTypeCriteria;
    }
    /**
     * Set isTypeCriteria value
     * @param bool $isTypeCriteria
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setIsTypeCriteria(?bool $isTypeCriteria = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isTypeCriteria) && !is_bool($isTypeCriteria)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTypeCriteria, true), gettype($isTypeCriteria)), __LINE__);
        }
        $this->isTypeCriteria = $isTypeCriteria;
        
        return $this;
    }
    /**
     * Get isCountryCriteria value
     * @return bool|null
     */
    public function getIsCountryCriteria(): ?bool
    {
        return $this->isCountryCriteria;
    }
    /**
     * Set isCountryCriteria value
     * @param bool $isCountryCriteria
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setIsCountryCriteria(?bool $isCountryCriteria = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCountryCriteria) && !is_bool($isCountryCriteria)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCountryCriteria, true), gettype($isCountryCriteria)), __LINE__);
        }
        $this->isCountryCriteria = $isCountryCriteria;
        
        return $this;
    }
    /**
     * Get isCityCriteria value
     * @return bool|null
     */
    public function getIsCityCriteria(): ?bool
    {
        return $this->isCityCriteria;
    }
    /**
     * Set isCityCriteria value
     * @param bool $isCityCriteria
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setIsCityCriteria(?bool $isCityCriteria = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCityCriteria) && !is_bool($isCityCriteria)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCityCriteria, true), gettype($isCityCriteria)), __LINE__);
        }
        $this->isCityCriteria = $isCityCriteria;
        
        return $this;
    }
    /**
     * Get isZipCodeCriteria value
     * @return bool|null
     */
    public function getIsZipCodeCriteria(): ?bool
    {
        return $this->isZipCodeCriteria;
    }
    /**
     * Set isZipCodeCriteria value
     * @param bool $isZipCodeCriteria
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setIsZipCodeCriteria(?bool $isZipCodeCriteria = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isZipCodeCriteria) && !is_bool($isZipCodeCriteria)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isZipCodeCriteria, true), gettype($isZipCodeCriteria)), __LINE__);
        }
        $this->isZipCodeCriteria = $isZipCodeCriteria;
        
        return $this;
    }
    /**
     * Get isStreetCriteria value
     * @return bool|null
     */
    public function getIsStreetCriteria(): ?bool
    {
        return $this->isStreetCriteria;
    }
    /**
     * Set isStreetCriteria value
     * @param bool $isStreetCriteria
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setIsStreetCriteria(?bool $isStreetCriteria = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStreetCriteria) && !is_bool($isStreetCriteria)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStreetCriteria, true), gettype($isStreetCriteria)), __LINE__);
        }
        $this->isStreetCriteria = $isStreetCriteria;
        
        return $this;
    }
    /**
     * Get isPhoneCriteria value
     * @return bool|null
     */
    public function getIsPhoneCriteria(): ?bool
    {
        return $this->isPhoneCriteria;
    }
    /**
     * Set isPhoneCriteria value
     * @param bool $isPhoneCriteria
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setIsPhoneCriteria(?bool $isPhoneCriteria = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPhoneCriteria) && !is_bool($isPhoneCriteria)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPhoneCriteria, true), gettype($isPhoneCriteria)), __LINE__);
        }
        $this->isPhoneCriteria = $isPhoneCriteria;
        
        return $this;
    }
    /**
     * Get typeOfSearch value
     * @return int|null
     */
    public function getTypeOfSearch(): ?int
    {
        return $this->typeOfSearch;
    }
    /**
     * Set typeOfSearch value
     * @param int $typeOfSearch
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setTypeOfSearch(?int $typeOfSearch = null): self
    {
        // validation for constraint: int
        if (!is_null($typeOfSearch) && !(is_int($typeOfSearch) || ctype_digit($typeOfSearch))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typeOfSearch, true), gettype($typeOfSearch)), __LINE__);
        }
        $this->typeOfSearch = $typeOfSearch;
        
        return $this;
    }
    /**
     * Get maxReturned value
     * @return int|null
     */
    public function getMaxReturned(): ?int
    {
        return $this->maxReturned;
    }
    /**
     * Set maxReturned value
     * @param int $maxReturned
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustDoubleAddrRequest
     */
    public function setMaxReturned(?int $maxReturned = null): self
    {
        // validation for constraint: int
        if (!is_null($maxReturned) && !(is_int($maxReturned) || ctype_digit($maxReturned))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxReturned, true), gettype($maxReturned)), __LINE__);
        }
        $this->maxReturned = $maxReturned;
        
        return $this;
    }
}
