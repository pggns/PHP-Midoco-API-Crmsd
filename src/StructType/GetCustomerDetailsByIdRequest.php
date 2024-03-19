<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerDetailsByIdRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerDetailsByIdRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var int[]
     */
    protected array $MidocoCustomerId;
    /**
     * The readDetails
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $readDetails = null;
    /**
     * Constructor method for GetCustomerDetailsByIdRequest
     * @uses GetCustomerDetailsByIdRequest::setMidocoCustomerId()
     * @uses GetCustomerDetailsByIdRequest::setReadDetails()
     * @param int[] $midocoCustomerId
     * @param bool $readDetails
     */
    public function __construct(array $midocoCustomerId, ?bool $readDetails = false)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setReadDetails($readDetails);
    }
    /**
     * Get MidocoCustomerId value
     * @return int[]
     */
    public function getMidocoCustomerId(): array
    {
        return $this->MidocoCustomerId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerIdForArrayConstraintFromSetMidocoCustomerId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCustomerDetailsByIdRequestMidocoCustomerIdItem) {
            // validation for constraint: itemType
            if (!(is_int($getCustomerDetailsByIdRequestMidocoCustomerIdItem) || ctype_digit($getCustomerDetailsByIdRequestMidocoCustomerIdItem))) {
                $invalidValues[] = is_object($getCustomerDetailsByIdRequestMidocoCustomerIdItem) ? get_class($getCustomerDetailsByIdRequestMidocoCustomerIdItem) : sprintf('%s(%s)', gettype($getCustomerDetailsByIdRequestMidocoCustomerIdItem), var_export($getCustomerDetailsByIdRequestMidocoCustomerIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerId value
     * @throws InvalidArgumentException
     * @param int[] $midocoCustomerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerDetailsByIdRequest
     */
    public function setMidocoCustomerId(array $midocoCustomerId): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerIdArrayErrorMessage = self::validateMidocoCustomerIdForArrayConstraintFromSetMidocoCustomerId($midocoCustomerId))) {
            throw new InvalidArgumentException($midocoCustomerIdArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerDetailsByIdRequest
     */
    public function addToMidocoCustomerId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerId[] = $item;
        
        return $this;
    }
    /**
     * Get readDetails value
     * @return bool|null
     */
    public function getReadDetails(): ?bool
    {
        return $this->readDetails;
    }
    /**
     * Set readDetails value
     * @param bool $readDetails
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerDetailsByIdRequest
     */
    public function setReadDetails(?bool $readDetails = false): self
    {
        // validation for constraint: boolean
        if (!is_null($readDetails) && !is_bool($readDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($readDetails, true), gettype($readDetails)), __LINE__);
        }
        $this->readDetails = $readDetails;
        
        return $this;
    }
}
