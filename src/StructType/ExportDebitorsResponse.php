<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportDebitorsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportDebitorsResponse extends AbstractStructBase
{
    /**
     * The AccountData
     * @var string|null
     */
    protected ?string $AccountData = null;
    /**
     * The numberOfRows
     * @var int|null
     */
    protected ?int $numberOfRows = null;
    /**
     * Constructor method for ExportDebitorsResponse
     * @uses ExportDebitorsResponse::setAccountData()
     * @uses ExportDebitorsResponse::setNumberOfRows()
     * @param string $accountData
     * @param int $numberOfRows
     */
    public function __construct(?string $accountData = null, ?int $numberOfRows = null)
    {
        $this
            ->setAccountData($accountData)
            ->setNumberOfRows($numberOfRows);
    }
    /**
     * Get AccountData value
     * @return string|null
     */
    public function getAccountData(): ?string
    {
        return $this->AccountData;
    }
    /**
     * Set AccountData value
     * @param string $accountData
     * @return \Pggns\MidocoApi\Crmsd\StructType\ExportDebitorsResponse
     */
    public function setAccountData(?string $accountData = null): self
    {
        // validation for constraint: string
        if (!is_null($accountData) && !is_string($accountData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountData, true), gettype($accountData)), __LINE__);
        }
        $this->AccountData = $accountData;
        
        return $this;
    }
    /**
     * Get numberOfRows value
     * @return int|null
     */
    public function getNumberOfRows(): ?int
    {
        return $this->numberOfRows;
    }
    /**
     * Set numberOfRows value
     * @param int $numberOfRows
     * @return \Pggns\MidocoApi\Crmsd\StructType\ExportDebitorsResponse
     */
    public function setNumberOfRows(?int $numberOfRows = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfRows) && !(is_int($numberOfRows) || ctype_digit($numberOfRows))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfRows, true), gettype($numberOfRows)), __LINE__);
        }
        $this->numberOfRows = $numberOfRows;
        
        return $this;
    }
}
