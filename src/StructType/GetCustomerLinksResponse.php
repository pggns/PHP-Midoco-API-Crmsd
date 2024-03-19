<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerLinksResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCustomerLinks --- returns a list containing the links of the customer
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerLinksResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomerLink
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCustomerLink
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerLinkDTO[]
     */
    protected ?array $MidocoCrmCustomerLink = null;
    /**
     * Constructor method for GetCustomerLinksResponse
     * @uses GetCustomerLinksResponse::setMidocoCrmCustomerLink()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerLinkDTO[] $midocoCrmCustomerLink
     */
    public function __construct(?array $midocoCrmCustomerLink = null)
    {
        $this
            ->setMidocoCrmCustomerLink($midocoCrmCustomerLink);
    }
    /**
     * Get MidocoCrmCustomerLink value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerLinkDTO[]
     */
    public function getMidocoCrmCustomerLink(): ?array
    {
        return $this->MidocoCrmCustomerLink;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmCustomerLink method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCustomerLink method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCustomerLinkForArrayConstraintFromSetMidocoCrmCustomerLink(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCustomerLinksResponseMidocoCrmCustomerLinkItem) {
            // validation for constraint: itemType
            if (!$getCustomerLinksResponseMidocoCrmCustomerLinkItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerLinkDTO) {
                $invalidValues[] = is_object($getCustomerLinksResponseMidocoCrmCustomerLinkItem) ? get_class($getCustomerLinksResponseMidocoCrmCustomerLinkItem) : sprintf('%s(%s)', gettype($getCustomerLinksResponseMidocoCrmCustomerLinkItem), var_export($getCustomerLinksResponseMidocoCrmCustomerLinkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCustomerLink property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerLinkDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCustomerLink value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerLinkDTO[] $midocoCrmCustomerLink
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerLinksResponse
     */
    public function setMidocoCrmCustomerLink(?array $midocoCrmCustomerLink = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCustomerLinkArrayErrorMessage = self::validateMidocoCrmCustomerLinkForArrayConstraintFromSetMidocoCrmCustomerLink($midocoCrmCustomerLink))) {
            throw new InvalidArgumentException($midocoCrmCustomerLinkArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCustomerLink = $midocoCrmCustomerLink;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCustomerLink value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerLinkDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerLinksResponse
     */
    public function addToMidocoCrmCustomerLink(\Pggns\MidocoApi\Crmsd\StructType\CrmCustomerLinkDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerLinkDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCustomerLink property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerLinkDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCustomerLink[] = $item;
        
        return $this;
    }
}
