<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerDetailsByIdResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerDetailsByIdResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType[]
     */
    protected ?array $MidocoCustomerDetail = null;
    /**
     * Constructor method for GetCustomerDetailsByIdResponse
     * @uses GetCustomerDetailsByIdResponse::setMidocoCustomerDetail()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType[] $midocoCustomerDetail
     */
    public function __construct(?array $midocoCustomerDetail = null)
    {
        $this
            ->setMidocoCustomerDetail($midocoCustomerDetail);
    }
    /**
     * Get MidocoCustomerDetail value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType[]
     */
    public function getMidocoCustomerDetail(): ?array
    {
        return $this->MidocoCustomerDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerDetailForArrayConstraintFromSetMidocoCustomerDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCustomerDetailsByIdResponseMidocoCustomerDetailItem) {
            // validation for constraint: itemType
            if (!$getCustomerDetailsByIdResponseMidocoCustomerDetailItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType) {
                $invalidValues[] = is_object($getCustomerDetailsByIdResponseMidocoCustomerDetailItem) ? get_class($getCustomerDetailsByIdResponseMidocoCustomerDetailItem) : sprintf('%s(%s)', gettype($getCustomerDetailsByIdResponseMidocoCustomerDetailItem), var_export($getCustomerDetailsByIdResponseMidocoCustomerDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerDetail property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType[] $midocoCustomerDetail
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerDetailsByIdResponse
     */
    public function setMidocoCustomerDetail(?array $midocoCustomerDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerDetailArrayErrorMessage = self::validateMidocoCustomerDetailForArrayConstraintFromSetMidocoCustomerDetail($midocoCustomerDetail))) {
            throw new InvalidArgumentException($midocoCustomerDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerDetail = $midocoCustomerDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerDetailsByIdResponse
     */
    public function addToMidocoCustomerDetail(\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerDetail property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerDetail[] = $item;
        
        return $this;
    }
}
