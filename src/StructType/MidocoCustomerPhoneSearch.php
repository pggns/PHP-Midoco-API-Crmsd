<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCustomerPhoneSearch StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCustomerPhoneSearch extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The contactId
     * @var int|null
     */
    protected ?int $contactId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The forname
     * @var string|null
     */
    protected ?string $forname = null;
    /**
     * The phoneNo
     * @var string|null
     */
    protected ?string $phoneNo = null;
    /**
     * The normaalizedPhoneNo
     * @var string|null
     */
    protected ?string $normaalizedPhoneNo = null;
    /**
     * Constructor method for MidocoCustomerPhoneSearch
     * @uses MidocoCustomerPhoneSearch::setCustomerId()
     * @uses MidocoCustomerPhoneSearch::setContactId()
     * @uses MidocoCustomerPhoneSearch::setName()
     * @uses MidocoCustomerPhoneSearch::setForname()
     * @uses MidocoCustomerPhoneSearch::setPhoneNo()
     * @uses MidocoCustomerPhoneSearch::setNormaalizedPhoneNo()
     * @param int $customerId
     * @param int $contactId
     * @param string $name
     * @param string $forname
     * @param string $phoneNo
     * @param string $normaalizedPhoneNo
     */
    public function __construct(?int $customerId = null, ?int $contactId = null, ?string $name = null, ?string $forname = null, ?string $phoneNo = null, ?string $normaalizedPhoneNo = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setContactId($contactId)
            ->setName($name)
            ->setForname($forname)
            ->setPhoneNo($phoneNo)
            ->setNormaalizedPhoneNo($normaalizedPhoneNo);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerPhoneSearch
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerPhoneSearch
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerPhoneSearch
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
     * Get forname value
     * @return string|null
     */
    public function getForname(): ?string
    {
        return $this->forname;
    }
    /**
     * Set forname value
     * @param string $forname
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerPhoneSearch
     */
    public function setForname(?string $forname = null): self
    {
        // validation for constraint: string
        if (!is_null($forname) && !is_string($forname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forname, true), gettype($forname)), __LINE__);
        }
        $this->forname = $forname;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerPhoneSearch
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
     * Get normaalizedPhoneNo value
     * @return string|null
     */
    public function getNormaalizedPhoneNo(): ?string
    {
        return $this->normaalizedPhoneNo;
    }
    /**
     * Set normaalizedPhoneNo value
     * @param string $normaalizedPhoneNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerPhoneSearch
     */
    public function setNormaalizedPhoneNo(?string $normaalizedPhoneNo = null): self
    {
        // validation for constraint: string
        if (!is_null($normaalizedPhoneNo) && !is_string($normaalizedPhoneNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($normaalizedPhoneNo, true), gettype($normaalizedPhoneNo)), __LINE__);
        }
        $this->normaalizedPhoneNo = $normaalizedPhoneNo;
        
        return $this;
    }
}
