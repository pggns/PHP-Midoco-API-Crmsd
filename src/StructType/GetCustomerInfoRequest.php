<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerInfoRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerInfoRequest extends AbstractStructBase
{
    /**
     * The CustomerInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 1
     * - ref: CustomerInfo
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerInfo[]
     */
    protected array $CustomerInfo;
    /**
     * Constructor method for GetCustomerInfoRequest
     * @uses GetCustomerInfoRequest::setCustomerInfo()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerInfo[] $customerInfo
     */
    public function __construct(array $customerInfo)
    {
        $this
            ->setCustomerInfo($customerInfo);
    }
    /**
     * Get CustomerInfo value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CustomerInfo[]
     */
    public function getCustomerInfo(): array
    {
        return $this->CustomerInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCustomerInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerInfoForArrayConstraintFromSetCustomerInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCustomerInfoRequestCustomerInfoItem) {
            // validation for constraint: itemType
            if (!$getCustomerInfoRequestCustomerInfoItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CustomerInfo) {
                $invalidValues[] = is_object($getCustomerInfoRequestCustomerInfoItem) ? get_class($getCustomerInfoRequestCustomerInfoItem) : sprintf('%s(%s)', gettype($getCustomerInfoRequestCustomerInfoItem), var_export($getCustomerInfoRequestCustomerInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CustomerInfo property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CustomerInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CustomerInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerInfo[] $customerInfo
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerInfoRequest
     */
    public function setCustomerInfo(array $customerInfo): self
    {
        // validation for constraint: array
        if ('' !== ($customerInfoArrayErrorMessage = self::validateCustomerInfoForArrayConstraintFromSetCustomerInfo($customerInfo))) {
            throw new InvalidArgumentException($customerInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($customerInfo) && count($customerInfo) > 500) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($customerInfo)), __LINE__);
        }
        $this->CustomerInfo = $customerInfo;
        
        return $this;
    }
    /**
     * Add item to CustomerInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerInfo $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerInfoRequest
     */
    public function addToCustomerInfo(\Pggns\MidocoApi\Crmsd\StructType\CustomerInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CustomerInfo) {
            throw new InvalidArgumentException(sprintf('The CustomerInfo property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CustomerInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($this->CustomerInfo) && count($this->CustomerInfo) >= 500) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->CustomerInfo)), __LINE__);
        }
        $this->CustomerInfo[] = $item;
        
        return $this;
    }
}
