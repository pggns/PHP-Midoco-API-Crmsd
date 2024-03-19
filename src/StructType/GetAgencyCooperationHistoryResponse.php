<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgencyCooperationHistoryResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAgencyCooperationHistoryResponse extends AbstractStructBase
{
    /**
     * The MidocoAgencyCooperationHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencyCooperationHistory
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory[]
     */
    protected ?array $MidocoAgencyCooperationHistory = null;
    /**
     * The currentCooperationId
     * @var string|null
     */
    protected ?string $currentCooperationId = null;
    /**
     * Constructor method for GetAgencyCooperationHistoryResponse
     * @uses GetAgencyCooperationHistoryResponse::setMidocoAgencyCooperationHistory()
     * @uses GetAgencyCooperationHistoryResponse::setCurrentCooperationId()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory[] $midocoAgencyCooperationHistory
     * @param string $currentCooperationId
     */
    public function __construct(?array $midocoAgencyCooperationHistory = null, ?string $currentCooperationId = null)
    {
        $this
            ->setMidocoAgencyCooperationHistory($midocoAgencyCooperationHistory)
            ->setCurrentCooperationId($currentCooperationId);
    }
    /**
     * Get MidocoAgencyCooperationHistory value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory[]
     */
    public function getMidocoAgencyCooperationHistory(): ?array
    {
        return $this->MidocoAgencyCooperationHistory;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAgencyCooperationHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencyCooperationHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencyCooperationHistoryForArrayConstraintFromSetMidocoAgencyCooperationHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAgencyCooperationHistoryResponseMidocoAgencyCooperationHistoryItem) {
            // validation for constraint: itemType
            if (!$getAgencyCooperationHistoryResponseMidocoAgencyCooperationHistoryItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory) {
                $invalidValues[] = is_object($getAgencyCooperationHistoryResponseMidocoAgencyCooperationHistoryItem) ? get_class($getAgencyCooperationHistoryResponseMidocoAgencyCooperationHistoryItem) : sprintf('%s(%s)', gettype($getAgencyCooperationHistoryResponseMidocoAgencyCooperationHistoryItem), var_export($getAgencyCooperationHistoryResponseMidocoAgencyCooperationHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgencyCooperationHistory property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgencyCooperationHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory[] $midocoAgencyCooperationHistory
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAgencyCooperationHistoryResponse
     */
    public function setMidocoAgencyCooperationHistory(?array $midocoAgencyCooperationHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencyCooperationHistoryArrayErrorMessage = self::validateMidocoAgencyCooperationHistoryForArrayConstraintFromSetMidocoAgencyCooperationHistory($midocoAgencyCooperationHistory))) {
            throw new InvalidArgumentException($midocoAgencyCooperationHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencyCooperationHistory = $midocoAgencyCooperationHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencyCooperationHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAgencyCooperationHistoryResponse
     */
    public function addToMidocoAgencyCooperationHistory(\Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoAgencyCooperationHistory property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgencyCooperationHistory[] = $item;
        
        return $this;
    }
    /**
     * Get currentCooperationId value
     * @return string|null
     */
    public function getCurrentCooperationId(): ?string
    {
        return $this->currentCooperationId;
    }
    /**
     * Set currentCooperationId value
     * @param string $currentCooperationId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAgencyCooperationHistoryResponse
     */
    public function setCurrentCooperationId(?string $currentCooperationId = null): self
    {
        // validation for constraint: string
        if (!is_null($currentCooperationId) && !is_string($currentCooperationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentCooperationId, true), gettype($currentCooperationId)), __LINE__);
        }
        $this->currentCooperationId = $currentCooperationId;
        
        return $this;
    }
}
