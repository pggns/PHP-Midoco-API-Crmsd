<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetComplaintReasonsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getComplaintReasons --- returns the list of complaint reasons for a complaint
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetComplaintReasonsResponse extends AbstractStructBase
{
    /**
     * The MidocoComplaintReasonDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoComplaintReasonDescription
     * @var \Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDescrDTO[]
     */
    protected ?array $MidocoComplaintReasonDescription = null;
    /**
     * Constructor method for GetComplaintReasonsResponse
     * @uses GetComplaintReasonsResponse::setMidocoComplaintReasonDescription()
     * @param \Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDescrDTO[] $midocoComplaintReasonDescription
     */
    public function __construct(?array $midocoComplaintReasonDescription = null)
    {
        $this
            ->setMidocoComplaintReasonDescription($midocoComplaintReasonDescription);
    }
    /**
     * Get MidocoComplaintReasonDescription value
     * @return \Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDescrDTO[]
     */
    public function getMidocoComplaintReasonDescription(): ?array
    {
        return $this->MidocoComplaintReasonDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoComplaintReasonDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoComplaintReasonDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoComplaintReasonDescriptionForArrayConstraintFromSetMidocoComplaintReasonDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getComplaintReasonsResponseMidocoComplaintReasonDescriptionItem) {
            // validation for constraint: itemType
            if (!$getComplaintReasonsResponseMidocoComplaintReasonDescriptionItem instanceof \Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDescrDTO) {
                $invalidValues[] = is_object($getComplaintReasonsResponseMidocoComplaintReasonDescriptionItem) ? get_class($getComplaintReasonsResponseMidocoComplaintReasonDescriptionItem) : sprintf('%s(%s)', gettype($getComplaintReasonsResponseMidocoComplaintReasonDescriptionItem), var_export($getComplaintReasonsResponseMidocoComplaintReasonDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoComplaintReasonDescription property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDescrDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoComplaintReasonDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDescrDTO[] $midocoComplaintReasonDescription
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetComplaintReasonsResponse
     */
    public function setMidocoComplaintReasonDescription(?array $midocoComplaintReasonDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoComplaintReasonDescriptionArrayErrorMessage = self::validateMidocoComplaintReasonDescriptionForArrayConstraintFromSetMidocoComplaintReasonDescription($midocoComplaintReasonDescription))) {
            throw new InvalidArgumentException($midocoComplaintReasonDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoComplaintReasonDescription = $midocoComplaintReasonDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoComplaintReasonDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDescrDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetComplaintReasonsResponse
     */
    public function addToMidocoComplaintReasonDescription(\Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDescrDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDescrDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoComplaintReasonDescription property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\ComplaintReasonDescrDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoComplaintReasonDescription[] = $item;
        
        return $this;
    }
}
