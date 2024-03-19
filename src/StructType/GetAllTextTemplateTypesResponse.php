<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllTextTemplateTypesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllTextTemplateTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoTextTemplateTypeExt
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTextTemplateTypeExt
     * @var \Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeExtDTO[]
     */
    protected ?array $MidocoTextTemplateTypeExt = null;
    /**
     * Constructor method for GetAllTextTemplateTypesResponse
     * @uses GetAllTextTemplateTypesResponse::setMidocoTextTemplateTypeExt()
     * @param \Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeExtDTO[] $midocoTextTemplateTypeExt
     */
    public function __construct(?array $midocoTextTemplateTypeExt = null)
    {
        $this
            ->setMidocoTextTemplateTypeExt($midocoTextTemplateTypeExt);
    }
    /**
     * Get MidocoTextTemplateTypeExt value
     * @return \Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeExtDTO[]
     */
    public function getMidocoTextTemplateTypeExt(): ?array
    {
        return $this->MidocoTextTemplateTypeExt;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTextTemplateTypeExt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTextTemplateTypeExt method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTextTemplateTypeExtForArrayConstraintFromSetMidocoTextTemplateTypeExt(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllTextTemplateTypesResponseMidocoTextTemplateTypeExtItem) {
            // validation for constraint: itemType
            if (!$getAllTextTemplateTypesResponseMidocoTextTemplateTypeExtItem instanceof \Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeExtDTO) {
                $invalidValues[] = is_object($getAllTextTemplateTypesResponseMidocoTextTemplateTypeExtItem) ? get_class($getAllTextTemplateTypesResponseMidocoTextTemplateTypeExtItem) : sprintf('%s(%s)', gettype($getAllTextTemplateTypesResponseMidocoTextTemplateTypeExtItem), var_export($getAllTextTemplateTypesResponseMidocoTextTemplateTypeExtItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTextTemplateTypeExt property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeExtDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTextTemplateTypeExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeExtDTO[] $midocoTextTemplateTypeExt
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAllTextTemplateTypesResponse
     */
    public function setMidocoTextTemplateTypeExt(?array $midocoTextTemplateTypeExt = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTextTemplateTypeExtArrayErrorMessage = self::validateMidocoTextTemplateTypeExtForArrayConstraintFromSetMidocoTextTemplateTypeExt($midocoTextTemplateTypeExt))) {
            throw new InvalidArgumentException($midocoTextTemplateTypeExtArrayErrorMessage, __LINE__);
        }
        $this->MidocoTextTemplateTypeExt = $midocoTextTemplateTypeExt;
        
        return $this;
    }
    /**
     * Add item to MidocoTextTemplateTypeExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeExtDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAllTextTemplateTypesResponse
     */
    public function addToMidocoTextTemplateTypeExt(\Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeExtDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeExtDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoTextTemplateTypeExt property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\TextTemplateTypeExtDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTextTemplateTypeExt[] = $item;
        
        return $this;
    }
}
