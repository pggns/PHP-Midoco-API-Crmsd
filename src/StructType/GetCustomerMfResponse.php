<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerMfResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCrmNotices --- returns the list of mf for a customer
 * @subpackage Structs
 */
class GetCustomerMfResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerMf
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerMf
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO[]
     */
    protected array $MidocoCustomerMf = [];
    /**
     * Constructor method for GetCustomerMfResponse
     * @uses GetCustomerMfResponse::setMidocoCustomerMf()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO[] $midocoCustomerMf
     */
    public function __construct(array $midocoCustomerMf = [])
    {
        $this
            ->setMidocoCustomerMf($midocoCustomerMf);
    }
    /**
     * Get MidocoCustomerMf value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO[]
     */
    public function getMidocoCustomerMf(): array
    {
        return $this->MidocoCustomerMf;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerMf method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerMf method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerMfForArrayConstraintsFromSetMidocoCustomerMf(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCustomerMfResponseMidocoCustomerMfItem) {
            // validation for constraint: itemType
            if (!$getCustomerMfResponseMidocoCustomerMfItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO) {
                $invalidValues[] = is_object($getCustomerMfResponseMidocoCustomerMfItem) ? get_class($getCustomerMfResponseMidocoCustomerMfItem) : sprintf('%s(%s)', gettype($getCustomerMfResponseMidocoCustomerMfItem), var_export($getCustomerMfResponseMidocoCustomerMfItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerMf property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO[] $midocoCustomerMf
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMfResponse
     */
    public function setMidocoCustomerMf(array $midocoCustomerMf = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerMfArrayErrorMessage = self::validateMidocoCustomerMfForArrayConstraintsFromSetMidocoCustomerMf($midocoCustomerMf))) {
            throw new InvalidArgumentException($midocoCustomerMfArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerMf = $midocoCustomerMf;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMfResponse
     */
    public function addToMidocoCustomerMf(\Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerMf property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerMf[] = $item;
        
        return $this;
    }
}
