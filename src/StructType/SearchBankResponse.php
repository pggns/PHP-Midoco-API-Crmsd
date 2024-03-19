<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBankResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: searchBank --- searches a bank according to the BankSearch parameter. returns a list of BankSearchResults
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchBankResponse extends AbstractStructBase
{
    /**
     * The MidocoBankSearcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankSearcResult
     * @var \Pggns\MidocoApi\Crmsd\StructType\BankSearchResultDTO[]
     */
    protected ?array $MidocoBankSearcResult = null;
    /**
     * Constructor method for SearchBankResponse
     * @uses SearchBankResponse::setMidocoBankSearcResult()
     * @param \Pggns\MidocoApi\Crmsd\StructType\BankSearchResultDTO[] $midocoBankSearcResult
     */
    public function __construct(?array $midocoBankSearcResult = null)
    {
        $this
            ->setMidocoBankSearcResult($midocoBankSearcResult);
    }
    /**
     * Get MidocoBankSearcResult value
     * @return \Pggns\MidocoApi\Crmsd\StructType\BankSearchResultDTO[]
     */
    public function getMidocoBankSearcResult(): ?array
    {
        return $this->MidocoBankSearcResult;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBankSearcResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankSearcResult method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankSearcResultForArrayConstraintFromSetMidocoBankSearcResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchBankResponseMidocoBankSearcResultItem) {
            // validation for constraint: itemType
            if (!$searchBankResponseMidocoBankSearcResultItem instanceof \Pggns\MidocoApi\Crmsd\StructType\BankSearchResultDTO) {
                $invalidValues[] = is_object($searchBankResponseMidocoBankSearcResultItem) ? get_class($searchBankResponseMidocoBankSearcResultItem) : sprintf('%s(%s)', gettype($searchBankResponseMidocoBankSearcResultItem), var_export($searchBankResponseMidocoBankSearcResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankSearcResult property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\BankSearchResultDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankSearcResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\BankSearchResultDTO[] $midocoBankSearcResult
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBankResponse
     */
    public function setMidocoBankSearcResult(?array $midocoBankSearcResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankSearcResultArrayErrorMessage = self::validateMidocoBankSearcResultForArrayConstraintFromSetMidocoBankSearcResult($midocoBankSearcResult))) {
            throw new InvalidArgumentException($midocoBankSearcResultArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankSearcResult = $midocoBankSearcResult;
        
        return $this;
    }
    /**
     * Add item to MidocoBankSearcResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\BankSearchResultDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBankResponse
     */
    public function addToMidocoBankSearcResult(\Pggns\MidocoApi\Crmsd\StructType\BankSearchResultDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\BankSearchResultDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBankSearcResult property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\BankSearchResultDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankSearcResult[] = $item;
        
        return $this;
    }
}
