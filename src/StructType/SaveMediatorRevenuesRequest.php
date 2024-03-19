<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMediatorRevenuesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMediatorRevenuesRequest extends AbstractStructBase
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
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The saveData
     * @var bool|null
     */
    protected ?bool $saveData = null;
    /**
     * Constructor method for SaveMediatorRevenuesRequest
     * @uses SaveMediatorRevenuesRequest::setMidocoMediatorRevenue()
     * @uses SaveMediatorRevenuesRequest::setSupplierId()
     * @uses SaveMediatorRevenuesRequest::setSaveData()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorRevenue[] $midocoMediatorRevenue
     * @param string $supplierId
     * @param bool $saveData
     */
    public function __construct(?array $midocoMediatorRevenue = null, ?string $supplierId = null, ?bool $saveData = null)
    {
        $this
            ->setMidocoMediatorRevenue($midocoMediatorRevenue)
            ->setSupplierId($supplierId)
            ->setSaveData($saveData);
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
        foreach ($values as $saveMediatorRevenuesRequestMidocoMediatorRevenueItem) {
            // validation for constraint: itemType
            if (!$saveMediatorRevenuesRequestMidocoMediatorRevenueItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorRevenue) {
                $invalidValues[] = is_object($saveMediatorRevenuesRequestMidocoMediatorRevenueItem) ? get_class($saveMediatorRevenuesRequestMidocoMediatorRevenueItem) : sprintf('%s(%s)', gettype($saveMediatorRevenuesRequestMidocoMediatorRevenueItem), var_export($saveMediatorRevenuesRequestMidocoMediatorRevenueItem, true));
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveMediatorRevenuesRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveMediatorRevenuesRequest
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
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveMediatorRevenuesRequest
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get saveData value
     * @return bool|null
     */
    public function getSaveData(): ?bool
    {
        return $this->saveData;
    }
    /**
     * Set saveData value
     * @param bool $saveData
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveMediatorRevenuesRequest
     */
    public function setSaveData(?bool $saveData = null): self
    {
        // validation for constraint: boolean
        if (!is_null($saveData) && !is_bool($saveData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($saveData, true), gettype($saveData)), __LINE__);
        }
        $this->saveData = $saveData;
        
        return $this;
    }
}
