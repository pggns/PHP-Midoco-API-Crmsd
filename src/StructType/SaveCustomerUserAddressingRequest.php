<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCustomerUserAddressingRequest StructType
 * @subpackage Structs
 */
class SaveCustomerUserAddressingRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmUserAddressing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmUserAddressing
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmUserAddressingDTO[]
     */
    protected array $MidocoCrmUserAddressing = [];
    /**
     * Constructor method for SaveCustomerUserAddressingRequest
     * @uses SaveCustomerUserAddressingRequest::setMidocoCrmUserAddressing()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmUserAddressingDTO[] $midocoCrmUserAddressing
     */
    public function __construct(array $midocoCrmUserAddressing = [])
    {
        $this
            ->setMidocoCrmUserAddressing($midocoCrmUserAddressing);
    }
    /**
     * Get MidocoCrmUserAddressing value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmUserAddressingDTO[]
     */
    public function getMidocoCrmUserAddressing(): array
    {
        return $this->MidocoCrmUserAddressing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmUserAddressing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmUserAddressing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmUserAddressingForArrayConstraintsFromSetMidocoCrmUserAddressing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveCustomerUserAddressingRequestMidocoCrmUserAddressingItem) {
            // validation for constraint: itemType
            if (!$saveCustomerUserAddressingRequestMidocoCrmUserAddressingItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmUserAddressingDTO) {
                $invalidValues[] = is_object($saveCustomerUserAddressingRequestMidocoCrmUserAddressingItem) ? get_class($saveCustomerUserAddressingRequestMidocoCrmUserAddressingItem) : sprintf('%s(%s)', gettype($saveCustomerUserAddressingRequestMidocoCrmUserAddressingItem), var_export($saveCustomerUserAddressingRequestMidocoCrmUserAddressingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmUserAddressing property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmUserAddressingDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmUserAddressing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmUserAddressingDTO[] $midocoCrmUserAddressing
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCustomerUserAddressingRequest
     */
    public function setMidocoCrmUserAddressing(array $midocoCrmUserAddressing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmUserAddressingArrayErrorMessage = self::validateMidocoCrmUserAddressingForArrayConstraintsFromSetMidocoCrmUserAddressing($midocoCrmUserAddressing))) {
            throw new InvalidArgumentException($midocoCrmUserAddressingArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmUserAddressing = $midocoCrmUserAddressing;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmUserAddressing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmUserAddressingDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCustomerUserAddressingRequest
     */
    public function addToMidocoCrmUserAddressing(\Pggns\MidocoApi\Crmsd\StructType\CrmUserAddressingDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmUserAddressingDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmUserAddressing property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmUserAddressingDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmUserAddressing[] = $item;
        
        return $this;
    }
}
