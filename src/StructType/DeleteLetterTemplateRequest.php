<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteLetterTemplateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteLetterTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoLetterTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoLetterTemplate
     * @var \Pggns\MidocoApi\Crmsd\StructType\LetterTemplateDTO[]
     */
    protected ?array $MidocoLetterTemplate = null;
    /**
     * Constructor method for DeleteLetterTemplateRequest
     * @uses DeleteLetterTemplateRequest::setMidocoLetterTemplate()
     * @param \Pggns\MidocoApi\Crmsd\StructType\LetterTemplateDTO[] $midocoLetterTemplate
     */
    public function __construct(?array $midocoLetterTemplate = null)
    {
        $this
            ->setMidocoLetterTemplate($midocoLetterTemplate);
    }
    /**
     * Get MidocoLetterTemplate value
     * @return \Pggns\MidocoApi\Crmsd\StructType\LetterTemplateDTO[]
     */
    public function getMidocoLetterTemplate(): ?array
    {
        return $this->MidocoLetterTemplate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoLetterTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoLetterTemplate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoLetterTemplateForArrayConstraintFromSetMidocoLetterTemplate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteLetterTemplateRequestMidocoLetterTemplateItem) {
            // validation for constraint: itemType
            if (!$deleteLetterTemplateRequestMidocoLetterTemplateItem instanceof \Pggns\MidocoApi\Crmsd\StructType\LetterTemplateDTO) {
                $invalidValues[] = is_object($deleteLetterTemplateRequestMidocoLetterTemplateItem) ? get_class($deleteLetterTemplateRequestMidocoLetterTemplateItem) : sprintf('%s(%s)', gettype($deleteLetterTemplateRequestMidocoLetterTemplateItem), var_export($deleteLetterTemplateRequestMidocoLetterTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoLetterTemplate property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\LetterTemplateDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoLetterTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\LetterTemplateDTO[] $midocoLetterTemplate
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteLetterTemplateRequest
     */
    public function setMidocoLetterTemplate(?array $midocoLetterTemplate = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoLetterTemplateArrayErrorMessage = self::validateMidocoLetterTemplateForArrayConstraintFromSetMidocoLetterTemplate($midocoLetterTemplate))) {
            throw new InvalidArgumentException($midocoLetterTemplateArrayErrorMessage, __LINE__);
        }
        $this->MidocoLetterTemplate = $midocoLetterTemplate;
        
        return $this;
    }
    /**
     * Add item to MidocoLetterTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\LetterTemplateDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteLetterTemplateRequest
     */
    public function addToMidocoLetterTemplate(\Pggns\MidocoApi\Crmsd\StructType\LetterTemplateDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\LetterTemplateDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoLetterTemplate property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\LetterTemplateDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoLetterTemplate[] = $item;
        
        return $this;
    }
}
