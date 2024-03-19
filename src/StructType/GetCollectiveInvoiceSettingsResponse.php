<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCollectiveInvoiceSettingsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCollectiveInvoiceSettings --- returns the collective invoice settings for a customer
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCollectiveInvoiceSettingsResponse extends AbstractStructBase
{
    /**
     * The MidocoCollectiveInvoiceSetting
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCollectiveInvoiceSetting
     * @var \Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO[]
     */
    protected ?array $MidocoCollectiveInvoiceSetting = null;
    /**
     * Constructor method for GetCollectiveInvoiceSettingsResponse
     * @uses GetCollectiveInvoiceSettingsResponse::setMidocoCollectiveInvoiceSetting()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO[] $midocoCollectiveInvoiceSetting
     */
    public function __construct(?array $midocoCollectiveInvoiceSetting = null)
    {
        $this
            ->setMidocoCollectiveInvoiceSetting($midocoCollectiveInvoiceSetting);
    }
    /**
     * Get MidocoCollectiveInvoiceSetting value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO[]
     */
    public function getMidocoCollectiveInvoiceSetting(): ?array
    {
        return $this->MidocoCollectiveInvoiceSetting;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCollectiveInvoiceSetting method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCollectiveInvoiceSetting method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCollectiveInvoiceSettingForArrayConstraintFromSetMidocoCollectiveInvoiceSetting(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCollectiveInvoiceSettingsResponseMidocoCollectiveInvoiceSettingItem) {
            // validation for constraint: itemType
            if (!$getCollectiveInvoiceSettingsResponseMidocoCollectiveInvoiceSettingItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO) {
                $invalidValues[] = is_object($getCollectiveInvoiceSettingsResponseMidocoCollectiveInvoiceSettingItem) ? get_class($getCollectiveInvoiceSettingsResponseMidocoCollectiveInvoiceSettingItem) : sprintf('%s(%s)', gettype($getCollectiveInvoiceSettingsResponseMidocoCollectiveInvoiceSettingItem), var_export($getCollectiveInvoiceSettingsResponseMidocoCollectiveInvoiceSettingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCollectiveInvoiceSetting property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCollectiveInvoiceSetting value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO[] $midocoCollectiveInvoiceSetting
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCollectiveInvoiceSettingsResponse
     */
    public function setMidocoCollectiveInvoiceSetting(?array $midocoCollectiveInvoiceSetting = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCollectiveInvoiceSettingArrayErrorMessage = self::validateMidocoCollectiveInvoiceSettingForArrayConstraintFromSetMidocoCollectiveInvoiceSetting($midocoCollectiveInvoiceSetting))) {
            throw new InvalidArgumentException($midocoCollectiveInvoiceSettingArrayErrorMessage, __LINE__);
        }
        $this->MidocoCollectiveInvoiceSetting = $midocoCollectiveInvoiceSetting;
        
        return $this;
    }
    /**
     * Add item to MidocoCollectiveInvoiceSetting value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCollectiveInvoiceSettingsResponse
     */
    public function addToMidocoCollectiveInvoiceSetting(\Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCollectiveInvoiceSetting property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCollectiveInvoiceSetting[] = $item;
        
        return $this;
    }
}
