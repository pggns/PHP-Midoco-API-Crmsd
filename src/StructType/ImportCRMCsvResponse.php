<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportCRMCsvResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ImportCRMCsvResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmImportErrors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmImportErrors
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmImportErrors[]
     */
    protected ?array $MidocoCrmImportErrors = null;
    /**
     * Constructor method for ImportCRMCsvResponse
     * @uses ImportCRMCsvResponse::setMidocoCrmImportErrors()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmImportErrors[] $midocoCrmImportErrors
     */
    public function __construct(?array $midocoCrmImportErrors = null)
    {
        $this
            ->setMidocoCrmImportErrors($midocoCrmImportErrors);
    }
    /**
     * Get MidocoCrmImportErrors value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmImportErrors[]
     */
    public function getMidocoCrmImportErrors(): ?array
    {
        return $this->MidocoCrmImportErrors;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmImportErrors method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmImportErrors method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmImportErrorsForArrayConstraintFromSetMidocoCrmImportErrors(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $importCRMCsvResponseMidocoCrmImportErrorsItem) {
            // validation for constraint: itemType
            if (!$importCRMCsvResponseMidocoCrmImportErrorsItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmImportErrors) {
                $invalidValues[] = is_object($importCRMCsvResponseMidocoCrmImportErrorsItem) ? get_class($importCRMCsvResponseMidocoCrmImportErrorsItem) : sprintf('%s(%s)', gettype($importCRMCsvResponseMidocoCrmImportErrorsItem), var_export($importCRMCsvResponseMidocoCrmImportErrorsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmImportErrors property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmImportErrors, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmImportErrors value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmImportErrors[] $midocoCrmImportErrors
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportCRMCsvResponse
     */
    public function setMidocoCrmImportErrors(?array $midocoCrmImportErrors = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmImportErrorsArrayErrorMessage = self::validateMidocoCrmImportErrorsForArrayConstraintFromSetMidocoCrmImportErrors($midocoCrmImportErrors))) {
            throw new InvalidArgumentException($midocoCrmImportErrorsArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmImportErrors = $midocoCrmImportErrors;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmImportErrors value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmImportErrors $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportCRMCsvResponse
     */
    public function addToMidocoCrmImportErrors(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmImportErrors $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmImportErrors) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmImportErrors property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmImportErrors, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmImportErrors[] = $item;
        
        return $this;
    }
}
