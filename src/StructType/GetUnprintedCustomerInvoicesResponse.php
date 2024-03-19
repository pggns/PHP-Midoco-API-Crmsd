<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnprintedCustomerInvoicesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCustomerCollectiveInvoices --- returns the unprinted invoices assigned to the customer
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUnprintedCustomerInvoicesResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerInvoice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerInvoice
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInvoice[]
     */
    protected ?array $MidocoCustomerInvoice = null;
    /**
     * Constructor method for GetUnprintedCustomerInvoicesResponse
     * @uses GetUnprintedCustomerInvoicesResponse::setMidocoCustomerInvoice()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInvoice[] $midocoCustomerInvoice
     */
    public function __construct(?array $midocoCustomerInvoice = null)
    {
        $this
            ->setMidocoCustomerInvoice($midocoCustomerInvoice);
    }
    /**
     * Get MidocoCustomerInvoice value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInvoice[]
     */
    public function getMidocoCustomerInvoice(): ?array
    {
        return $this->MidocoCustomerInvoice;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerInvoice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerInvoice method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerInvoiceForArrayConstraintFromSetMidocoCustomerInvoice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUnprintedCustomerInvoicesResponseMidocoCustomerInvoiceItem) {
            // validation for constraint: itemType
            if (!$getUnprintedCustomerInvoicesResponseMidocoCustomerInvoiceItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInvoice) {
                $invalidValues[] = is_object($getUnprintedCustomerInvoicesResponseMidocoCustomerInvoiceItem) ? get_class($getUnprintedCustomerInvoicesResponseMidocoCustomerInvoiceItem) : sprintf('%s(%s)', gettype($getUnprintedCustomerInvoicesResponseMidocoCustomerInvoiceItem), var_export($getUnprintedCustomerInvoicesResponseMidocoCustomerInvoiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerInvoice property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInvoice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerInvoice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInvoice[] $midocoCustomerInvoice
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetUnprintedCustomerInvoicesResponse
     */
    public function setMidocoCustomerInvoice(?array $midocoCustomerInvoice = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerInvoiceArrayErrorMessage = self::validateMidocoCustomerInvoiceForArrayConstraintFromSetMidocoCustomerInvoice($midocoCustomerInvoice))) {
            throw new InvalidArgumentException($midocoCustomerInvoiceArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerInvoice = $midocoCustomerInvoice;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerInvoice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInvoice $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetUnprintedCustomerInvoicesResponse
     */
    public function addToMidocoCustomerInvoice(\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInvoice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInvoice) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerInvoice property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInvoice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerInvoice[] = $item;
        
        return $this;
    }
}
