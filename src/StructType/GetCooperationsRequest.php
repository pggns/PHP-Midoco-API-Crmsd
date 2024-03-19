<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCooperationsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCooperationsRequest extends AbstractStructBase
{
    /**
     * The cooperationId
     * @var string|null
     */
    protected ?string $cooperationId = null;
    /**
     * The notLocked
     * @var bool|null
     */
    protected ?bool $notLocked = null;
    /**
     * The notDeleted
     * @var bool|null
     */
    protected ?bool $notDeleted = null;
    /**
     * Constructor method for GetCooperationsRequest
     * @uses GetCooperationsRequest::setCooperationId()
     * @uses GetCooperationsRequest::setNotLocked()
     * @uses GetCooperationsRequest::setNotDeleted()
     * @param string $cooperationId
     * @param bool $notLocked
     * @param bool $notDeleted
     */
    public function __construct(?string $cooperationId = null, ?bool $notLocked = null, ?bool $notDeleted = null)
    {
        $this
            ->setCooperationId($cooperationId)
            ->setNotLocked($notLocked)
            ->setNotDeleted($notDeleted);
    }
    /**
     * Get cooperationId value
     * @return string|null
     */
    public function getCooperationId(): ?string
    {
        return $this->cooperationId;
    }
    /**
     * Set cooperationId value
     * @param string $cooperationId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCooperationsRequest
     */
    public function setCooperationId(?string $cooperationId = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationId) && !is_string($cooperationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationId, true), gettype($cooperationId)), __LINE__);
        }
        $this->cooperationId = $cooperationId;
        
        return $this;
    }
    /**
     * Get notLocked value
     * @return bool|null
     */
    public function getNotLocked(): ?bool
    {
        return $this->notLocked;
    }
    /**
     * Set notLocked value
     * @param bool $notLocked
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCooperationsRequest
     */
    public function setNotLocked(?bool $notLocked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($notLocked) && !is_bool($notLocked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notLocked, true), gettype($notLocked)), __LINE__);
        }
        $this->notLocked = $notLocked;
        
        return $this;
    }
    /**
     * Get notDeleted value
     * @return bool|null
     */
    public function getNotDeleted(): ?bool
    {
        return $this->notDeleted;
    }
    /**
     * Set notDeleted value
     * @param bool $notDeleted
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCooperationsRequest
     */
    public function setNotDeleted(?bool $notDeleted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($notDeleted) && !is_bool($notDeleted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notDeleted, true), gettype($notDeleted)), __LINE__);
        }
        $this->notDeleted = $notDeleted;
        
        return $this;
    }
}
