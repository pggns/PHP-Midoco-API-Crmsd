<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetJobFunctionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetJobFunctionResponse extends AbstractStructBase
{
    /**
     * The MidocoJobFunction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoJobFunction
     * @var \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO[]
     */
    protected ?array $MidocoJobFunction = null;
    /**
     * Constructor method for GetJobFunctionResponse
     * @uses GetJobFunctionResponse::setMidocoJobFunction()
     * @param \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO[] $midocoJobFunction
     */
    public function __construct(?array $midocoJobFunction = null)
    {
        $this
            ->setMidocoJobFunction($midocoJobFunction);
    }
    /**
     * Get MidocoJobFunction value
     * @return \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO[]
     */
    public function getMidocoJobFunction(): ?array
    {
        return $this->MidocoJobFunction;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoJobFunction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJobFunction method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJobFunctionForArrayConstraintFromSetMidocoJobFunction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getJobFunctionResponseMidocoJobFunctionItem) {
            // validation for constraint: itemType
            if (!$getJobFunctionResponseMidocoJobFunctionItem instanceof \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO) {
                $invalidValues[] = is_object($getJobFunctionResponseMidocoJobFunctionItem) ? get_class($getJobFunctionResponseMidocoJobFunctionItem) : sprintf('%s(%s)', gettype($getJobFunctionResponseMidocoJobFunctionItem), var_export($getJobFunctionResponseMidocoJobFunctionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJobFunction property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJobFunction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO[] $midocoJobFunction
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetJobFunctionResponse
     */
    public function setMidocoJobFunction(?array $midocoJobFunction = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJobFunctionArrayErrorMessage = self::validateMidocoJobFunctionForArrayConstraintFromSetMidocoJobFunction($midocoJobFunction))) {
            throw new InvalidArgumentException($midocoJobFunctionArrayErrorMessage, __LINE__);
        }
        $this->MidocoJobFunction = $midocoJobFunction;
        
        return $this;
    }
    /**
     * Add item to MidocoJobFunction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetJobFunctionResponse
     */
    public function addToMidocoJobFunction(\Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoJobFunction property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJobFunction[] = $item;
        
        return $this;
    }
}
