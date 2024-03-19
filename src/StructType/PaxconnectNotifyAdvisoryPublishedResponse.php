<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaxconnectNotifyAdvisoryPublishedResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaxconnectNotifyAdvisoryPublishedResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmExternalOffer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmExternalOffer
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer[]
     */
    protected ?array $MidocoCrmExternalOffer = null;
    /**
     * Constructor method for PaxconnectNotifyAdvisoryPublishedResponse
     * @uses PaxconnectNotifyAdvisoryPublishedResponse::setMidocoCrmExternalOffer()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer[] $midocoCrmExternalOffer
     */
    public function __construct(?array $midocoCrmExternalOffer = null)
    {
        $this
            ->setMidocoCrmExternalOffer($midocoCrmExternalOffer);
    }
    /**
     * Get MidocoCrmExternalOffer value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer[]
     */
    public function getMidocoCrmExternalOffer(): ?array
    {
        return $this->MidocoCrmExternalOffer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmExternalOffer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmExternalOffer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmExternalOfferForArrayConstraintFromSetMidocoCrmExternalOffer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $paxconnectNotifyAdvisoryPublishedResponseMidocoCrmExternalOfferItem) {
            // validation for constraint: itemType
            if (!$paxconnectNotifyAdvisoryPublishedResponseMidocoCrmExternalOfferItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer) {
                $invalidValues[] = is_object($paxconnectNotifyAdvisoryPublishedResponseMidocoCrmExternalOfferItem) ? get_class($paxconnectNotifyAdvisoryPublishedResponseMidocoCrmExternalOfferItem) : sprintf('%s(%s)', gettype($paxconnectNotifyAdvisoryPublishedResponseMidocoCrmExternalOfferItem), var_export($paxconnectNotifyAdvisoryPublishedResponseMidocoCrmExternalOfferItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmExternalOffer property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmExternalOffer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer[] $midocoCrmExternalOffer
     * @return \Pggns\MidocoApi\Crmsd\StructType\PaxconnectNotifyAdvisoryPublishedResponse
     */
    public function setMidocoCrmExternalOffer(?array $midocoCrmExternalOffer = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmExternalOfferArrayErrorMessage = self::validateMidocoCrmExternalOfferForArrayConstraintFromSetMidocoCrmExternalOffer($midocoCrmExternalOffer))) {
            throw new InvalidArgumentException($midocoCrmExternalOfferArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmExternalOffer = $midocoCrmExternalOffer;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmExternalOffer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\PaxconnectNotifyAdvisoryPublishedResponse
     */
    public function addToMidocoCrmExternalOffer(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmExternalOffer property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmExternalOffer[] = $item;
        
        return $this;
    }
}
