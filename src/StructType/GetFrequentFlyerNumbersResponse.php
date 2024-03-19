<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFrequentFlyerNumbersResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetFrequentFlyerNumbersResponse extends AbstractStructBase
{
    /**
     * The MidocoFrequentFlyerNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFrequentFlyerNumber
     * @var \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO[]
     */
    protected ?array $MidocoFrequentFlyerNumber = null;
    /**
     * Constructor method for GetFrequentFlyerNumbersResponse
     * @uses GetFrequentFlyerNumbersResponse::setMidocoFrequentFlyerNumber()
     * @param \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO[] $midocoFrequentFlyerNumber
     */
    public function __construct(?array $midocoFrequentFlyerNumber = null)
    {
        $this
            ->setMidocoFrequentFlyerNumber($midocoFrequentFlyerNumber);
    }
    /**
     * Get MidocoFrequentFlyerNumber value
     * @return \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO[]
     */
    public function getMidocoFrequentFlyerNumber(): ?array
    {
        return $this->MidocoFrequentFlyerNumber;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoFrequentFlyerNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFrequentFlyerNumber method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFrequentFlyerNumberForArrayConstraintFromSetMidocoFrequentFlyerNumber(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getFrequentFlyerNumbersResponseMidocoFrequentFlyerNumberItem) {
            // validation for constraint: itemType
            if (!$getFrequentFlyerNumbersResponseMidocoFrequentFlyerNumberItem instanceof \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO) {
                $invalidValues[] = is_object($getFrequentFlyerNumbersResponseMidocoFrequentFlyerNumberItem) ? get_class($getFrequentFlyerNumbersResponseMidocoFrequentFlyerNumberItem) : sprintf('%s(%s)', gettype($getFrequentFlyerNumbersResponseMidocoFrequentFlyerNumberItem), var_export($getFrequentFlyerNumbersResponseMidocoFrequentFlyerNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFrequentFlyerNumber property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFrequentFlyerNumber value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO[] $midocoFrequentFlyerNumber
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetFrequentFlyerNumbersResponse
     */
    public function setMidocoFrequentFlyerNumber(?array $midocoFrequentFlyerNumber = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFrequentFlyerNumberArrayErrorMessage = self::validateMidocoFrequentFlyerNumberForArrayConstraintFromSetMidocoFrequentFlyerNumber($midocoFrequentFlyerNumber))) {
            throw new InvalidArgumentException($midocoFrequentFlyerNumberArrayErrorMessage, __LINE__);
        }
        $this->MidocoFrequentFlyerNumber = $midocoFrequentFlyerNumber;
        
        return $this;
    }
    /**
     * Add item to MidocoFrequentFlyerNumber value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetFrequentFlyerNumbersResponse
     */
    public function addToMidocoFrequentFlyerNumber(\Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoFrequentFlyerNumber property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFrequentFlyerNumber[] = $item;
        
        return $this;
    }
}
