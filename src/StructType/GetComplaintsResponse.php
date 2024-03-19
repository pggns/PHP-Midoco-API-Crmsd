<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetComplaintsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getComplaints --- returns the list of complaints of a customer (given by customer id)
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetComplaintsResponse extends AbstractStructBase
{
    /**
     * The MidocoComplaint
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoComplaint
     * @var \Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO[]
     */
    protected ?array $MidocoComplaint = null;
    /**
     * Constructor method for GetComplaintsResponse
     * @uses GetComplaintsResponse::setMidocoComplaint()
     * @param \Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO[] $midocoComplaint
     */
    public function __construct(?array $midocoComplaint = null)
    {
        $this
            ->setMidocoComplaint($midocoComplaint);
    }
    /**
     * Get MidocoComplaint value
     * @return \Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO[]
     */
    public function getMidocoComplaint(): ?array
    {
        return $this->MidocoComplaint;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoComplaint method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoComplaint method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoComplaintForArrayConstraintFromSetMidocoComplaint(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getComplaintsResponseMidocoComplaintItem) {
            // validation for constraint: itemType
            if (!$getComplaintsResponseMidocoComplaintItem instanceof \Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO) {
                $invalidValues[] = is_object($getComplaintsResponseMidocoComplaintItem) ? get_class($getComplaintsResponseMidocoComplaintItem) : sprintf('%s(%s)', gettype($getComplaintsResponseMidocoComplaintItem), var_export($getComplaintsResponseMidocoComplaintItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoComplaint property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoComplaint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO[] $midocoComplaint
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetComplaintsResponse
     */
    public function setMidocoComplaint(?array $midocoComplaint = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoComplaintArrayErrorMessage = self::validateMidocoComplaintForArrayConstraintFromSetMidocoComplaint($midocoComplaint))) {
            throw new InvalidArgumentException($midocoComplaintArrayErrorMessage, __LINE__);
        }
        $this->MidocoComplaint = $midocoComplaint;
        
        return $this;
    }
    /**
     * Add item to MidocoComplaint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetComplaintsResponse
     */
    public function addToMidocoComplaint(\Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoComplaint property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\ComplaintDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoComplaint[] = $item;
        
        return $this;
    }
}
