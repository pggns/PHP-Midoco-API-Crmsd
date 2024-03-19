<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getDocuments --- returns the list of documents corresponding to a customer having the id CustomerId
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDocumentsResponse extends AbstractStructBase
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
     * The totalNoOfRecords
     * @var int|null
     */
    protected ?int $totalNoOfRecords = null;
    /**
     * Constructor method for GetDocumentsResponse
     * @uses GetDocumentsResponse::setMidocoCrmDocument()
     * @uses GetDocumentsResponse::setTotalNoOfRecords()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO[] $midocoCrmDocument
     * @param int $totalNoOfRecords
     */
    public function __construct(?array $midocoCrmDocument = null, ?int $totalNoOfRecords = null)
    {
        $this
            ->setMidocoCrmDocument($midocoCrmDocument)
            ->setTotalNoOfRecords($totalNoOfRecords);
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
        foreach ($values as $getDocumentsResponseMidocoCrmDocumentItem) {
            // validation for constraint: itemType
            if (!$getDocumentsResponseMidocoCrmDocumentItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO) {
                $invalidValues[] = is_object($getDocumentsResponseMidocoCrmDocumentItem) ? get_class($getDocumentsResponseMidocoCrmDocumentItem) : sprintf('%s(%s)', gettype($getDocumentsResponseMidocoCrmDocumentItem), var_export($getDocumentsResponseMidocoCrmDocumentItem, true));
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDocumentsResponse
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDocumentsResponse
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
    /**
     * Get totalNoOfRecords value
     * @return int|null
     */
    public function getTotalNoOfRecords(): ?int
    {
        return $this->totalNoOfRecords;
    }
    /**
     * Set totalNoOfRecords value
     * @param int $totalNoOfRecords
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDocumentsResponse
     */
    public function setTotalNoOfRecords(?int $totalNoOfRecords = null): self
    {
        // validation for constraint: int
        if (!is_null($totalNoOfRecords) && !(is_int($totalNoOfRecords) || ctype_digit($totalNoOfRecords))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNoOfRecords, true), gettype($totalNoOfRecords)), __LINE__);
        }
        $this->totalNoOfRecords = $totalNoOfRecords;
        
        return $this;
    }
}
