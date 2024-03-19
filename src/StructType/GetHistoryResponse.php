<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetHistoryResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getHistory --- returns the list of contact history for a given customer id
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetHistoryResponse extends AbstractStructBase
{
    /**
     * The MidocoContactHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactHistory
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory[]
     */
    protected ?array $MidocoContactHistory = null;
    /**
     * Constructor method for GetHistoryResponse
     * @uses GetHistoryResponse::setMidocoContactHistory()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory[] $midocoContactHistory
     */
    public function __construct(?array $midocoContactHistory = null)
    {
        $this
            ->setMidocoContactHistory($midocoContactHistory);
    }
    /**
     * Get MidocoContactHistory value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory[]
     */
    public function getMidocoContactHistory(): ?array
    {
        return $this->MidocoContactHistory;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoContactHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactHistoryForArrayConstraintFromSetMidocoContactHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getHistoryResponseMidocoContactHistoryItem) {
            // validation for constraint: itemType
            if (!$getHistoryResponseMidocoContactHistoryItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory) {
                $invalidValues[] = is_object($getHistoryResponseMidocoContactHistoryItem) ? get_class($getHistoryResponseMidocoContactHistoryItem) : sprintf('%s(%s)', gettype($getHistoryResponseMidocoContactHistoryItem), var_export($getHistoryResponseMidocoContactHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactHistory property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory[] $midocoContactHistory
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetHistoryResponse
     */
    public function setMidocoContactHistory(?array $midocoContactHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactHistoryArrayErrorMessage = self::validateMidocoContactHistoryForArrayConstraintFromSetMidocoContactHistory($midocoContactHistory))) {
            throw new InvalidArgumentException($midocoContactHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactHistory = $midocoContactHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetHistoryResponse
     */
    public function addToMidocoContactHistory(\Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoContactHistory property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactHistory[] = $item;
        
        return $this;
    }
}
