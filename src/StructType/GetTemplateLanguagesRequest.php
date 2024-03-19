<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateLanguagesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTemplateLanguagesRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmTemplate
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO[]
     */
    protected ?array $MidocoCrmTemplate = null;
    /**
     * Constructor method for GetTemplateLanguagesRequest
     * @uses GetTemplateLanguagesRequest::setMidocoCrmTemplate()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO[] $midocoCrmTemplate
     */
    public function __construct(?array $midocoCrmTemplate = null)
    {
        $this
            ->setMidocoCrmTemplate($midocoCrmTemplate);
    }
    /**
     * Get MidocoCrmTemplate value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO[]
     */
    public function getMidocoCrmTemplate(): ?array
    {
        return $this->MidocoCrmTemplate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmTemplate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmTemplateForArrayConstraintFromSetMidocoCrmTemplate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTemplateLanguagesRequestMidocoCrmTemplateItem) {
            // validation for constraint: itemType
            if (!$getTemplateLanguagesRequestMidocoCrmTemplateItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO) {
                $invalidValues[] = is_object($getTemplateLanguagesRequestMidocoCrmTemplateItem) ? get_class($getTemplateLanguagesRequestMidocoCrmTemplateItem) : sprintf('%s(%s)', gettype($getTemplateLanguagesRequestMidocoCrmTemplateItem), var_export($getTemplateLanguagesRequestMidocoCrmTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmTemplate property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO[] $midocoCrmTemplate
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetTemplateLanguagesRequest
     */
    public function setMidocoCrmTemplate(?array $midocoCrmTemplate = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmTemplateArrayErrorMessage = self::validateMidocoCrmTemplateForArrayConstraintFromSetMidocoCrmTemplate($midocoCrmTemplate))) {
            throw new InvalidArgumentException($midocoCrmTemplateArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmTemplate = $midocoCrmTemplate;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetTemplateLanguagesRequest
     */
    public function addToMidocoCrmTemplate(\Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmTemplate property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmTemplate[] = $item;
        
        return $this;
    }
}
