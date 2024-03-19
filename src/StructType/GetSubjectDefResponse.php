<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSubjectDefResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSubjectDefResponse extends AbstractStructBase
{
    /**
     * The MidocoSubjectDef
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSubjectDef
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef[]
     */
    protected ?array $MidocoSubjectDef = null;
    /**
     * Constructor method for GetSubjectDefResponse
     * @uses GetSubjectDefResponse::setMidocoSubjectDef()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef[] $midocoSubjectDef
     */
    public function __construct(?array $midocoSubjectDef = null)
    {
        $this
            ->setMidocoSubjectDef($midocoSubjectDef);
    }
    /**
     * Get MidocoSubjectDef value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef[]
     */
    public function getMidocoSubjectDef(): ?array
    {
        return $this->MidocoSubjectDef;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSubjectDef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSubjectDef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSubjectDefForArrayConstraintFromSetMidocoSubjectDef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSubjectDefResponseMidocoSubjectDefItem) {
            // validation for constraint: itemType
            if (!$getSubjectDefResponseMidocoSubjectDefItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef) {
                $invalidValues[] = is_object($getSubjectDefResponseMidocoSubjectDefItem) ? get_class($getSubjectDefResponseMidocoSubjectDefItem) : sprintf('%s(%s)', gettype($getSubjectDefResponseMidocoSubjectDefItem), var_export($getSubjectDefResponseMidocoSubjectDefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSubjectDef property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSubjectDef value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef[] $midocoSubjectDef
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetSubjectDefResponse
     */
    public function setMidocoSubjectDef(?array $midocoSubjectDef = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSubjectDefArrayErrorMessage = self::validateMidocoSubjectDefForArrayConstraintFromSetMidocoSubjectDef($midocoSubjectDef))) {
            throw new InvalidArgumentException($midocoSubjectDefArrayErrorMessage, __LINE__);
        }
        $this->MidocoSubjectDef = $midocoSubjectDef;
        
        return $this;
    }
    /**
     * Add item to MidocoSubjectDef value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetSubjectDefResponse
     */
    public function addToMidocoSubjectDef(\Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef) {
            throw new InvalidArgumentException(sprintf('The MidocoSubjectDef property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSubjectDef[] = $item;
        
        return $this;
    }
}
