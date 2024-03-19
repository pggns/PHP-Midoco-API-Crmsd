<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableLockReasonsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getLockReasons--- returns a list of lock reason for the given lock reason with parent-entries
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableLockReasonsResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmLockReason
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmLockReason
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmLockReasonDTO[]
     */
    protected ?array $MidocoCrmLockReason = null;
    /**
     * Constructor method for GetAvailableLockReasonsResponse
     * @uses GetAvailableLockReasonsResponse::setMidocoCrmLockReason()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmLockReasonDTO[] $midocoCrmLockReason
     */
    public function __construct(?array $midocoCrmLockReason = null)
    {
        $this
            ->setMidocoCrmLockReason($midocoCrmLockReason);
    }
    /**
     * Get MidocoCrmLockReason value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmLockReasonDTO[]
     */
    public function getMidocoCrmLockReason(): ?array
    {
        return $this->MidocoCrmLockReason;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmLockReason method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmLockReason method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmLockReasonForArrayConstraintFromSetMidocoCrmLockReason(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableLockReasonsResponseMidocoCrmLockReasonItem) {
            // validation for constraint: itemType
            if (!$getAvailableLockReasonsResponseMidocoCrmLockReasonItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmLockReasonDTO) {
                $invalidValues[] = is_object($getAvailableLockReasonsResponseMidocoCrmLockReasonItem) ? get_class($getAvailableLockReasonsResponseMidocoCrmLockReasonItem) : sprintf('%s(%s)', gettype($getAvailableLockReasonsResponseMidocoCrmLockReasonItem), var_export($getAvailableLockReasonsResponseMidocoCrmLockReasonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmLockReason property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmLockReasonDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmLockReason value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmLockReasonDTO[] $midocoCrmLockReason
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAvailableLockReasonsResponse
     */
    public function setMidocoCrmLockReason(?array $midocoCrmLockReason = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmLockReasonArrayErrorMessage = self::validateMidocoCrmLockReasonForArrayConstraintFromSetMidocoCrmLockReason($midocoCrmLockReason))) {
            throw new InvalidArgumentException($midocoCrmLockReasonArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmLockReason = $midocoCrmLockReason;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmLockReason value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmLockReasonDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAvailableLockReasonsResponse
     */
    public function addToMidocoCrmLockReason(\Pggns\MidocoApi\Crmsd\StructType\CrmLockReasonDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmLockReasonDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmLockReason property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmLockReasonDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmLockReason[] = $item;
        
        return $this;
    }
}
