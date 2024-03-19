<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintSupplierReportForMediatorRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintSupplierReportForMediatorRequest extends AbstractStructBase
{
    /**
     * The MidocoMediatorRevenue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMediatorRevenue
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorRevenue[]
     */
    protected ?array $MidocoMediatorRevenue = null;
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The deliveryType
     * @var string|null
     */
    protected ?string $deliveryType = null;
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
     * Constructor method for PrintSupplierReportForMediatorRequest
     * @uses PrintSupplierReportForMediatorRequest::setMidocoMediatorRevenue()
     * @uses PrintSupplierReportForMediatorRequest::setMidocoMailMessage()
     * @uses PrintSupplierReportForMediatorRequest::setMediatorId()
     * @uses PrintSupplierReportForMediatorRequest::setDeliveryType()
     * @uses PrintSupplierReportForMediatorRequest::setMonth()
     * @uses PrintSupplierReportForMediatorRequest::setYear()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorRevenue[] $midocoMediatorRevenue
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $midocoMailMessage
     * @param string $mediatorId
     * @param string $deliveryType
     * @param int $month
     * @param int $year
     */
    public function __construct(?array $midocoMediatorRevenue = null, ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $midocoMailMessage = null, ?string $mediatorId = null, ?string $deliveryType = null, ?int $month = null, ?int $year = null)
    {
        $this
            ->setMidocoMediatorRevenue($midocoMediatorRevenue)
            ->setMidocoMailMessage($midocoMailMessage)
            ->setMediatorId($mediatorId)
            ->setDeliveryType($deliveryType)
            ->setMonth($month)
            ->setYear($year);
    }
    /**
     * Get MidocoMediatorRevenue value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorRevenue[]
     */
    public function getMidocoMediatorRevenue(): ?array
    {
        return $this->MidocoMediatorRevenue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMediatorRevenue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMediatorRevenue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMediatorRevenueForArrayConstraintFromSetMidocoMediatorRevenue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $printSupplierReportForMediatorRequestMidocoMediatorRevenueItem) {
            // validation for constraint: itemType
            if (!$printSupplierReportForMediatorRequestMidocoMediatorRevenueItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorRevenue) {
                $invalidValues[] = is_object($printSupplierReportForMediatorRequestMidocoMediatorRevenueItem) ? get_class($printSupplierReportForMediatorRequestMidocoMediatorRevenueItem) : sprintf('%s(%s)', gettype($printSupplierReportForMediatorRequestMidocoMediatorRevenueItem), var_export($printSupplierReportForMediatorRequestMidocoMediatorRevenueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMediatorRevenue property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorRevenue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMediatorRevenue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorRevenue[] $midocoMediatorRevenue
     * @return \Pggns\MidocoApi\Crmsd\StructType\PrintSupplierReportForMediatorRequest
     */
    public function setMidocoMediatorRevenue(?array $midocoMediatorRevenue = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMediatorRevenueArrayErrorMessage = self::validateMidocoMediatorRevenueForArrayConstraintFromSetMidocoMediatorRevenue($midocoMediatorRevenue))) {
            throw new InvalidArgumentException($midocoMediatorRevenueArrayErrorMessage, __LINE__);
        }
        $this->MidocoMediatorRevenue = $midocoMediatorRevenue;
        
        return $this;
    }
    /**
     * Add item to MidocoMediatorRevenue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorRevenue $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\PrintSupplierReportForMediatorRequest
     */
    public function addToMidocoMediatorRevenue(\Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorRevenue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorRevenue) {
            throw new InvalidArgumentException(sprintf('The MidocoMediatorRevenue property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorRevenue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMediatorRevenue[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\Crmsd\StructType\PrintSupplierReportForMediatorRequest
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\PrintSupplierReportForMediatorRequest
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
     * Get deliveryType value
     * @return string|null
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }
    /**
     * Set deliveryType value
     * @param string $deliveryType
     * @return \Pggns\MidocoApi\Crmsd\StructType\PrintSupplierReportForMediatorRequest
     */
    public function setDeliveryType(?string $deliveryType = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryType) && !is_string($deliveryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryType, true), gettype($deliveryType)), __LINE__);
        }
        $this->deliveryType = $deliveryType;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\PrintSupplierReportForMediatorRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\PrintSupplierReportForMediatorRequest
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
