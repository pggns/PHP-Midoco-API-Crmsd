<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExternalSystemsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExternalSystemsResponse extends AbstractStructBase
{
    /**
     * The MidocoExternalSystem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoExternalSystem
     * @var \Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO[]
     */
    protected ?array $MidocoExternalSystem = null;
    /**
     * Constructor method for GetExternalSystemsResponse
     * @uses GetExternalSystemsResponse::setMidocoExternalSystem()
     * @param \Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO[] $midocoExternalSystem
     */
    public function __construct(?array $midocoExternalSystem = null)
    {
        $this
            ->setMidocoExternalSystem($midocoExternalSystem);
    }
    /**
     * Get MidocoExternalSystem value
     * @return \Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO[]
     */
    public function getMidocoExternalSystem(): ?array
    {
        return $this->MidocoExternalSystem;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoExternalSystem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoExternalSystem method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoExternalSystemForArrayConstraintFromSetMidocoExternalSystem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExternalSystemsResponseMidocoExternalSystemItem) {
            // validation for constraint: itemType
            if (!$getExternalSystemsResponseMidocoExternalSystemItem instanceof \Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO) {
                $invalidValues[] = is_object($getExternalSystemsResponseMidocoExternalSystemItem) ? get_class($getExternalSystemsResponseMidocoExternalSystemItem) : sprintf('%s(%s)', gettype($getExternalSystemsResponseMidocoExternalSystemItem), var_export($getExternalSystemsResponseMidocoExternalSystemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoExternalSystem property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoExternalSystem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO[] $midocoExternalSystem
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemsResponse
     */
    public function setMidocoExternalSystem(?array $midocoExternalSystem = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoExternalSystemArrayErrorMessage = self::validateMidocoExternalSystemForArrayConstraintFromSetMidocoExternalSystem($midocoExternalSystem))) {
            throw new InvalidArgumentException($midocoExternalSystemArrayErrorMessage, __LINE__);
        }
        $this->MidocoExternalSystem = $midocoExternalSystem;
        
        return $this;
    }
    /**
     * Add item to MidocoExternalSystem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemsResponse
     */
    public function addToMidocoExternalSystem(\Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoExternalSystem property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoExternalSystem[] = $item;
        
        return $this;
    }
}
