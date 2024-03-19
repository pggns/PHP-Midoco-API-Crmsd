<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravisImportRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TravisImportRequest extends AbstractStructBase
{
    /**
     * The customers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customers = null;
    /**
     * The contacts
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $contacts = null;
    /**
     * The attributes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $attributes = null;
    /**
     * The bookings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookings = null;
    /**
     * The travellers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travellers = null;
    /**
     * The customersFile
     * @var string|null
     */
    protected ?string $customersFile = null;
    /**
     * The contactsFile
     * @var string|null
     */
    protected ?string $contactsFile = null;
    /**
     * The attributesFile
     * @var string|null
     */
    protected ?string $attributesFile = null;
    /**
     * The bookingsFile
     * @var string|null
     */
    protected ?string $bookingsFile = null;
    /**
     * The travellersFile
     * @var string|null
     */
    protected ?string $travellersFile = null;
    /**
     * Constructor method for TravisImportRequest
     * @uses TravisImportRequest::setCustomers()
     * @uses TravisImportRequest::setContacts()
     * @uses TravisImportRequest::setAttributes()
     * @uses TravisImportRequest::setBookings()
     * @uses TravisImportRequest::setTravellers()
     * @uses TravisImportRequest::setCustomersFile()
     * @uses TravisImportRequest::setContactsFile()
     * @uses TravisImportRequest::setAttributesFile()
     * @uses TravisImportRequest::setBookingsFile()
     * @uses TravisImportRequest::setTravellersFile()
     * @param string $customers
     * @param string $contacts
     * @param string $attributes
     * @param string $bookings
     * @param string $travellers
     * @param string $customersFile
     * @param string $contactsFile
     * @param string $attributesFile
     * @param string $bookingsFile
     * @param string $travellersFile
     */
    public function __construct(?string $customers = null, ?string $contacts = null, ?string $attributes = null, ?string $bookings = null, ?string $travellers = null, ?string $customersFile = null, ?string $contactsFile = null, ?string $attributesFile = null, ?string $bookingsFile = null, ?string $travellersFile = null)
    {
        $this
            ->setCustomers($customers)
            ->setContacts($contacts)
            ->setAttributes($attributes)
            ->setBookings($bookings)
            ->setTravellers($travellers)
            ->setCustomersFile($customersFile)
            ->setContactsFile($contactsFile)
            ->setAttributesFile($attributesFile)
            ->setBookingsFile($bookingsFile)
            ->setTravellersFile($travellersFile);
    }
    /**
     * Get customers value
     * @return string|null
     */
    public function getCustomers(): ?string
    {
        return $this->customers;
    }
    /**
     * Set customers value
     * @param string $customers
     * @return \Pggns\MidocoApi\Crmsd\StructType\TravisImportRequest
     */
    public function setCustomers(?string $customers = null): self
    {
        // validation for constraint: string
        if (!is_null($customers) && !is_string($customers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customers, true), gettype($customers)), __LINE__);
        }
        $this->customers = $customers;
        
        return $this;
    }
    /**
     * Get contacts value
     * @return string|null
     */
    public function getContacts(): ?string
    {
        return $this->contacts;
    }
    /**
     * Set contacts value
     * @param string $contacts
     * @return \Pggns\MidocoApi\Crmsd\StructType\TravisImportRequest
     */
    public function setContacts(?string $contacts = null): self
    {
        // validation for constraint: string
        if (!is_null($contacts) && !is_string($contacts)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contacts, true), gettype($contacts)), __LINE__);
        }
        $this->contacts = $contacts;
        
        return $this;
    }
    /**
     * Get attributes value
     * @return string|null
     */
    public function getAttributes(): ?string
    {
        return $this->attributes;
    }
    /**
     * Set attributes value
     * @param string $attributes
     * @return \Pggns\MidocoApi\Crmsd\StructType\TravisImportRequest
     */
    public function setAttributes(?string $attributes = null): self
    {
        // validation for constraint: string
        if (!is_null($attributes) && !is_string($attributes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributes, true), gettype($attributes)), __LINE__);
        }
        $this->attributes = $attributes;
        
        return $this;
    }
    /**
     * Get bookings value
     * @return string|null
     */
    public function getBookings(): ?string
    {
        return $this->bookings;
    }
    /**
     * Set bookings value
     * @param string $bookings
     * @return \Pggns\MidocoApi\Crmsd\StructType\TravisImportRequest
     */
    public function setBookings(?string $bookings = null): self
    {
        // validation for constraint: string
        if (!is_null($bookings) && !is_string($bookings)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookings, true), gettype($bookings)), __LINE__);
        }
        $this->bookings = $bookings;
        
        return $this;
    }
    /**
     * Get travellers value
     * @return string|null
     */
    public function getTravellers(): ?string
    {
        return $this->travellers;
    }
    /**
     * Set travellers value
     * @param string $travellers
     * @return \Pggns\MidocoApi\Crmsd\StructType\TravisImportRequest
     */
    public function setTravellers(?string $travellers = null): self
    {
        // validation for constraint: string
        if (!is_null($travellers) && !is_string($travellers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellers, true), gettype($travellers)), __LINE__);
        }
        $this->travellers = $travellers;
        
        return $this;
    }
    /**
     * Get customersFile value
     * @return string|null
     */
    public function getCustomersFile(): ?string
    {
        return $this->customersFile;
    }
    /**
     * Set customersFile value
     * @param string $customersFile
     * @return \Pggns\MidocoApi\Crmsd\StructType\TravisImportRequest
     */
    public function setCustomersFile(?string $customersFile = null): self
    {
        // validation for constraint: string
        if (!is_null($customersFile) && !is_string($customersFile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customersFile, true), gettype($customersFile)), __LINE__);
        }
        $this->customersFile = $customersFile;
        
        return $this;
    }
    /**
     * Get contactsFile value
     * @return string|null
     */
    public function getContactsFile(): ?string
    {
        return $this->contactsFile;
    }
    /**
     * Set contactsFile value
     * @param string $contactsFile
     * @return \Pggns\MidocoApi\Crmsd\StructType\TravisImportRequest
     */
    public function setContactsFile(?string $contactsFile = null): self
    {
        // validation for constraint: string
        if (!is_null($contactsFile) && !is_string($contactsFile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactsFile, true), gettype($contactsFile)), __LINE__);
        }
        $this->contactsFile = $contactsFile;
        
        return $this;
    }
    /**
     * Get attributesFile value
     * @return string|null
     */
    public function getAttributesFile(): ?string
    {
        return $this->attributesFile;
    }
    /**
     * Set attributesFile value
     * @param string $attributesFile
     * @return \Pggns\MidocoApi\Crmsd\StructType\TravisImportRequest
     */
    public function setAttributesFile(?string $attributesFile = null): self
    {
        // validation for constraint: string
        if (!is_null($attributesFile) && !is_string($attributesFile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributesFile, true), gettype($attributesFile)), __LINE__);
        }
        $this->attributesFile = $attributesFile;
        
        return $this;
    }
    /**
     * Get bookingsFile value
     * @return string|null
     */
    public function getBookingsFile(): ?string
    {
        return $this->bookingsFile;
    }
    /**
     * Set bookingsFile value
     * @param string $bookingsFile
     * @return \Pggns\MidocoApi\Crmsd\StructType\TravisImportRequest
     */
    public function setBookingsFile(?string $bookingsFile = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingsFile) && !is_string($bookingsFile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingsFile, true), gettype($bookingsFile)), __LINE__);
        }
        $this->bookingsFile = $bookingsFile;
        
        return $this;
    }
    /**
     * Get travellersFile value
     * @return string|null
     */
    public function getTravellersFile(): ?string
    {
        return $this->travellersFile;
    }
    /**
     * Set travellersFile value
     * @param string $travellersFile
     * @return \Pggns\MidocoApi\Crmsd\StructType\TravisImportRequest
     */
    public function setTravellersFile(?string $travellersFile = null): self
    {
        // validation for constraint: string
        if (!is_null($travellersFile) && !is_string($travellersFile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellersFile, true), gettype($travellersFile)), __LINE__);
        }
        $this->travellersFile = $travellersFile;
        
        return $this;
    }
}
