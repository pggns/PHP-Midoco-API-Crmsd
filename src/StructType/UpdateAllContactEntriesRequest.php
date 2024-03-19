<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateAllContactEntriesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateAllContactEntriesRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The useForMailing
     * @var bool|null
     */
    protected ?bool $useForMailing = null;
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
     * The mailingProhibitedAddresses
     * @var bool|null
     */
    protected ?bool $mailingProhibitedAddresses = null;
    /**
     * The consent
     * @var string|null
     */
    protected ?string $consent = null;
    /**
     * The saveHistory
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $saveHistory = null;
    /**
     * The consentTimestamp
     * @var string|null
     */
    protected ?string $consentTimestamp = null;
    /**
     * Constructor method for UpdateAllContactEntriesRequest
     * @uses UpdateAllContactEntriesRequest::setCustomerId()
     * @uses UpdateAllContactEntriesRequest::setUseForMailing()
     * @uses UpdateAllContactEntriesRequest::setMailingStatus()
     * @uses UpdateAllContactEntriesRequest::setMailingModifyUser()
     * @uses UpdateAllContactEntriesRequest::setInternalVersion()
     * @uses UpdateAllContactEntriesRequest::setMailingProhibitedAddresses()
     * @uses UpdateAllContactEntriesRequest::setConsent()
     * @uses UpdateAllContactEntriesRequest::setSaveHistory()
     * @uses UpdateAllContactEntriesRequest::setConsentTimestamp()
     * @param int $customerId
     * @param bool $useForMailing
     * @param string $mailingStatus
     * @param int $mailingModifyUser
     * @param int $internalVersion
     * @param bool $mailingProhibitedAddresses
     * @param string $consent
     * @param bool $saveHistory
     * @param string $consentTimestamp
     */
    public function __construct(?int $customerId = null, ?bool $useForMailing = null, ?string $mailingStatus = null, ?int $mailingModifyUser = null, ?int $internalVersion = null, ?bool $mailingProhibitedAddresses = null, ?string $consent = null, ?bool $saveHistory = true, ?string $consentTimestamp = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setUseForMailing($useForMailing)
            ->setMailingStatus($mailingStatus)
            ->setMailingModifyUser($mailingModifyUser)
            ->setInternalVersion($internalVersion)
            ->setMailingProhibitedAddresses($mailingProhibitedAddresses)
            ->setConsent($consent)
            ->setSaveHistory($saveHistory)
            ->setConsentTimestamp($consentTimestamp);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\UpdateAllContactEntriesRequest
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
     * Get useForMailing value
     * @return bool|null
     */
    public function getUseForMailing(): ?bool
    {
        return $this->useForMailing;
    }
    /**
     * Set useForMailing value
     * @param bool $useForMailing
     * @return \Pggns\MidocoApi\Crmsd\StructType\UpdateAllContactEntriesRequest
     */
    public function setUseForMailing(?bool $useForMailing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useForMailing) && !is_bool($useForMailing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useForMailing, true), gettype($useForMailing)), __LINE__);
        }
        $this->useForMailing = $useForMailing;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\UpdateAllContactEntriesRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\UpdateAllContactEntriesRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\UpdateAllContactEntriesRequest
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
    /**
     * Get mailingProhibitedAddresses value
     * @return bool|null
     */
    public function getMailingProhibitedAddresses(): ?bool
    {
        return $this->mailingProhibitedAddresses;
    }
    /**
     * Set mailingProhibitedAddresses value
     * @param bool $mailingProhibitedAddresses
     * @return \Pggns\MidocoApi\Crmsd\StructType\UpdateAllContactEntriesRequest
     */
    public function setMailingProhibitedAddresses(?bool $mailingProhibitedAddresses = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mailingProhibitedAddresses) && !is_bool($mailingProhibitedAddresses)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailingProhibitedAddresses, true), gettype($mailingProhibitedAddresses)), __LINE__);
        }
        $this->mailingProhibitedAddresses = $mailingProhibitedAddresses;
        
        return $this;
    }
    /**
     * Get consent value
     * @return string|null
     */
    public function getConsent(): ?string
    {
        return $this->consent;
    }
    /**
     * Set consent value
     * @param string $consent
     * @return \Pggns\MidocoApi\Crmsd\StructType\UpdateAllContactEntriesRequest
     */
    public function setConsent(?string $consent = null): self
    {
        // validation for constraint: string
        if (!is_null($consent) && !is_string($consent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consent, true), gettype($consent)), __LINE__);
        }
        $this->consent = $consent;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\UpdateAllContactEntriesRequest
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
     * Get consentTimestamp value
     * @return string|null
     */
    public function getConsentTimestamp(): ?string
    {
        return $this->consentTimestamp;
    }
    /**
     * Set consentTimestamp value
     * @param string $consentTimestamp
     * @return \Pggns\MidocoApi\Crmsd\StructType\UpdateAllContactEntriesRequest
     */
    public function setConsentTimestamp(?string $consentTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($consentTimestamp) && !is_string($consentTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consentTimestamp, true), gettype($consentTimestamp)), __LINE__);
        }
        $this->consentTimestamp = $consentTimestamp;
        
        return $this;
    }
}
