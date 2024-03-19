<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignEmailToCustomerResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: A list of customers. If the list contains only one customer, the email is already attached to the customer
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AssignEmailToCustomerResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoCustomerInfo
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo[]
     */
    protected ?array $MidocoCustomerInfo = null;
    /**
     * Constructor method for AssignEmailToCustomerResponse
     * @uses AssignEmailToCustomerResponse::setMidocoCustomerInfo()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo[] $midocoCustomerInfo
     */
    public function __construct(?array $midocoCustomerInfo = null)
    {
        $this
            ->setMidocoCustomerInfo($midocoCustomerInfo);
    }
    /**
     * Get MidocoCustomerInfo value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo[]
     */
    public function getMidocoCustomerInfo(): ?array
    {
        return $this->MidocoCustomerInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerInfoForArrayConstraintFromSetMidocoCustomerInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $assignEmailToCustomerResponseMidocoCustomerInfoItem) {
            // validation for constraint: itemType
            if (!$assignEmailToCustomerResponseMidocoCustomerInfoItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo) {
                $invalidValues[] = is_object($assignEmailToCustomerResponseMidocoCustomerInfoItem) ? get_class($assignEmailToCustomerResponseMidocoCustomerInfoItem) : sprintf('%s(%s)', gettype($assignEmailToCustomerResponseMidocoCustomerInfoItem), var_export($assignEmailToCustomerResponseMidocoCustomerInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerInfo property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo[] $midocoCustomerInfo
     * @return \Pggns\MidocoApi\Crmsd\StructType\AssignEmailToCustomerResponse
     */
    public function setMidocoCustomerInfo(?array $midocoCustomerInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerInfoArrayErrorMessage = self::validateMidocoCustomerInfoForArrayConstraintFromSetMidocoCustomerInfo($midocoCustomerInfo))) {
            throw new InvalidArgumentException($midocoCustomerInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerInfo = $midocoCustomerInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\AssignEmailToCustomerResponse
     */
    public function addToMidocoCustomerInfo(\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerInfo property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerInfo[] = $item;
        
        return $this;
    }
}
