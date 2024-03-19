<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmCampaignesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: returns the list of campaigns in which the customer participated
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrmCampaignesResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmCampaign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCampaign
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCampaign[]
     */
    protected ?array $MidocoCrmCampaign = null;
    /**
     * The totalNoOfRecords
     * @var int|null
     */
    protected ?int $totalNoOfRecords = null;
    /**
     * Constructor method for GetCrmCampaignesResponse
     * @uses GetCrmCampaignesResponse::setMidocoCrmCampaign()
     * @uses GetCrmCampaignesResponse::setTotalNoOfRecords()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCampaign[] $midocoCrmCampaign
     * @param int $totalNoOfRecords
     */
    public function __construct(?array $midocoCrmCampaign = null, ?int $totalNoOfRecords = null)
    {
        $this
            ->setMidocoCrmCampaign($midocoCrmCampaign)
            ->setTotalNoOfRecords($totalNoOfRecords);
    }
    /**
     * Get MidocoCrmCampaign value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCampaign[]
     */
    public function getMidocoCrmCampaign(): ?array
    {
        return $this->MidocoCrmCampaign;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmCampaign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCampaign method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCampaignForArrayConstraintFromSetMidocoCrmCampaign(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCrmCampaignesResponseMidocoCrmCampaignItem) {
            // validation for constraint: itemType
            if (!$getCrmCampaignesResponseMidocoCrmCampaignItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCampaign) {
                $invalidValues[] = is_object($getCrmCampaignesResponseMidocoCrmCampaignItem) ? get_class($getCrmCampaignesResponseMidocoCrmCampaignItem) : sprintf('%s(%s)', gettype($getCrmCampaignesResponseMidocoCrmCampaignItem), var_export($getCrmCampaignesResponseMidocoCrmCampaignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCampaign property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCampaign, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCampaign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCampaign[] $midocoCrmCampaign
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmCampaignesResponse
     */
    public function setMidocoCrmCampaign(?array $midocoCrmCampaign = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCampaignArrayErrorMessage = self::validateMidocoCrmCampaignForArrayConstraintFromSetMidocoCrmCampaign($midocoCrmCampaign))) {
            throw new InvalidArgumentException($midocoCrmCampaignArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCampaign = $midocoCrmCampaign;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCampaign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCampaign $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmCampaignesResponse
     */
    public function addToMidocoCrmCampaign(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCampaign $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCampaign) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCampaign property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCampaign, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCampaign[] = $item;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmCampaignesResponse
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
