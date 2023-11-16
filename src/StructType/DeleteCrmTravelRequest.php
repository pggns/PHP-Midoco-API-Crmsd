<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCrmTravelRequest StructType
 * @subpackage Structs
 */
class DeleteCrmTravelRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerTravel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerTravel
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType[]
     */
    protected array $MidocoCustomerTravel = [];
    /**
     * Constructor method for DeleteCrmTravelRequest
     * @uses DeleteCrmTravelRequest::setMidocoCustomerTravel()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     */
    public function __construct(array $midocoCustomerTravel = [])
    {
        $this
            ->setMidocoCustomerTravel($midocoCustomerTravel);
    }
    /**
     * Get MidocoCustomerTravel value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType[]
     */
    public function getMidocoCustomerTravel(): array
    {
        return $this->MidocoCustomerTravel;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerTravel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerTravel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerTravelForArrayConstraintsFromSetMidocoCustomerTravel(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteCrmTravelRequestMidocoCustomerTravelItem) {
            // validation for constraint: itemType
            if (!$deleteCrmTravelRequestMidocoCustomerTravelItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType) {
                $invalidValues[] = is_object($deleteCrmTravelRequestMidocoCustomerTravelItem) ? get_class($deleteCrmTravelRequestMidocoCustomerTravelItem) : sprintf('%s(%s)', gettype($deleteCrmTravelRequestMidocoCustomerTravelItem), var_export($deleteCrmTravelRequestMidocoCustomerTravelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCrmTravelRequest
     */
    public function setMidocoCustomerTravel(array $midocoCustomerTravel = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerTravelArrayErrorMessage = self::validateMidocoCustomerTravelForArrayConstraintsFromSetMidocoCustomerTravel($midocoCustomerTravel))) {
            throw new InvalidArgumentException($midocoCustomerTravelArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerTravel = $midocoCustomerTravel;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCrmTravelRequest
     */
    public function addToMidocoCustomerTravel(\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerTravel[] = $item;
        
        return $this;
    }
}
