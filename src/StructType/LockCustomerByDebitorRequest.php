<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LockCustomerByDebitorRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LockCustomerByDebitorRequest extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The locked
     * @var bool|null
     */
    protected ?bool $locked = null;
    /**
     * The lockReason
     * @var string|null
     */
    protected ?string $lockReason = null;
    /**
     * Constructor method for LockCustomerByDebitorRequest
     * @uses LockCustomerByDebitorRequest::setAgencyId()
     * @uses LockCustomerByDebitorRequest::setDebitorNo()
     * @uses LockCustomerByDebitorRequest::setLocked()
     * @uses LockCustomerByDebitorRequest::setLockReason()
     * @param string $agencyId
     * @param string $debitorNo
     * @param bool $locked
     * @param string $lockReason
     */
    public function __construct(?string $agencyId = null, ?string $debitorNo = null, ?bool $locked = null, ?string $lockReason = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setDebitorNo($debitorNo)
            ->setLocked($locked)
            ->setLockReason($lockReason);
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Crmsd\StructType\LockCustomerByDebitorRequest
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\LockCustomerByDebitorRequest
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get locked value
     * @return bool|null
     */
    public function getLocked(): ?bool
    {
        return $this->locked;
    }
    /**
     * Set locked value
     * @param bool $locked
     * @return \Pggns\MidocoApi\Crmsd\StructType\LockCustomerByDebitorRequest
     */
    public function setLocked(?bool $locked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($locked) && !is_bool($locked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($locked, true), gettype($locked)), __LINE__);
        }
        $this->locked = $locked;
        
        return $this;
    }
    /**
     * Get lockReason value
     * @return string|null
     */
    public function getLockReason(): ?string
    {
        return $this->lockReason;
    }
    /**
     * Set lockReason value
     * @param string $lockReason
     * @return \Pggns\MidocoApi\Crmsd\StructType\LockCustomerByDebitorRequest
     */
    public function setLockReason(?string $lockReason = null): self
    {
        // validation for constraint: string
        if (!is_null($lockReason) && !is_string($lockReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockReason, true), gettype($lockReason)), __LINE__);
        }
        $this->lockReason = $lockReason;
        
        return $this;
    }
}
