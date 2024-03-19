<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCustomerDetailType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCustomerDetailType extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The salutation
     * @var string|null
     */
    protected ?string $salutation = null;
    /**
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The firstName
     * @var string|null
     */
    protected ?string $firstName = null;
    /**
     * The lastName
     * @var string|null
     */
    protected ?string $lastName = null;
    /**
     * The birthday
     * @var string|null
     */
    protected ?string $birthday = null;
    /**
     * The phonePrivate
     * @var string|null
     */
    protected ?string $phonePrivate = null;
    /**
     * The phoneWork
     * @var string|null
     */
    protected ?string $phoneWork = null;
    /**
     * The phoneMobile
     * @var string|null
     */
    protected ?string $phoneMobile = null;
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
     * The zip
     * @var string|null
     */
    protected ?string $zip = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * Constructor method for MidocoCustomerDetailType
     * @uses MidocoCustomerDetailType::setCustomerId()
     * @uses MidocoCustomerDetailType::setSalutation()
     * @uses MidocoCustomerDetailType::setTitle()
     * @uses MidocoCustomerDetailType::setFirstName()
     * @uses MidocoCustomerDetailType::setLastName()
     * @uses MidocoCustomerDetailType::setBirthday()
     * @uses MidocoCustomerDetailType::setPhonePrivate()
     * @uses MidocoCustomerDetailType::setPhoneWork()
     * @uses MidocoCustomerDetailType::setPhoneMobile()
     * @uses MidocoCustomerDetailType::setStreet()
     * @uses MidocoCustomerDetailType::setStreetNo()
     * @uses MidocoCustomerDetailType::setZip()
     * @uses MidocoCustomerDetailType::setCity()
     * @uses MidocoCustomerDetailType::setCountry()
     * @uses MidocoCustomerDetailType::setEmail()
     * @param int $customerId
     * @param string $salutation
     * @param string $title
     * @param string $firstName
     * @param string $lastName
     * @param string $birthday
     * @param string $phonePrivate
     * @param string $phoneWork
     * @param string $phoneMobile
     * @param string $street
     * @param string $streetNo
     * @param string $zip
     * @param string $city
     * @param string $country
     * @param string $email
     */
    public function __construct(?int $customerId = null, ?string $salutation = null, ?string $title = null, ?string $firstName = null, ?string $lastName = null, ?string $birthday = null, ?string $phonePrivate = null, ?string $phoneWork = null, ?string $phoneMobile = null, ?string $street = null, ?string $streetNo = null, ?string $zip = null, ?string $city = null, ?string $country = null, ?string $email = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setSalutation($salutation)
            ->setTitle($title)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setBirthday($birthday)
            ->setPhonePrivate($phonePrivate)
            ->setPhoneWork($phoneWork)
            ->setPhoneMobile($phoneMobile)
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setZip($zip)
            ->setCity($city)
            ->setCountry($country)
            ->setEmail($email);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get salutation value
     * @return string|null
     */
    public function getSalutation(): ?string
    {
        return $this->salutation;
    }
    /**
     * Set salutation value
     * @param string $salutation
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType
     */
    public function setSalutation(?string $salutation = null): self
    {
        // validation for constraint: string
        if (!is_null($salutation) && !is_string($salutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutation, true), gettype($salutation)), __LINE__);
        }
        $this->salutation = $salutation;
        
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        
        return $this;
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        
        return $this;
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;
        
        return $this;
    }
    /**
     * Get birthday value
     * @return string|null
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }
    /**
     * Set birthday value
     * @param string $birthday
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType
     */
    public function setBirthday(?string $birthday = null): self
    {
        // validation for constraint: string
        if (!is_null($birthday) && !is_string($birthday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthday, true), gettype($birthday)), __LINE__);
        }
        $this->birthday = $birthday;
        
        return $this;
    }
    /**
     * Get phonePrivate value
     * @return string|null
     */
    public function getPhonePrivate(): ?string
    {
        return $this->phonePrivate;
    }
    /**
     * Set phonePrivate value
     * @param string $phonePrivate
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType
     */
    public function setPhonePrivate(?string $phonePrivate = null): self
    {
        // validation for constraint: string
        if (!is_null($phonePrivate) && !is_string($phonePrivate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phonePrivate, true), gettype($phonePrivate)), __LINE__);
        }
        $this->phonePrivate = $phonePrivate;
        
        return $this;
    }
    /**
     * Get phoneWork value
     * @return string|null
     */
    public function getPhoneWork(): ?string
    {
        return $this->phoneWork;
    }
    /**
     * Set phoneWork value
     * @param string $phoneWork
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType
     */
    public function setPhoneWork(?string $phoneWork = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneWork) && !is_string($phoneWork)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneWork, true), gettype($phoneWork)), __LINE__);
        }
        $this->phoneWork = $phoneWork;
        
        return $this;
    }
    /**
     * Get phoneMobile value
     * @return string|null
     */
    public function getPhoneMobile(): ?string
    {
        return $this->phoneMobile;
    }
    /**
     * Set phoneMobile value
     * @param string $phoneMobile
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType
     */
    public function setPhoneMobile(?string $phoneMobile = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneMobile) && !is_string($phoneMobile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneMobile, true), gettype($phoneMobile)), __LINE__);
        }
        $this->phoneMobile = $phoneMobile;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType
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
     * Get zip value
     * @return string|null
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }
    /**
     * Set zip value
     * @param string $zip
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType
     */
    public function setZip(?string $zip = null): self
    {
        // validation for constraint: string
        if (!is_null($zip) && !is_string($zip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zip, true), gettype($zip)), __LINE__);
        }
        $this->zip = $zip;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType
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
