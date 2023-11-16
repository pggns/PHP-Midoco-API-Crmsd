<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableLockReasonDescriptionsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getLockReasonDescriptions --- returns a list of lock reason descriptions for the given lock reason
 * @subpackage Structs
 */
class GetAvailableLockReasonDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmLockDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmLockDescription
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmLockDescriptionDTO[]
     */
    protected array $MidocoCrmLockDescription = [];
    /**
     * Constructor method for GetAvailableLockReasonDescriptionsResponse
     * @uses GetAvailableLockReasonDescriptionsResponse::setMidocoCrmLockDescription()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmLockDescriptionDTO[] $midocoCrmLockDescription
     */
    public function __construct(array $midocoCrmLockDescription = [])
    {
        $this
            ->setMidocoCrmLockDescription($midocoCrmLockDescription);
    }
    /**
     * Get MidocoCrmLockDescription value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmLockDescriptionDTO[]
     */
    public function getMidocoCrmLockDescription(): array
    {
        return $this->MidocoCrmLockDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmLockDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmLockDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmLockDescriptionForArrayConstraintsFromSetMidocoCrmLockDescription(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableLockReasonDescriptionsResponseMidocoCrmLockDescriptionItem) {
            // validation for constraint: itemType
            if (!$getAvailableLockReasonDescriptionsResponseMidocoCrmLockDescriptionItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmLockDescriptionDTO) {
                $invalidValues[] = is_object($getAvailableLockReasonDescriptionsResponseMidocoCrmLockDescriptionItem) ? get_class($getAvailableLockReasonDescriptionsResponseMidocoCrmLockDescriptionItem) : sprintf('%s(%s)', gettype($getAvailableLockReasonDescriptionsResponseMidocoCrmLockDescriptionItem), var_export($getAvailableLockReasonDescriptionsResponseMidocoCrmLockDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmLockDescription property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmLockDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmLockDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmLockDescriptionDTO[] $midocoCrmLockDescription
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAvailableLockReasonDescriptionsResponse
     */
    public function setMidocoCrmLockDescription(array $midocoCrmLockDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmLockDescriptionArrayErrorMessage = self::validateMidocoCrmLockDescriptionForArrayConstraintsFromSetMidocoCrmLockDescription($midocoCrmLockDescription))) {
            throw new InvalidArgumentException($midocoCrmLockDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmLockDescription = $midocoCrmLockDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmLockDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmLockDescriptionDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAvailableLockReasonDescriptionsResponse
     */
    public function addToMidocoCrmLockDescription(\Pggns\MidocoApi\Crmsd\StructType\CrmLockDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmLockDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmLockDescription property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmLockDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmLockDescription[] = $item;
        
        return $this;
    }
}
