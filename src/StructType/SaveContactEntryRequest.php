<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveContactEntryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveContactEntryRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The MidocoContactEntry
     * Meta information extracted from the WSDL
     * - ref: MidocoContactEntry
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType $MidocoContactEntry = null;
    /**
     * The isManually
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isManually = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveContactEntryRequest
     * @uses SaveContactEntryRequest::setMidocoCustomerId()
     * @uses SaveContactEntryRequest::setMidocoContactEntry()
     * @uses SaveContactEntryRequest::setIsManually()
     * @uses SaveContactEntryRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType $midocoContactEntry
     * @param bool $isManually
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null, ?\Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType $midocoContactEntry = null, ?bool $isManually = false, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setMidocoContactEntry($midocoContactEntry)
            ->setIsManually($isManually)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    public function getMidocoCustomerId(): ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveContactEntryRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get MidocoContactEntry value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType|null
     */
    public function getMidocoContactEntry(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType
    {
        return $this->MidocoContactEntry;
    }
    /**
     * Set MidocoContactEntry value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType $midocoContactEntry
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveContactEntryRequest
     */
    public function setMidocoContactEntry(?\Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType $midocoContactEntry = null): self
    {
        $this->MidocoContactEntry = $midocoContactEntry;
        
        return $this;
    }
    /**
     * Get isManually value
     * @return bool|null
     */
    public function getIsManually(): ?bool
    {
        return $this->isManually;
    }
    /**
     * Set isManually value
     * @param bool $isManually
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveContactEntryRequest
     */
    public function setIsManually(?bool $isManually = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isManually) && !is_bool($isManually)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManually, true), gettype($isManually)), __LINE__);
        }
        $this->isManually = $isManually;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveContactEntryRequest
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
