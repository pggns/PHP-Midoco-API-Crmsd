<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetYearlyTurnoverResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetYearlyTurnoverResponse extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The MidocoYearlyTurnover
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoYearlyTurnover
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoYearlyTurnover[]
     */
    protected ?array $MidocoYearlyTurnover = null;
    /**
     * The lastTravelDate
     * @var string|null
     */
    protected ?string $lastTravelDate = null;
    /**
     * The lastSalesAmount
     * @var float|null
     */
    protected ?float $lastSalesAmount = null;
    /**
     * Constructor method for GetYearlyTurnoverResponse
     * @uses GetYearlyTurnoverResponse::setCustomerId()
     * @uses GetYearlyTurnoverResponse::setMidocoYearlyTurnover()
     * @uses GetYearlyTurnoverResponse::setLastTravelDate()
     * @uses GetYearlyTurnoverResponse::setLastSalesAmount()
     * @param int $customerId
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoYearlyTurnover[] $midocoYearlyTurnover
     * @param string $lastTravelDate
     * @param float $lastSalesAmount
     */
    public function __construct(?int $customerId = null, ?array $midocoYearlyTurnover = null, ?string $lastTravelDate = null, ?float $lastSalesAmount = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setMidocoYearlyTurnover($midocoYearlyTurnover)
            ->setLastTravelDate($lastTravelDate)
            ->setLastSalesAmount($lastSalesAmount);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetYearlyTurnoverResponse
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get MidocoYearlyTurnover value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoYearlyTurnover[]
     */
    public function getMidocoYearlyTurnover(): ?array
    {
        return $this->MidocoYearlyTurnover;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoYearlyTurnover method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoYearlyTurnover method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoYearlyTurnoverForArrayConstraintFromSetMidocoYearlyTurnover(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getYearlyTurnoverResponseMidocoYearlyTurnoverItem) {
            // validation for constraint: itemType
            if (!$getYearlyTurnoverResponseMidocoYearlyTurnoverItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoYearlyTurnover) {
                $invalidValues[] = is_object($getYearlyTurnoverResponseMidocoYearlyTurnoverItem) ? get_class($getYearlyTurnoverResponseMidocoYearlyTurnoverItem) : sprintf('%s(%s)', gettype($getYearlyTurnoverResponseMidocoYearlyTurnoverItem), var_export($getYearlyTurnoverResponseMidocoYearlyTurnoverItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoYearlyTurnover property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoYearlyTurnover, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoYearlyTurnover value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoYearlyTurnover[] $midocoYearlyTurnover
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetYearlyTurnoverResponse
     */
    public function setMidocoYearlyTurnover(?array $midocoYearlyTurnover = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoYearlyTurnoverArrayErrorMessage = self::validateMidocoYearlyTurnoverForArrayConstraintFromSetMidocoYearlyTurnover($midocoYearlyTurnover))) {
            throw new InvalidArgumentException($midocoYearlyTurnoverArrayErrorMessage, __LINE__);
        }
        $this->MidocoYearlyTurnover = $midocoYearlyTurnover;
        
        return $this;
    }
    /**
     * Add item to MidocoYearlyTurnover value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoYearlyTurnover $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetYearlyTurnoverResponse
     */
    public function addToMidocoYearlyTurnover(\Pggns\MidocoApi\Crmsd\StructType\MidocoYearlyTurnover $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoYearlyTurnover) {
            throw new InvalidArgumentException(sprintf('The MidocoYearlyTurnover property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoYearlyTurnover, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoYearlyTurnover[] = $item;
        
        return $this;
    }
    /**
     * Get lastTravelDate value
     * @return string|null
     */
    public function getLastTravelDate(): ?string
    {
        return $this->lastTravelDate;
    }
    /**
     * Set lastTravelDate value
     * @param string $lastTravelDate
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetYearlyTurnoverResponse
     */
    public function setLastTravelDate(?string $lastTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastTravelDate) && !is_string($lastTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastTravelDate, true), gettype($lastTravelDate)), __LINE__);
        }
        $this->lastTravelDate = $lastTravelDate;
        
        return $this;
    }
    /**
     * Get lastSalesAmount value
     * @return float|null
     */
    public function getLastSalesAmount(): ?float
    {
        return $this->lastSalesAmount;
    }
    /**
     * Set lastSalesAmount value
     * @param float $lastSalesAmount
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetYearlyTurnoverResponse
     */
    public function setLastSalesAmount(?float $lastSalesAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($lastSalesAmount) && !(is_float($lastSalesAmount) || is_numeric($lastSalesAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($lastSalesAmount, true), gettype($lastSalesAmount)), __LINE__);
        }
        $this->lastSalesAmount = $lastSalesAmount;
        
        return $this;
    }
}
