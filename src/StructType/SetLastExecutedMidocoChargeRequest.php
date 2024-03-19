<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetLastExecutedMidocoChargeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetLastExecutedMidocoChargeRequest extends AbstractStructBase
{
    /**
     * The lastExecDate
     * @var string|null
     */
    protected ?string $lastExecDate = null;
    /**
     * The lastExecUser
     * @var int|null
     */
    protected ?int $lastExecUser = null;
    /**
     * The crmChargeId
     * @var int|null
     */
    protected ?int $crmChargeId = null;
    /**
     * Constructor method for SetLastExecutedMidocoChargeRequest
     * @uses SetLastExecutedMidocoChargeRequest::setLastExecDate()
     * @uses SetLastExecutedMidocoChargeRequest::setLastExecUser()
     * @uses SetLastExecutedMidocoChargeRequest::setCrmChargeId()
     * @param string $lastExecDate
     * @param int $lastExecUser
     * @param int $crmChargeId
     */
    public function __construct(?string $lastExecDate = null, ?int $lastExecUser = null, ?int $crmChargeId = null)
    {
        $this
            ->setLastExecDate($lastExecDate)
            ->setLastExecUser($lastExecUser)
            ->setCrmChargeId($crmChargeId);
    }
    /**
     * Get lastExecDate value
     * @return string|null
     */
    public function getLastExecDate(): ?string
    {
        return $this->lastExecDate;
    }
    /**
     * Set lastExecDate value
     * @param string $lastExecDate
     * @return \Pggns\MidocoApi\Crmsd\StructType\SetLastExecutedMidocoChargeRequest
     */
    public function setLastExecDate(?string $lastExecDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastExecDate) && !is_string($lastExecDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastExecDate, true), gettype($lastExecDate)), __LINE__);
        }
        $this->lastExecDate = $lastExecDate;
        
        return $this;
    }
    /**
     * Get lastExecUser value
     * @return int|null
     */
    public function getLastExecUser(): ?int
    {
        return $this->lastExecUser;
    }
    /**
     * Set lastExecUser value
     * @param int $lastExecUser
     * @return \Pggns\MidocoApi\Crmsd\StructType\SetLastExecutedMidocoChargeRequest
     */
    public function setLastExecUser(?int $lastExecUser = null): self
    {
        // validation for constraint: int
        if (!is_null($lastExecUser) && !(is_int($lastExecUser) || ctype_digit($lastExecUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastExecUser, true), gettype($lastExecUser)), __LINE__);
        }
        $this->lastExecUser = $lastExecUser;
        
        return $this;
    }
    /**
     * Get crmChargeId value
     * @return int|null
     */
    public function getCrmChargeId(): ?int
    {
        return $this->crmChargeId;
    }
    /**
     * Set crmChargeId value
     * @param int $crmChargeId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SetLastExecutedMidocoChargeRequest
     */
    public function setCrmChargeId(?int $crmChargeId = null): self
    {
        // validation for constraint: int
        if (!is_null($crmChargeId) && !(is_int($crmChargeId) || ctype_digit($crmChargeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($crmChargeId, true), gettype($crmChargeId)), __LINE__);
        }
        $this->crmChargeId = $crmChargeId;
        
        return $this;
    }
}
