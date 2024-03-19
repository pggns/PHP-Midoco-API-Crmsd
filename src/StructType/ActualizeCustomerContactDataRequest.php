<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActualizeCustomerContactDataRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: actualize customer contact data (in background); MidocoContactType can have the old ContactType and optional the new; if MidocoContactType is empty than all customer contacts will be checked and actualized.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ActualizeCustomerContactDataRequest extends AbstractStructBase
{
    /**
     * The MidocoContactType
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: MidocoContactType
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoContactType[]
     */
    protected ?array $MidocoContactType = null;
    /**
     * The waitForExecute
     * Meta information extracted from the WSDL
     * - documentation: wait until the end of execute, default will run in background.
     * - default: false
     * @var bool|null
     */
    protected ?bool $waitForExecute = null;
    /**
     * Constructor method for ActualizeCustomerContactDataRequest
     * @uses ActualizeCustomerContactDataRequest::setMidocoContactType()
     * @uses ActualizeCustomerContactDataRequest::setWaitForExecute()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactType[] $midocoContactType
     * @param bool $waitForExecute
     */
    public function __construct(?array $midocoContactType = null, ?bool $waitForExecute = false)
    {
        $this
            ->setMidocoContactType($midocoContactType)
            ->setWaitForExecute($waitForExecute);
    }
    /**
     * Get MidocoContactType value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoContactType[]
     */
    public function getMidocoContactType(): ?array
    {
        return $this->MidocoContactType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoContactType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactTypeForArrayConstraintFromSetMidocoContactType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $actualizeCustomerContactDataRequestMidocoContactTypeItem) {
            // validation for constraint: itemType
            if (!$actualizeCustomerContactDataRequestMidocoContactTypeItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactType) {
                $invalidValues[] = is_object($actualizeCustomerContactDataRequestMidocoContactTypeItem) ? get_class($actualizeCustomerContactDataRequestMidocoContactTypeItem) : sprintf('%s(%s)', gettype($actualizeCustomerContactDataRequestMidocoContactTypeItem), var_export($actualizeCustomerContactDataRequestMidocoContactTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactType property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactType[] $midocoContactType
     * @return \Pggns\MidocoApi\Crmsd\StructType\ActualizeCustomerContactDataRequest
     */
    public function setMidocoContactType(?array $midocoContactType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactTypeArrayErrorMessage = self::validateMidocoContactTypeForArrayConstraintFromSetMidocoContactType($midocoContactType))) {
            throw new InvalidArgumentException($midocoContactTypeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($midocoContactType) && count($midocoContactType) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($midocoContactType)), __LINE__);
        }
        $this->MidocoContactType = $midocoContactType;
        
        return $this;
    }
    /**
     * Add item to MidocoContactType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactType $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ActualizeCustomerContactDataRequest
     */
    public function addToMidocoContactType(\Pggns\MidocoApi\Crmsd\StructType\MidocoContactType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactType) {
            throw new InvalidArgumentException(sprintf('The MidocoContactType property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->MidocoContactType) && count($this->MidocoContactType) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->MidocoContactType)), __LINE__);
        }
        $this->MidocoContactType[] = $item;
        
        return $this;
    }
    /**
     * Get waitForExecute value
     * @return bool|null
     */
    public function getWaitForExecute(): ?bool
    {
        return $this->waitForExecute;
    }
    /**
     * Set waitForExecute value
     * @param bool $waitForExecute
     * @return \Pggns\MidocoApi\Crmsd\StructType\ActualizeCustomerContactDataRequest
     */
    public function setWaitForExecute(?bool $waitForExecute = false): self
    {
        // validation for constraint: boolean
        if (!is_null($waitForExecute) && !is_bool($waitForExecute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($waitForExecute, true), gettype($waitForExecute)), __LINE__);
        }
        $this->waitForExecute = $waitForExecute;
        
        return $this;
    }
}
