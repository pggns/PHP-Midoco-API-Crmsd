<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportCRMCsvRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ImportCRMCsvRequest extends AbstractStructBase
{
    /**
     * The MidocoCRMImportDTOs
     * Meta information extracted from the WSDL
     * - ref: MidocoCRMImportDTOs
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs $MidocoCRMImportDTOs = null;
    /**
     * The toSave
     * @var bool|null
     */
    protected ?bool $toSave = null;
    /**
     * The dateFormat
     * @var string|null
     */
    protected ?string $dateFormat = null;
    /**
     * The decimalSeparator
     * @var string|null
     */
    protected ?string $decimalSeparator = null;
    /**
     * Constructor method for ImportCRMCsvRequest
     * @uses ImportCRMCsvRequest::setMidocoCRMImportDTOs()
     * @uses ImportCRMCsvRequest::setToSave()
     * @uses ImportCRMCsvRequest::setDateFormat()
     * @uses ImportCRMCsvRequest::setDecimalSeparator()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs $midocoCRMImportDTOs
     * @param bool $toSave
     * @param string $dateFormat
     * @param string $decimalSeparator
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs $midocoCRMImportDTOs = null, ?bool $toSave = null, ?string $dateFormat = null, ?string $decimalSeparator = null)
    {
        $this
            ->setMidocoCRMImportDTOs($midocoCRMImportDTOs)
            ->setToSave($toSave)
            ->setDateFormat($dateFormat)
            ->setDecimalSeparator($decimalSeparator);
    }
    /**
     * Get MidocoCRMImportDTOs value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs|null
     */
    public function getMidocoCRMImportDTOs(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
    {
        return $this->MidocoCRMImportDTOs;
    }
    /**
     * Set MidocoCRMImportDTOs value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs $midocoCRMImportDTOs
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportCRMCsvRequest
     */
    public function setMidocoCRMImportDTOs(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs $midocoCRMImportDTOs = null): self
    {
        $this->MidocoCRMImportDTOs = $midocoCRMImportDTOs;
        
        return $this;
    }
    /**
     * Get toSave value
     * @return bool|null
     */
    public function getToSave(): ?bool
    {
        return $this->toSave;
    }
    /**
     * Set toSave value
     * @param bool $toSave
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportCRMCsvRequest
     */
    public function setToSave(?bool $toSave = null): self
    {
        // validation for constraint: boolean
        if (!is_null($toSave) && !is_bool($toSave)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($toSave, true), gettype($toSave)), __LINE__);
        }
        $this->toSave = $toSave;
        
        return $this;
    }
    /**
     * Get dateFormat value
     * @return string|null
     */
    public function getDateFormat(): ?string
    {
        return $this->dateFormat;
    }
    /**
     * Set dateFormat value
     * @param string $dateFormat
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportCRMCsvRequest
     */
    public function setDateFormat(?string $dateFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($dateFormat) && !is_string($dateFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFormat, true), gettype($dateFormat)), __LINE__);
        }
        $this->dateFormat = $dateFormat;
        
        return $this;
    }
    /**
     * Get decimalSeparator value
     * @return string|null
     */
    public function getDecimalSeparator(): ?string
    {
        return $this->decimalSeparator;
    }
    /**
     * Set decimalSeparator value
     * @param string $decimalSeparator
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportCRMCsvRequest
     */
    public function setDecimalSeparator(?string $decimalSeparator = null): self
    {
        // validation for constraint: string
        if (!is_null($decimalSeparator) && !is_string($decimalSeparator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($decimalSeparator, true), gettype($decimalSeparator)), __LINE__);
        }
        $this->decimalSeparator = $decimalSeparator;
        
        return $this;
    }
}
