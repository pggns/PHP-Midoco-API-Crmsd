<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetComplaintDocumentsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getComplaintDocuments --- returns the list of complaint documents for a given complaint
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetComplaintDocumentsResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmDocument
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO[]
     */
    protected ?array $MidocoCrmDocument = null;
    /**
     * Constructor method for GetComplaintDocumentsResponse
     * @uses GetComplaintDocumentsResponse::setMidocoCrmDocument()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO[] $midocoCrmDocument
     */
    public function __construct(?array $midocoCrmDocument = null)
    {
        $this
            ->setMidocoCrmDocument($midocoCrmDocument);
    }
    /**
     * Get MidocoCrmDocument value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO[]
     */
    public function getMidocoCrmDocument(): ?array
    {
        return $this->MidocoCrmDocument;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmDocument method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmDocumentForArrayConstraintFromSetMidocoCrmDocument(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getComplaintDocumentsResponseMidocoCrmDocumentItem) {
            // validation for constraint: itemType
            if (!$getComplaintDocumentsResponseMidocoCrmDocumentItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO) {
                $invalidValues[] = is_object($getComplaintDocumentsResponseMidocoCrmDocumentItem) ? get_class($getComplaintDocumentsResponseMidocoCrmDocumentItem) : sprintf('%s(%s)', gettype($getComplaintDocumentsResponseMidocoCrmDocumentItem), var_export($getComplaintDocumentsResponseMidocoCrmDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmDocument property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO[] $midocoCrmDocument
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetComplaintDocumentsResponse
     */
    public function setMidocoCrmDocument(?array $midocoCrmDocument = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmDocumentArrayErrorMessage = self::validateMidocoCrmDocumentForArrayConstraintFromSetMidocoCrmDocument($midocoCrmDocument))) {
            throw new InvalidArgumentException($midocoCrmDocumentArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmDocument = $midocoCrmDocument;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetComplaintDocumentsResponse
     */
    public function addToMidocoCrmDocument(\Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmDocument property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmDocument[] = $item;
        
        return $this;
    }
}
