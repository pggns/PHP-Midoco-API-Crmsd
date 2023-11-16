<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplatesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getTemplates --- get a list of templates
 * @subpackage Structs
 */
class GetTemplatesResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmTemplate
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO[]
     */
    protected array $MidocoCrmTemplate = [];
    /**
     * Constructor method for GetTemplatesResponse
     * @uses GetTemplatesResponse::setMidocoCrmTemplate()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO[] $midocoCrmTemplate
     */
    public function __construct(array $midocoCrmTemplate = [])
    {
        $this
            ->setMidocoCrmTemplate($midocoCrmTemplate);
    }
    /**
     * Get MidocoCrmTemplate value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO[]
     */
    public function getMidocoCrmTemplate(): array
    {
        return $this->MidocoCrmTemplate;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmTemplate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmTemplateForArrayConstraintsFromSetMidocoCrmTemplate(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTemplatesResponseMidocoCrmTemplateItem) {
            // validation for constraint: itemType
            if (!$getTemplatesResponseMidocoCrmTemplateItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO) {
                $invalidValues[] = is_object($getTemplatesResponseMidocoCrmTemplateItem) ? get_class($getTemplatesResponseMidocoCrmTemplateItem) : sprintf('%s(%s)', gettype($getTemplatesResponseMidocoCrmTemplateItem), var_export($getTemplatesResponseMidocoCrmTemplateItem, true));
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetTemplatesResponse
     */
    public function setMidocoCrmTemplate(array $midocoCrmTemplate = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmTemplateArrayErrorMessage = self::validateMidocoCrmTemplateForArrayConstraintsFromSetMidocoCrmTemplate($midocoCrmTemplate))) {
            throw new InvalidArgumentException($midocoCrmTemplateArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmTemplate = $midocoCrmTemplate;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmTemplateDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetTemplatesResponse
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
