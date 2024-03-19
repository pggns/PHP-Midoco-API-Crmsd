<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateCustomerMailingProhibitedRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateCustomerMailingProhibitedRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The mailingProhibited
     * @var bool|null
     */
    protected ?bool $mailingProhibited = null;
    /**
     * The saveHistory
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $saveHistory = null;
    /**
     * The mailingStatus
     * @var string|null
     */
    protected ?string $mailingStatus = null;
    /**
     * The mailingModifyUser
     * @var int|null
     */
    protected ?int $mailingModifyUser = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for UpdateCustomerMailingProhibitedRequest
     * @uses UpdateCustomerMailingProhibitedRequest::setCustomerId()
     * @uses UpdateCustomerMailingProhibitedRequest::setMailingProhibited()
     * @uses UpdateCustomerMailingProhibitedRequest::setSaveHistory()
     * @uses UpdateCustomerMailingProhibitedRequest::setMailingStatus()
     * @uses UpdateCustomerMailingProhibitedRequest::setMailingModifyUser()
     * @uses UpdateCustomerMailingProhibitedRequest::setInternalVersion()
     * @param int $customerId
     * @param bool $mailingProhibited
     * @param bool $saveHistory
     * @param string $mailingStatus
     * @param int $mailingModifyUser
     * @param int $internalVersion
     */
    public function __construct(?int $customerId = null, ?bool $mailingProhibited = null, ?bool $saveHistory = true, ?string $mailingStatus = null, ?int $mailingModifyUser = null, ?int $internalVersion = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setMailingProhibited($mailingProhibited)
            ->setSaveHistory($saveHistory)
            ->setMailingStatus($mailingStatus)
            ->setMailingModifyUser($mailingModifyUser)
            ->setInternalVersion($internalVersion);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\UpdateCustomerMailingProhibitedRequest
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
     * Get mailingProhibited value
     * @return bool|null
     */
    public function getMailingProhibited(): ?bool
    {
        return $this->mailingProhibited;
    }
    /**
     * Set mailingProhibited value
     * @param bool $mailingProhibited
     * @return \Pggns\MidocoApi\Crmsd\StructType\UpdateCustomerMailingProhibitedRequest
     */
    public function setMailingProhibited(?bool $mailingProhibited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mailingProhibited) && !is_bool($mailingProhibited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailingProhibited, true), gettype($mailingProhibited)), __LINE__);
        }
        $this->mailingProhibited = $mailingProhibited;
        
        return $this;
    }
    /**
     * Get saveHistory value
     * @return bool|null
     */
    public function getSaveHistory(): ?bool
    {
        return $this->saveHistory;
    }
    /**
     * Set saveHistory value
     * @param bool $saveHistory
     * @return \Pggns\MidocoApi\Crmsd\StructType\UpdateCustomerMailingProhibitedRequest
     */
    public function setSaveHistory(?bool $saveHistory = true): self
    {
        // validation for constraint: boolean
        if (!is_null($saveHistory) && !is_bool($saveHistory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($saveHistory, true), gettype($saveHistory)), __LINE__);
        }
        $this->saveHistory = $saveHistory;
        
        return $this;
    }
    /**
     * Get mailingStatus value
     * @return string|null
     */
    public function getMailingStatus(): ?string
    {
        return $this->mailingStatus;
    }
    /**
     * Set mailingStatus value
     * @param string $mailingStatus
     * @return \Pggns\MidocoApi\Crmsd\StructType\UpdateCustomerMailingProhibitedRequest
     */
    public function setMailingStatus(?string $mailingStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($mailingStatus) && !is_string($mailingStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailingStatus, true), gettype($mailingStatus)), __LINE__);
        }
        $this->mailingStatus = $mailingStatus;
        
        return $this;
    }
    /**
     * Get mailingModifyUser value
     * @return int|null
     */
    public function getMailingModifyUser(): ?int
    {
        return $this->mailingModifyUser;
    }
    /**
     * Set mailingModifyUser value
     * @param int $mailingModifyUser
     * @return \Pggns\MidocoApi\Crmsd\StructType\UpdateCustomerMailingProhibitedRequest
     */
    public function setMailingModifyUser(?int $mailingModifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($mailingModifyUser) && !(is_int($mailingModifyUser) || ctype_digit($mailingModifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mailingModifyUser, true), gettype($mailingModifyUser)), __LINE__);
        }
        $this->mailingModifyUser = $mailingModifyUser;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\UpdateCustomerMailingProhibitedRequest
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
