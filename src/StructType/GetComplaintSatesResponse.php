<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetComplaintSatesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetComplaintSatesResponse extends AbstractStructBase
{
    /**
     * The MidocoComplaintState
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoComplaintState
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO[]
     */
    protected ?array $MidocoComplaintState = null;
    /**
     * Constructor method for GetComplaintSatesResponse
     * @uses GetComplaintSatesResponse::setMidocoComplaintState()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO[] $midocoComplaintState
     */
    public function __construct(?array $midocoComplaintState = null)
    {
        $this
            ->setMidocoComplaintState($midocoComplaintState);
    }
    /**
     * Get MidocoComplaintState value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO[]
     */
    public function getMidocoComplaintState(): ?array
    {
        return $this->MidocoComplaintState;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoComplaintState method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoComplaintState method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoComplaintStateForArrayConstraintFromSetMidocoComplaintState(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getComplaintSatesResponseMidocoComplaintStateItem) {
            // validation for constraint: itemType
            if (!$getComplaintSatesResponseMidocoComplaintStateItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO) {
                $invalidValues[] = is_object($getComplaintSatesResponseMidocoComplaintStateItem) ? get_class($getComplaintSatesResponseMidocoComplaintStateItem) : sprintf('%s(%s)', gettype($getComplaintSatesResponseMidocoComplaintStateItem), var_export($getComplaintSatesResponseMidocoComplaintStateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoComplaintState property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoComplaintState value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO[] $midocoComplaintState
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetComplaintSatesResponse
     */
    public function setMidocoComplaintState(?array $midocoComplaintState = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoComplaintStateArrayErrorMessage = self::validateMidocoComplaintStateForArrayConstraintFromSetMidocoComplaintState($midocoComplaintState))) {
            throw new InvalidArgumentException($midocoComplaintStateArrayErrorMessage, __LINE__);
        }
        $this->MidocoComplaintState = $midocoComplaintState;
        
        return $this;
    }
    /**
     * Add item to MidocoComplaintState value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetComplaintSatesResponse
     */
    public function addToMidocoComplaintState(\Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoComplaintState property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoComplaintState[] = $item;
        
        return $this;
    }
}
