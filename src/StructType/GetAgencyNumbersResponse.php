<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgencyNumbersResponse StructType
 * @subpackage Structs
 */
class GetAgencyNumbersResponse extends AbstractStructBase
{
    /**
     * The MidocoAgencyNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencyNumber
     * @var \Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO[]
     */
    protected array $MidocoAgencyNumber = [];
    /**
     * Constructor method for GetAgencyNumbersResponse
     * @uses GetAgencyNumbersResponse::setMidocoAgencyNumber()
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO[] $midocoAgencyNumber
     */
    public function __construct(array $midocoAgencyNumber = [])
    {
        $this
            ->setMidocoAgencyNumber($midocoAgencyNumber);
    }
    /**
     * Get MidocoAgencyNumber value
     * @return \Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO[]
     */
    public function getMidocoAgencyNumber(): array
    {
        return $this->MidocoAgencyNumber;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAgencyNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencyNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencyNumberForArrayConstraintsFromSetMidocoAgencyNumber(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAgencyNumbersResponseMidocoAgencyNumberItem) {
            // validation for constraint: itemType
            if (!$getAgencyNumbersResponseMidocoAgencyNumberItem instanceof \Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO) {
                $invalidValues[] = is_object($getAgencyNumbersResponseMidocoAgencyNumberItem) ? get_class($getAgencyNumbersResponseMidocoAgencyNumberItem) : sprintf('%s(%s)', gettype($getAgencyNumbersResponseMidocoAgencyNumberItem), var_export($getAgencyNumbersResponseMidocoAgencyNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgencyNumber property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgencyNumber value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO[] $midocoAgencyNumber
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAgencyNumbersResponse
     */
    public function setMidocoAgencyNumber(array $midocoAgencyNumber = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencyNumberArrayErrorMessage = self::validateMidocoAgencyNumberForArrayConstraintsFromSetMidocoAgencyNumber($midocoAgencyNumber))) {
            throw new InvalidArgumentException($midocoAgencyNumberArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencyNumber = $midocoAgencyNumber;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencyNumber value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAgencyNumbersResponse
     */
    public function addToMidocoAgencyNumber(\Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAgencyNumber property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\AgencyNumberDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgencyNumber[] = $item;
        
        return $this;
    }
}
