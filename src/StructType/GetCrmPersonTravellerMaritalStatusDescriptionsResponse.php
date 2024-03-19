<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmPersonTravellerMaritalStatusDescriptionsResponse
 * StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrmPersonTravellerMaritalStatusDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmPersonTravellerMaritalStatusDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmPersonTravellerMaritalStatusDescription
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmTravellerMaStatusDescrDTO[]
     */
    protected ?array $MidocoCrmPersonTravellerMaritalStatusDescription = null;
    /**
     * Constructor method for GetCrmPersonTravellerMaritalStatusDescriptionsResponse
     * @uses GetCrmPersonTravellerMaritalStatusDescriptionsResponse::setMidocoCrmPersonTravellerMaritalStatusDescription()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmTravellerMaStatusDescrDTO[] $midocoCrmPersonTravellerMaritalStatusDescription
     */
    public function __construct(?array $midocoCrmPersonTravellerMaritalStatusDescription = null)
    {
        $this
            ->setMidocoCrmPersonTravellerMaritalStatusDescription($midocoCrmPersonTravellerMaritalStatusDescription);
    }
    /**
     * Get MidocoCrmPersonTravellerMaritalStatusDescription value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmTravellerMaStatusDescrDTO[]
     */
    public function getMidocoCrmPersonTravellerMaritalStatusDescription(): ?array
    {
        return $this->MidocoCrmPersonTravellerMaritalStatusDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmPersonTravellerMaritalStatusDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmPersonTravellerMaritalStatusDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmPersonTravellerMaritalStatusDescriptionForArrayConstraintFromSetMidocoCrmPersonTravellerMaritalStatusDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCrmPersonTravellerMaritalStatusDescriptionsResponseMidocoCrmPersonTravellerMaritalStatusDescriptionItem) {
            // validation for constraint: itemType
            if (!$getCrmPersonTravellerMaritalStatusDescriptionsResponseMidocoCrmPersonTravellerMaritalStatusDescriptionItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmTravellerMaStatusDescrDTO) {
                $invalidValues[] = is_object($getCrmPersonTravellerMaritalStatusDescriptionsResponseMidocoCrmPersonTravellerMaritalStatusDescriptionItem) ? get_class($getCrmPersonTravellerMaritalStatusDescriptionsResponseMidocoCrmPersonTravellerMaritalStatusDescriptionItem) : sprintf('%s(%s)', gettype($getCrmPersonTravellerMaritalStatusDescriptionsResponseMidocoCrmPersonTravellerMaritalStatusDescriptionItem), var_export($getCrmPersonTravellerMaritalStatusDescriptionsResponseMidocoCrmPersonTravellerMaritalStatusDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmPersonTravellerMaritalStatusDescription property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmTravellerMaStatusDescrDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmPersonTravellerMaritalStatusDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmTravellerMaStatusDescrDTO[] $midocoCrmPersonTravellerMaritalStatusDescription
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmPersonTravellerMaritalStatusDescriptionsResponse
     */
    public function setMidocoCrmPersonTravellerMaritalStatusDescription(?array $midocoCrmPersonTravellerMaritalStatusDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmPersonTravellerMaritalStatusDescriptionArrayErrorMessage = self::validateMidocoCrmPersonTravellerMaritalStatusDescriptionForArrayConstraintFromSetMidocoCrmPersonTravellerMaritalStatusDescription($midocoCrmPersonTravellerMaritalStatusDescription))) {
            throw new InvalidArgumentException($midocoCrmPersonTravellerMaritalStatusDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmPersonTravellerMaritalStatusDescription = $midocoCrmPersonTravellerMaritalStatusDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmPersonTravellerMaritalStatusDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmTravellerMaStatusDescrDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmPersonTravellerMaritalStatusDescriptionsResponse
     */
    public function addToMidocoCrmPersonTravellerMaritalStatusDescription(\Pggns\MidocoApi\Crmsd\StructType\CrmTravellerMaStatusDescrDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmTravellerMaStatusDescrDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmPersonTravellerMaritalStatusDescription property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmTravellerMaStatusDescrDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmPersonTravellerMaritalStatusDescription[] = $item;
        
        return $this;
    }
}
