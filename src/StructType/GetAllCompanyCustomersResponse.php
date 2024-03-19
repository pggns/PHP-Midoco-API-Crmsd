<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllCompanyCustomersResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllCompanyCustomersResponse extends AbstractStructBase
{
    /**
     * The MidocoGetCompanyCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoGetCompanyCustomer
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoGetCompanyCustomerType[]
     */
    protected ?array $MidocoGetCompanyCustomer = null;
    /**
     * The noOfResults
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for GetAllCompanyCustomersResponse
     * @uses GetAllCompanyCustomersResponse::setMidocoGetCompanyCustomer()
     * @uses GetAllCompanyCustomersResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoGetCompanyCustomerType[] $midocoGetCompanyCustomer
     * @param int $noOfResults
     */
    public function __construct(?array $midocoGetCompanyCustomer = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoGetCompanyCustomer($midocoGetCompanyCustomer)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoGetCompanyCustomer value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoGetCompanyCustomerType[]
     */
    public function getMidocoGetCompanyCustomer(): ?array
    {
        return $this->MidocoGetCompanyCustomer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoGetCompanyCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoGetCompanyCustomer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoGetCompanyCustomerForArrayConstraintFromSetMidocoGetCompanyCustomer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllCompanyCustomersResponseMidocoGetCompanyCustomerItem) {
            // validation for constraint: itemType
            if (!$getAllCompanyCustomersResponseMidocoGetCompanyCustomerItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoGetCompanyCustomerType) {
                $invalidValues[] = is_object($getAllCompanyCustomersResponseMidocoGetCompanyCustomerItem) ? get_class($getAllCompanyCustomersResponseMidocoGetCompanyCustomerItem) : sprintf('%s(%s)', gettype($getAllCompanyCustomersResponseMidocoGetCompanyCustomerItem), var_export($getAllCompanyCustomersResponseMidocoGetCompanyCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoGetCompanyCustomer property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoGetCompanyCustomerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoGetCompanyCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoGetCompanyCustomerType[] $midocoGetCompanyCustomer
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAllCompanyCustomersResponse
     */
    public function setMidocoGetCompanyCustomer(?array $midocoGetCompanyCustomer = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoGetCompanyCustomerArrayErrorMessage = self::validateMidocoGetCompanyCustomerForArrayConstraintFromSetMidocoGetCompanyCustomer($midocoGetCompanyCustomer))) {
            throw new InvalidArgumentException($midocoGetCompanyCustomerArrayErrorMessage, __LINE__);
        }
        $this->MidocoGetCompanyCustomer = $midocoGetCompanyCustomer;
        
        return $this;
    }
    /**
     * Add item to MidocoGetCompanyCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoGetCompanyCustomerType $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAllCompanyCustomersResponse
     */
    public function addToMidocoGetCompanyCustomer(\Pggns\MidocoApi\Crmsd\StructType\MidocoGetCompanyCustomerType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoGetCompanyCustomerType) {
            throw new InvalidArgumentException(sprintf('The MidocoGetCompanyCustomer property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoGetCompanyCustomerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoGetCompanyCustomer[] = $item;
        
        return $this;
    }
    /**
     * Get noOfResults value
     * @return int|null
     */
    public function getNoOfResults(): ?int
    {
        return $this->noOfResults;
    }
    /**
     * Set noOfResults value
     * @param int $noOfResults
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAllCompanyCustomersResponse
     */
    public function setNoOfResults(?int $noOfResults = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfResults) && !(is_int($noOfResults) || ctype_digit($noOfResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfResults, true), gettype($noOfResults)), __LINE__);
        }
        $this->noOfResults = $noOfResults;
        
        return $this;
    }
}
