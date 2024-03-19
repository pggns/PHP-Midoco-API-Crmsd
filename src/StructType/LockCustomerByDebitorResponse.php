<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LockCustomerByDebitorResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LockCustomerByDebitorResponse extends AbstractStructBase
{
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
     * Constructor method for LockCustomerByDebitorResponse
     * @uses LockCustomerByDebitorResponse::setLocked()
     * @uses LockCustomerByDebitorResponse::setLockReason()
     * @param bool $locked
     * @param string $lockReason
     */
    public function __construct(?bool $locked = null, ?string $lockReason = null)
    {
        $this
            ->setLocked($locked)
            ->setLockReason($lockReason);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\LockCustomerByDebitorResponse
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\LockCustomerByDebitorResponse
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
