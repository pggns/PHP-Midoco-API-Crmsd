<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteJobFunctionRequest StructType
 * @subpackage Structs
 */
class DeleteJobFunctionRequest extends AbstractStructBase
{
    /**
     * The MidocoJobFunction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoJobFunction
     * @var \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO[]
     */
    protected array $MidocoJobFunction = [];
    /**
     * Constructor method for DeleteJobFunctionRequest
     * @uses DeleteJobFunctionRequest::setMidocoJobFunction()
     * @param \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO[] $midocoJobFunction
     */
    public function __construct(array $midocoJobFunction = [])
    {
        $this
            ->setMidocoJobFunction($midocoJobFunction);
    }
    /**
     * Get MidocoJobFunction value
     * @return \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO[]
     */
    public function getMidocoJobFunction(): array
    {
        return $this->MidocoJobFunction;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoJobFunction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJobFunction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJobFunctionForArrayConstraintsFromSetMidocoJobFunction(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteJobFunctionRequestMidocoJobFunctionItem) {
            // validation for constraint: itemType
            if (!$deleteJobFunctionRequestMidocoJobFunctionItem instanceof \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO) {
                $invalidValues[] = is_object($deleteJobFunctionRequestMidocoJobFunctionItem) ? get_class($deleteJobFunctionRequestMidocoJobFunctionItem) : sprintf('%s(%s)', gettype($deleteJobFunctionRequestMidocoJobFunctionItem), var_export($deleteJobFunctionRequestMidocoJobFunctionItem, true));
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteJobFunctionRequest
     */
    public function setMidocoJobFunction(array $midocoJobFunction = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJobFunctionArrayErrorMessage = self::validateMidocoJobFunctionForArrayConstraintsFromSetMidocoJobFunction($midocoJobFunction))) {
            throw new InvalidArgumentException($midocoJobFunctionArrayErrorMessage, __LINE__);
        }
        $this->MidocoJobFunction = $midocoJobFunction;
        
        return $this;
    }
    /**
     * Add item to MidocoJobFunction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteJobFunctionRequest
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
