<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBlackListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchBlackListResponse extends AbstractStructBase
{
    /**
     * The isLocked
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $isLocked;
    /**
     * The matches
     * @var int|null
     */
    protected ?int $matches = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The midocoCustomerId
     * @var int|null
     */
    protected ?int $midocoCustomerId = null;
    /**
     * The lockReason
     * @var string|null
     */
    protected ?string $lockReason = null;
    /**
     * The lockDate
     * @var string|null
     */
    protected ?string $lockDate = null;
    /**
     * Constructor method for SearchBlackListResponse
     * @uses SearchBlackListResponse::setIsLocked()
     * @uses SearchBlackListResponse::setMatches()
     * @uses SearchBlackListResponse::setUnitName()
     * @uses SearchBlackListResponse::setMidocoCustomerId()
     * @uses SearchBlackListResponse::setLockReason()
     * @uses SearchBlackListResponse::setLockDate()
     * @param string $isLocked
     * @param int $matches
     * @param string $unitName
     * @param int $midocoCustomerId
     * @param string $lockReason
     * @param string $lockDate
     */
    public function __construct(string $isLocked, ?int $matches = null, ?string $unitName = null, ?int $midocoCustomerId = null, ?string $lockReason = null, ?string $lockDate = null)
    {
        $this
            ->setIsLocked($isLocked)
            ->setMatches($matches)
            ->setUnitName($unitName)
            ->setMidocoCustomerId($midocoCustomerId)
            ->setLockReason($lockReason)
            ->setLockDate($lockDate);
    }
    /**
     * Get isLocked value
     * @return string
     */
    public function getIsLocked(): string
    {
        return $this->isLocked;
    }
    /**
     * Set isLocked value
     * @param string $isLocked
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBlackListResponse
     */
    public function setIsLocked(string $isLocked): self
    {
        // validation for constraint: string
        if (!is_null($isLocked) && !is_string($isLocked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isLocked, true), gettype($isLocked)), __LINE__);
        }
        $this->isLocked = $isLocked;
        
        return $this;
    }
    /**
     * Get matches value
     * @return int|null
     */
    public function getMatches(): ?int
    {
        return $this->matches;
    }
    /**
     * Set matches value
     * @param int $matches
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBlackListResponse
     */
    public function setMatches(?int $matches = null): self
    {
        // validation for constraint: int
        if (!is_null($matches) && !(is_int($matches) || ctype_digit($matches))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($matches, true), gettype($matches)), __LINE__);
        }
        $this->matches = $matches;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBlackListResponse
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
     * Get midocoCustomerId value
     * @return int|null
     */
    public function getMidocoCustomerId(): ?int
    {
        return $this->midocoCustomerId;
    }
    /**
     * Set midocoCustomerId value
     * @param int $midocoCustomerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBlackListResponse
     */
    public function setMidocoCustomerId(?int $midocoCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoCustomerId) && !(is_int($midocoCustomerId) || ctype_digit($midocoCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoCustomerId, true), gettype($midocoCustomerId)), __LINE__);
        }
        $this->midocoCustomerId = $midocoCustomerId;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBlackListResponse
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
    /**
     * Get lockDate value
     * @return string|null
     */
    public function getLockDate(): ?string
    {
        return $this->lockDate;
    }
    /**
     * Set lockDate value
     * @param string $lockDate
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBlackListResponse
     */
    public function setLockDate(?string $lockDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lockDate) && !is_string($lockDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockDate, true), gettype($lockDate)), __LINE__);
        }
        $this->lockDate = $lockDate;
        
        return $this;
    }
}
