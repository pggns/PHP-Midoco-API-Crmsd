<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMailForDocumentIdRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailForDocumentIdRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentBinary
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: MidocoDocumentBinary
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentBinary[]
     */
    protected array $MidocoDocumentBinary;
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * Constructor method for GetMailForDocumentIdRequest
     * @uses GetMailForDocumentIdRequest::setMidocoDocumentBinary()
     * @uses GetMailForDocumentIdRequest::setMidocoCrmCustomer()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentBinary[] $midocoDocumentBinary
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $midocoCrmCustomer
     */
    public function __construct(array $midocoDocumentBinary, ?\Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $midocoCrmCustomer = null)
    {
        $this
            ->setMidocoDocumentBinary($midocoDocumentBinary)
            ->setMidocoCrmCustomer($midocoCrmCustomer);
    }
    /**
     * Get MidocoDocumentBinary value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentBinary[]
     */
    public function getMidocoDocumentBinary(): array
    {
        return $this->MidocoDocumentBinary;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDocumentBinary method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDocumentBinary method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDocumentBinaryForArrayConstraintFromSetMidocoDocumentBinary(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMailForDocumentIdRequestMidocoDocumentBinaryItem) {
            // validation for constraint: itemType
            if (!$getMailForDocumentIdRequestMidocoDocumentBinaryItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentBinary) {
                $invalidValues[] = is_object($getMailForDocumentIdRequestMidocoDocumentBinaryItem) ? get_class($getMailForDocumentIdRequestMidocoDocumentBinaryItem) : sprintf('%s(%s)', gettype($getMailForDocumentIdRequestMidocoDocumentBinaryItem), var_export($getMailForDocumentIdRequestMidocoDocumentBinaryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDocumentBinary property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentBinary, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDocumentBinary value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentBinary[] $midocoDocumentBinary
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetMailForDocumentIdRequest
     */
    public function setMidocoDocumentBinary(array $midocoDocumentBinary): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDocumentBinaryArrayErrorMessage = self::validateMidocoDocumentBinaryForArrayConstraintFromSetMidocoDocumentBinary($midocoDocumentBinary))) {
            throw new InvalidArgumentException($midocoDocumentBinaryArrayErrorMessage, __LINE__);
        }
        $this->MidocoDocumentBinary = $midocoDocumentBinary;
        
        return $this;
    }
    /**
     * Add item to MidocoDocumentBinary value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentBinary $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetMailForDocumentIdRequest
     */
    public function addToMidocoDocumentBinary(\Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentBinary $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentBinary) {
            throw new InvalidArgumentException(sprintf('The MidocoDocumentBinary property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoDocumentBinary, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDocumentBinary[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetMailForDocumentIdRequest
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
}
