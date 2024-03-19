<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FilterSettlementCandidatesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: filterSettlementCandidates --- take from crm_mediator_charges all the customers that are not locked and have the settlement month between the start and end date of their charges
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FilterSettlementCandidatesResponse extends AbstractStructBase
{
    /**
     * The mediatorId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $mediatorId = null;
    /**
     * Constructor method for FilterSettlementCandidatesResponse
     * @uses FilterSettlementCandidatesResponse::setMediatorId()
     * @param string[] $mediatorId
     */
    public function __construct(?array $mediatorId = null)
    {
        $this
            ->setMediatorId($mediatorId);
    }
    /**
     * Get mediatorId value
     * @return string[]
     */
    public function getMediatorId(): ?array
    {
        return $this->mediatorId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMediatorId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMediatorId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMediatorIdForArrayConstraintFromSetMediatorId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $filterSettlementCandidatesResponseMediatorIdItem) {
            // validation for constraint: itemType
            if (!is_string($filterSettlementCandidatesResponseMediatorIdItem)) {
                $invalidValues[] = is_object($filterSettlementCandidatesResponseMediatorIdItem) ? get_class($filterSettlementCandidatesResponseMediatorIdItem) : sprintf('%s(%s)', gettype($filterSettlementCandidatesResponseMediatorIdItem), var_export($filterSettlementCandidatesResponseMediatorIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mediatorId property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set mediatorId value
     * @throws InvalidArgumentException
     * @param string[] $mediatorId
     * @return \Pggns\MidocoApi\Crmsd\StructType\FilterSettlementCandidatesResponse
     */
    public function setMediatorId(?array $mediatorId = null): self
    {
        // validation for constraint: array
        if ('' !== ($mediatorIdArrayErrorMessage = self::validateMediatorIdForArrayConstraintFromSetMediatorId($mediatorId))) {
            throw new InvalidArgumentException($mediatorIdArrayErrorMessage, __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Add item to mediatorId value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\FilterSettlementCandidatesResponse
     */
    public function addToMediatorId(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The mediatorId property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->mediatorId[] = $item;
        
        return $this;
    }
}
