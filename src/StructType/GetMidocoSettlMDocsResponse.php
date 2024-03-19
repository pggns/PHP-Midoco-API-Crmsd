<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSettlMDocsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getMidocoSettlMDocs --- returns the Midoco MDocs for the given customer id and/or settl mdoc id
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoSettlMDocsResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlMdoc
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmMidocoSettlMdoc
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlMdoc[]
     */
    protected ?array $MidocoCrmMidocoSettlMdoc = null;
    /**
     * Constructor method for GetMidocoSettlMDocsResponse
     * @uses GetMidocoSettlMDocsResponse::setMidocoCrmMidocoSettlMdoc()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlMdoc[] $midocoCrmMidocoSettlMdoc
     */
    public function __construct(?array $midocoCrmMidocoSettlMdoc = null)
    {
        $this
            ->setMidocoCrmMidocoSettlMdoc($midocoCrmMidocoSettlMdoc);
    }
    /**
     * Get MidocoCrmMidocoSettlMdoc value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlMdoc[]
     */
    public function getMidocoCrmMidocoSettlMdoc(): ?array
    {
        return $this->MidocoCrmMidocoSettlMdoc;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmMidocoSettlMdoc method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmMidocoSettlMdoc method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmMidocoSettlMdocForArrayConstraintFromSetMidocoCrmMidocoSettlMdoc(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoSettlMDocsResponseMidocoCrmMidocoSettlMdocItem) {
            // validation for constraint: itemType
            if (!$getMidocoSettlMDocsResponseMidocoCrmMidocoSettlMdocItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlMdoc) {
                $invalidValues[] = is_object($getMidocoSettlMDocsResponseMidocoCrmMidocoSettlMdocItem) ? get_class($getMidocoSettlMDocsResponseMidocoCrmMidocoSettlMdocItem) : sprintf('%s(%s)', gettype($getMidocoSettlMDocsResponseMidocoCrmMidocoSettlMdocItem), var_export($getMidocoSettlMDocsResponseMidocoCrmMidocoSettlMdocItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmMidocoSettlMdoc property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlMdoc, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmMidocoSettlMdoc value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlMdoc[] $midocoCrmMidocoSettlMdoc
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetMidocoSettlMDocsResponse
     */
    public function setMidocoCrmMidocoSettlMdoc(?array $midocoCrmMidocoSettlMdoc = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmMidocoSettlMdocArrayErrorMessage = self::validateMidocoCrmMidocoSettlMdocForArrayConstraintFromSetMidocoCrmMidocoSettlMdoc($midocoCrmMidocoSettlMdoc))) {
            throw new InvalidArgumentException($midocoCrmMidocoSettlMdocArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmMidocoSettlMdoc = $midocoCrmMidocoSettlMdoc;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmMidocoSettlMdoc value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlMdoc $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetMidocoSettlMDocsResponse
     */
    public function addToMidocoCrmMidocoSettlMdoc(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlMdoc $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlMdoc) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmMidocoSettlMdoc property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmMidocoSettlMdoc, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmMidocoSettlMdoc[] = $item;
        
        return $this;
    }
}
