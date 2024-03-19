<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportDictionaryNamesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ImportDictionaryNamesRequest extends AbstractStructBase
{
    /**
     * The importData
     * @var string|null
     */
    protected ?string $importData = null;
    /**
     * The appendMode
     * @var bool|null
     */
    protected ?bool $appendMode = null;
    /**
     * The replaceMode
     * @var bool|null
     */
    protected ?bool $replaceMode = null;
    /**
     * Constructor method for ImportDictionaryNamesRequest
     * @uses ImportDictionaryNamesRequest::setImportData()
     * @uses ImportDictionaryNamesRequest::setAppendMode()
     * @uses ImportDictionaryNamesRequest::setReplaceMode()
     * @param string $importData
     * @param bool $appendMode
     * @param bool $replaceMode
     */
    public function __construct(?string $importData = null, ?bool $appendMode = null, ?bool $replaceMode = null)
    {
        $this
            ->setImportData($importData)
            ->setAppendMode($appendMode)
            ->setReplaceMode($replaceMode);
    }
    /**
     * Get importData value
     * @return string|null
     */
    public function getImportData(): ?string
    {
        return $this->importData;
    }
    /**
     * Set importData value
     * @param string $importData
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportDictionaryNamesRequest
     */
    public function setImportData(?string $importData = null): self
    {
        // validation for constraint: string
        if (!is_null($importData) && !is_string($importData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importData, true), gettype($importData)), __LINE__);
        }
        $this->importData = $importData;
        
        return $this;
    }
    /**
     * Get appendMode value
     * @return bool|null
     */
    public function getAppendMode(): ?bool
    {
        return $this->appendMode;
    }
    /**
     * Set appendMode value
     * @param bool $appendMode
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportDictionaryNamesRequest
     */
    public function setAppendMode(?bool $appendMode = null): self
    {
        // validation for constraint: boolean
        if (!is_null($appendMode) && !is_bool($appendMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($appendMode, true), gettype($appendMode)), __LINE__);
        }
        $this->appendMode = $appendMode;
        
        return $this;
    }
    /**
     * Get replaceMode value
     * @return bool|null
     */
    public function getReplaceMode(): ?bool
    {
        return $this->replaceMode;
    }
    /**
     * Set replaceMode value
     * @param bool $replaceMode
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportDictionaryNamesRequest
     */
    public function setReplaceMode(?bool $replaceMode = null): self
    {
        // validation for constraint: boolean
        if (!is_null($replaceMode) && !is_bool($replaceMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($replaceMode, true), gettype($replaceMode)), __LINE__);
        }
        $this->replaceMode = $replaceMode;
        
        return $this;
    }
}
