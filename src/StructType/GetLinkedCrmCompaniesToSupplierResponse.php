<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLinkedCrmCompaniesToSupplierResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetLinkedCrmCompaniesToSupplierResponse extends AbstractStructBase
{
    /**
     * The orgUnit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $orgUnit = null;
    /**
     * Constructor method for GetLinkedCrmCompaniesToSupplierResponse
     * @uses GetLinkedCrmCompaniesToSupplierResponse::setOrgUnit()
     * @param string[] $orgUnit
     */
    public function __construct(?array $orgUnit = null)
    {
        $this
            ->setOrgUnit($orgUnit);
    }
    /**
     * Get orgUnit value
     * @return string[]
     */
    public function getOrgUnit(): ?array
    {
        return $this->orgUnit;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrgUnit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgUnit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgUnitForArrayConstraintFromSetOrgUnit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getLinkedCrmCompaniesToSupplierResponseOrgUnitItem) {
            // validation for constraint: itemType
            if (!is_string($getLinkedCrmCompaniesToSupplierResponseOrgUnitItem)) {
                $invalidValues[] = is_object($getLinkedCrmCompaniesToSupplierResponseOrgUnitItem) ? get_class($getLinkedCrmCompaniesToSupplierResponseOrgUnitItem) : sprintf('%s(%s)', gettype($getLinkedCrmCompaniesToSupplierResponseOrgUnitItem), var_export($getLinkedCrmCompaniesToSupplierResponseOrgUnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orgUnit property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orgUnit value
     * @throws InvalidArgumentException
     * @param string[] $orgUnit
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetLinkedCrmCompaniesToSupplierResponse
     */
    public function setOrgUnit(?array $orgUnit = null): self
    {
        // validation for constraint: array
        if ('' !== ($orgUnitArrayErrorMessage = self::validateOrgUnitForArrayConstraintFromSetOrgUnit($orgUnit))) {
            throw new InvalidArgumentException($orgUnitArrayErrorMessage, __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Add item to orgUnit value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetLinkedCrmCompaniesToSupplierResponse
     */
    public function addToOrgUnit(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The orgUnit property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orgUnit[] = $item;
        
        return $this;
    }
}
