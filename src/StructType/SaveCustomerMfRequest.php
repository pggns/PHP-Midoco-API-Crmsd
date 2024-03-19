<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCustomerMfRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCustomerMfRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerMf
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoCustomerMf
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerMf[]
     */
    protected ?array $MidocoCustomerMf = null;
    /**
     * Constructor method for SaveCustomerMfRequest
     * @uses SaveCustomerMfRequest::setMidocoCustomerMf()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerMf[] $midocoCustomerMf
     */
    public function __construct(?array $midocoCustomerMf = null)
    {
        $this
            ->setMidocoCustomerMf($midocoCustomerMf);
    }
    /**
     * Get MidocoCustomerMf value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerMf[]
     */
    public function getMidocoCustomerMf(): ?array
    {
        return $this->MidocoCustomerMf;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerMf method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerMf method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerMfForArrayConstraintFromSetMidocoCustomerMf(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveCustomerMfRequestMidocoCustomerMfItem) {
            // validation for constraint: itemType
            if (!$saveCustomerMfRequestMidocoCustomerMfItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerMf) {
                $invalidValues[] = is_object($saveCustomerMfRequestMidocoCustomerMfItem) ? get_class($saveCustomerMfRequestMidocoCustomerMfItem) : sprintf('%s(%s)', gettype($saveCustomerMfRequestMidocoCustomerMfItem), var_export($saveCustomerMfRequestMidocoCustomerMfItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerMf property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerMf, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerMf[] $midocoCustomerMf
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCustomerMfRequest
     */
    public function setMidocoCustomerMf(?array $midocoCustomerMf = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerMfArrayErrorMessage = self::validateMidocoCustomerMfForArrayConstraintFromSetMidocoCustomerMf($midocoCustomerMf))) {
            throw new InvalidArgumentException($midocoCustomerMfArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerMf = $midocoCustomerMf;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerMf $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCustomerMfRequest
     */
    public function addToMidocoCustomerMf(\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerMf $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerMf) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerMf property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerMf, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerMf[] = $item;
        
        return $this;
    }
}
