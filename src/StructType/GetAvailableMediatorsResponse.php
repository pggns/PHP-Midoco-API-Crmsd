<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableMediatorsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: returns a list of MidocoMediatorDTO
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableMediatorsResponse extends AbstractStructBase
{
    /**
     * The MidocoMediator
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMediator
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO[]
     */
    protected ?array $MidocoMediator = null;
    /**
     * Constructor method for GetAvailableMediatorsResponse
     * @uses GetAvailableMediatorsResponse::setMidocoMediator()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO[] $midocoMediator
     */
    public function __construct(?array $midocoMediator = null)
    {
        $this
            ->setMidocoMediator($midocoMediator);
    }
    /**
     * Get MidocoMediator value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO[]
     */
    public function getMidocoMediator(): ?array
    {
        return $this->MidocoMediator;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMediator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMediator method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMediatorForArrayConstraintFromSetMidocoMediator(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableMediatorsResponseMidocoMediatorItem) {
            // validation for constraint: itemType
            if (!$getAvailableMediatorsResponseMidocoMediatorItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO) {
                $invalidValues[] = is_object($getAvailableMediatorsResponseMidocoMediatorItem) ? get_class($getAvailableMediatorsResponseMidocoMediatorItem) : sprintf('%s(%s)', gettype($getAvailableMediatorsResponseMidocoMediatorItem), var_export($getAvailableMediatorsResponseMidocoMediatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMediator property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMediator value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO[] $midocoMediator
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAvailableMediatorsResponse
     */
    public function setMidocoMediator(?array $midocoMediator = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMediatorArrayErrorMessage = self::validateMidocoMediatorForArrayConstraintFromSetMidocoMediator($midocoMediator))) {
            throw new InvalidArgumentException($midocoMediatorArrayErrorMessage, __LINE__);
        }
        $this->MidocoMediator = $midocoMediator;
        
        return $this;
    }
    /**
     * Add item to MidocoMediator value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAvailableMediatorsResponse
     */
    public function addToMidocoMediator(\Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMediator property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMediator[] = $item;
        
        return $this;
    }
}
