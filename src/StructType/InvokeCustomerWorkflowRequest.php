<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvokeCustomerWorkflowRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class InvokeCustomerWorkflowRequest extends AbstractStructBase
{
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var int[]
     */
    protected array $customerId;
    /**
     * Constructor method for InvokeCustomerWorkflowRequest
     * @uses InvokeCustomerWorkflowRequest::setCustomerId()
     * @param int[] $customerId
     */
    public function __construct(array $customerId)
    {
        $this
            ->setCustomerId($customerId);
    }
    /**
     * Get customerId value
     * @return int[]
     */
    public function getCustomerId(): array
    {
        return $this->customerId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCustomerId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerIdForArrayConstraintFromSetCustomerId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $invokeCustomerWorkflowRequestCustomerIdItem) {
            // validation for constraint: itemType
            if (!(is_int($invokeCustomerWorkflowRequestCustomerIdItem) || ctype_digit($invokeCustomerWorkflowRequestCustomerIdItem))) {
                $invalidValues[] = is_object($invokeCustomerWorkflowRequestCustomerIdItem) ? get_class($invokeCustomerWorkflowRequestCustomerIdItem) : sprintf('%s(%s)', gettype($invokeCustomerWorkflowRequestCustomerIdItem), var_export($invokeCustomerWorkflowRequestCustomerIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The customerId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set customerId value
     * @throws InvalidArgumentException
     * @param int[] $customerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\InvokeCustomerWorkflowRequest
     */
    public function setCustomerId(array $customerId): self
    {
        // validation for constraint: array
        if ('' !== ($customerIdArrayErrorMessage = self::validateCustomerIdForArrayConstraintFromSetCustomerId($customerId))) {
            throw new InvalidArgumentException($customerIdArrayErrorMessage, __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Add item to customerId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\InvokeCustomerWorkflowRequest
     */
    public function addToCustomerId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The customerId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->customerId[] = $item;
        
        return $this;
    }
}
