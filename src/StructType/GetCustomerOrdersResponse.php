<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerOrdersResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerOrdersResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerOrder
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerOrder[]
     */
    protected ?array $MidocoCustomerOrder = null;
    /**
     * Constructor method for GetCustomerOrdersResponse
     * @uses GetCustomerOrdersResponse::setMidocoCustomerOrder()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerOrder[] $midocoCustomerOrder
     */
    public function __construct(?array $midocoCustomerOrder = null)
    {
        $this
            ->setMidocoCustomerOrder($midocoCustomerOrder);
    }
    /**
     * Get MidocoCustomerOrder value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerOrder[]
     */
    public function getMidocoCustomerOrder(): ?array
    {
        return $this->MidocoCustomerOrder;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerOrder method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerOrderForArrayConstraintFromSetMidocoCustomerOrder(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCustomerOrdersResponseMidocoCustomerOrderItem) {
            // validation for constraint: itemType
            if (!$getCustomerOrdersResponseMidocoCustomerOrderItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerOrder) {
                $invalidValues[] = is_object($getCustomerOrdersResponseMidocoCustomerOrderItem) ? get_class($getCustomerOrdersResponseMidocoCustomerOrderItem) : sprintf('%s(%s)', gettype($getCustomerOrdersResponseMidocoCustomerOrderItem), var_export($getCustomerOrdersResponseMidocoCustomerOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerOrder property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerOrder, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerOrder value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerOrder[] $midocoCustomerOrder
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerOrdersResponse
     */
    public function setMidocoCustomerOrder(?array $midocoCustomerOrder = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerOrderArrayErrorMessage = self::validateMidocoCustomerOrderForArrayConstraintFromSetMidocoCustomerOrder($midocoCustomerOrder))) {
            throw new InvalidArgumentException($midocoCustomerOrderArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerOrder = $midocoCustomerOrder;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerOrder value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerOrder $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerOrdersResponse
     */
    public function addToMidocoCustomerOrder(\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerOrder $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerOrder) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerOrder property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerOrder, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerOrder[] = $item;
        
        return $this;
    }
}
