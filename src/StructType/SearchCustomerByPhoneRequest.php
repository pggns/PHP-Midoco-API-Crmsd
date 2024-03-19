<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCustomerByPhoneRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCustomerByPhoneRequest extends AbstractStructBase
{
    /**
     * The phoneNo
     * @var string|null
     */
    protected ?string $phoneNo = null;
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
     * The contactId
     * @var int|null
     */
    protected ?int $contactId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The maxReturned
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * Constructor method for SearchCustomerByPhoneRequest
     * @uses SearchCustomerByPhoneRequest::setPhoneNo()
     * @uses SearchCustomerByPhoneRequest::setName()
     * @uses SearchCustomerByPhoneRequest::setForename()
     * @uses SearchCustomerByPhoneRequest::setContactId()
     * @uses SearchCustomerByPhoneRequest::setUnitName()
     * @uses SearchCustomerByPhoneRequest::setMaxReturned()
     * @param string $phoneNo
     * @param string $name
     * @param string $forename
     * @param int $contactId
     * @param string $unitName
     * @param int $maxReturned
     */
    public function __construct(?string $phoneNo = null, ?string $name = null, ?string $forename = null, ?int $contactId = null, ?string $unitName = null, ?int $maxReturned = null)
    {
        $this
            ->setPhoneNo($phoneNo)
            ->setName($name)
            ->setForename($forename)
            ->setContactId($contactId)
            ->setUnitName($unitName)
            ->setMaxReturned($maxReturned);
    }
    /**
     * Get phoneNo value
     * @return string|null
     */
    public function getPhoneNo(): ?string
    {
        return $this->phoneNo;
    }
    /**
     * Set phoneNo value
     * @param string $phoneNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByPhoneRequest
     */
    public function setPhoneNo(?string $phoneNo = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneNo) && !is_string($phoneNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNo, true), gettype($phoneNo)), __LINE__);
        }
        $this->phoneNo = $phoneNo;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByPhoneRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByPhoneRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByPhoneRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByPhoneRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCustomerByPhoneRequest
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
