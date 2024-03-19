<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerCommissionDefinitionsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerCommissionDefinitionsResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerCommission
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerCommission
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCommission[]
     */
    protected ?array $MidocoCustomerCommission = null;
    /**
     * Constructor method for GetCustomerCommissionDefinitionsResponse
     * @uses GetCustomerCommissionDefinitionsResponse::setMidocoCustomerCommission()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCommission[] $midocoCustomerCommission
     */
    public function __construct(?array $midocoCustomerCommission = null)
    {
        $this
            ->setMidocoCustomerCommission($midocoCustomerCommission);
    }
    /**
     * Get MidocoCustomerCommission value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCommission[]
     */
    public function getMidocoCustomerCommission(): ?array
    {
        return $this->MidocoCustomerCommission;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerCommission method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerCommission method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerCommissionForArrayConstraintFromSetMidocoCustomerCommission(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCustomerCommissionDefinitionsResponseMidocoCustomerCommissionItem) {
            // validation for constraint: itemType
            if (!$getCustomerCommissionDefinitionsResponseMidocoCustomerCommissionItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCommission) {
                $invalidValues[] = is_object($getCustomerCommissionDefinitionsResponseMidocoCustomerCommissionItem) ? get_class($getCustomerCommissionDefinitionsResponseMidocoCustomerCommissionItem) : sprintf('%s(%s)', gettype($getCustomerCommissionDefinitionsResponseMidocoCustomerCommissionItem), var_export($getCustomerCommissionDefinitionsResponseMidocoCustomerCommissionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerCommission property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCommission, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerCommission value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCommission[] $midocoCustomerCommission
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerCommissionDefinitionsResponse
     */
    public function setMidocoCustomerCommission(?array $midocoCustomerCommission = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerCommissionArrayErrorMessage = self::validateMidocoCustomerCommissionForArrayConstraintFromSetMidocoCustomerCommission($midocoCustomerCommission))) {
            throw new InvalidArgumentException($midocoCustomerCommissionArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerCommission = $midocoCustomerCommission;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerCommission value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCommission $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerCommissionDefinitionsResponse
     */
    public function addToMidocoCustomerCommission(\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCommission $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCommission) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerCommission property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCommission, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerCommission[] = $item;
        
        return $this;
    }
}
