<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierReportForMediatorRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierReportForMediatorRequest extends AbstractStructBase
{
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The mediatorTypeId
     * @var string|null
     */
    protected ?string $mediatorTypeId = null;
    /**
     * The month
     * @var int|null
     */
    protected ?int $month = null;
    /**
     * The year
     * @var int|null
     */
    protected ?int $year = null;
    /**
     * Constructor method for GetSupplierReportForMediatorRequest
     * @uses GetSupplierReportForMediatorRequest::setMediatorId()
     * @uses GetSupplierReportForMediatorRequest::setMediatorTypeId()
     * @uses GetSupplierReportForMediatorRequest::setMonth()
     * @uses GetSupplierReportForMediatorRequest::setYear()
     * @param string $mediatorId
     * @param string $mediatorTypeId
     * @param int $month
     * @param int $year
     */
    public function __construct(?string $mediatorId = null, ?string $mediatorTypeId = null, ?int $month = null, ?int $year = null)
    {
        $this
            ->setMediatorId($mediatorId)
            ->setMediatorTypeId($mediatorTypeId)
            ->setMonth($month)
            ->setYear($year);
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetSupplierReportForMediatorRequest
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get mediatorTypeId value
     * @return string|null
     */
    public function getMediatorTypeId(): ?string
    {
        return $this->mediatorTypeId;
    }
    /**
     * Set mediatorTypeId value
     * @param string $mediatorTypeId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetSupplierReportForMediatorRequest
     */
    public function setMediatorTypeId(?string $mediatorTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorTypeId) && !is_string($mediatorTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorTypeId, true), gettype($mediatorTypeId)), __LINE__);
        }
        $this->mediatorTypeId = $mediatorTypeId;
        
        return $this;
    }
    /**
     * Get month value
     * @return int|null
     */
    public function getMonth(): ?int
    {
        return $this->month;
    }
    /**
     * Set month value
     * @param int $month
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetSupplierReportForMediatorRequest
     */
    public function setMonth(?int $month = null): self
    {
        // validation for constraint: int
        if (!is_null($month) && !(is_int($month) || ctype_digit($month))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($month, true), gettype($month)), __LINE__);
        }
        $this->month = $month;
        
        return $this;
    }
    /**
     * Get year value
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param int $year
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetSupplierReportForMediatorRequest
     */
    public function setYear(?int $year = null): self
    {
        // validation for constraint: int
        if (!is_null($year) && !(is_int($year) || ctype_digit($year))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->year = $year;
        
        return $this;
    }
}
