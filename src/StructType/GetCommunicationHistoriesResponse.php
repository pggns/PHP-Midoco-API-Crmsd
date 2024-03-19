<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCommunicationHistoriesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCommunicationHistoriesResponse extends AbstractStructBase
{
    /**
     * The MidocoCommunicationHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCommunicationHistory
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory[]
     */
    protected ?array $MidocoCommunicationHistory = null;
    /**
     * Constructor method for GetCommunicationHistoriesResponse
     * @uses GetCommunicationHistoriesResponse::setMidocoCommunicationHistory()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory[] $midocoCommunicationHistory
     */
    public function __construct(?array $midocoCommunicationHistory = null)
    {
        $this
            ->setMidocoCommunicationHistory($midocoCommunicationHistory);
    }
    /**
     * Get MidocoCommunicationHistory value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory[]
     */
    public function getMidocoCommunicationHistory(): ?array
    {
        return $this->MidocoCommunicationHistory;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCommunicationHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCommunicationHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCommunicationHistoryForArrayConstraintFromSetMidocoCommunicationHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCommunicationHistoriesResponseMidocoCommunicationHistoryItem) {
            // validation for constraint: itemType
            if (!$getCommunicationHistoriesResponseMidocoCommunicationHistoryItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory) {
                $invalidValues[] = is_object($getCommunicationHistoriesResponseMidocoCommunicationHistoryItem) ? get_class($getCommunicationHistoriesResponseMidocoCommunicationHistoryItem) : sprintf('%s(%s)', gettype($getCommunicationHistoriesResponseMidocoCommunicationHistoryItem), var_export($getCommunicationHistoriesResponseMidocoCommunicationHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCommunicationHistory property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCommunicationHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory[] $midocoCommunicationHistory
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCommunicationHistoriesResponse
     */
    public function setMidocoCommunicationHistory(?array $midocoCommunicationHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCommunicationHistoryArrayErrorMessage = self::validateMidocoCommunicationHistoryForArrayConstraintFromSetMidocoCommunicationHistory($midocoCommunicationHistory))) {
            throw new InvalidArgumentException($midocoCommunicationHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoCommunicationHistory = $midocoCommunicationHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoCommunicationHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCommunicationHistoriesResponse
     */
    public function addToMidocoCommunicationHistory(\Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoCommunicationHistory property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCommunicationHistory[] = $item;
        
        return $this;
    }
}
