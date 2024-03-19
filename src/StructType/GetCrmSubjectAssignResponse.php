<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmSubjectAssignResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrmSubjectAssignResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmSubjectAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmSubjectAssign
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmSubjectAssign[]
     */
    protected ?array $MidocoCrmSubjectAssign = null;
    /**
     * Constructor method for GetCrmSubjectAssignResponse
     * @uses GetCrmSubjectAssignResponse::setMidocoCrmSubjectAssign()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmSubjectAssign[] $midocoCrmSubjectAssign
     */
    public function __construct(?array $midocoCrmSubjectAssign = null)
    {
        $this
            ->setMidocoCrmSubjectAssign($midocoCrmSubjectAssign);
    }
    /**
     * Get MidocoCrmSubjectAssign value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmSubjectAssign[]
     */
    public function getMidocoCrmSubjectAssign(): ?array
    {
        return $this->MidocoCrmSubjectAssign;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmSubjectAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmSubjectAssign method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmSubjectAssignForArrayConstraintFromSetMidocoCrmSubjectAssign(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCrmSubjectAssignResponseMidocoCrmSubjectAssignItem) {
            // validation for constraint: itemType
            if (!$getCrmSubjectAssignResponseMidocoCrmSubjectAssignItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmSubjectAssign) {
                $invalidValues[] = is_object($getCrmSubjectAssignResponseMidocoCrmSubjectAssignItem) ? get_class($getCrmSubjectAssignResponseMidocoCrmSubjectAssignItem) : sprintf('%s(%s)', gettype($getCrmSubjectAssignResponseMidocoCrmSubjectAssignItem), var_export($getCrmSubjectAssignResponseMidocoCrmSubjectAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmSubjectAssign property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmSubjectAssign, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmSubjectAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmSubjectAssign[] $midocoCrmSubjectAssign
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmSubjectAssignResponse
     */
    public function setMidocoCrmSubjectAssign(?array $midocoCrmSubjectAssign = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmSubjectAssignArrayErrorMessage = self::validateMidocoCrmSubjectAssignForArrayConstraintFromSetMidocoCrmSubjectAssign($midocoCrmSubjectAssign))) {
            throw new InvalidArgumentException($midocoCrmSubjectAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmSubjectAssign = $midocoCrmSubjectAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmSubjectAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmSubjectAssign $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmSubjectAssignResponse
     */
    public function addToMidocoCrmSubjectAssign(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmSubjectAssign $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmSubjectAssign) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmSubjectAssign property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmSubjectAssign, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmSubjectAssign[] = $item;
        
        return $this;
    }
}
