<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTitlesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: contains the titles of persons
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTitlesResponse extends AbstractStructBase
{
    /**
     * The MidocoTitle
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTitle
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoTitle[]
     */
    protected ?array $MidocoTitle = null;
    /**
     * Constructor method for GetTitlesResponse
     * @uses GetTitlesResponse::setMidocoTitle()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoTitle[] $midocoTitle
     */
    public function __construct(?array $midocoTitle = null)
    {
        $this
            ->setMidocoTitle($midocoTitle);
    }
    /**
     * Get MidocoTitle value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoTitle[]
     */
    public function getMidocoTitle(): ?array
    {
        return $this->MidocoTitle;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTitle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTitle method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTitleForArrayConstraintFromSetMidocoTitle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTitlesResponseMidocoTitleItem) {
            // validation for constraint: itemType
            if (!$getTitlesResponseMidocoTitleItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoTitle) {
                $invalidValues[] = is_object($getTitlesResponseMidocoTitleItem) ? get_class($getTitlesResponseMidocoTitleItem) : sprintf('%s(%s)', gettype($getTitlesResponseMidocoTitleItem), var_export($getTitlesResponseMidocoTitleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTitle property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoTitle, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTitle value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoTitle[] $midocoTitle
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetTitlesResponse
     */
    public function setMidocoTitle(?array $midocoTitle = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTitleArrayErrorMessage = self::validateMidocoTitleForArrayConstraintFromSetMidocoTitle($midocoTitle))) {
            throw new InvalidArgumentException($midocoTitleArrayErrorMessage, __LINE__);
        }
        $this->MidocoTitle = $midocoTitle;
        
        return $this;
    }
    /**
     * Add item to MidocoTitle value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoTitle $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetTitlesResponse
     */
    public function addToMidocoTitle(\Pggns\MidocoApi\Crmsd\StructType\MidocoTitle $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoTitle) {
            throw new InvalidArgumentException(sprintf('The MidocoTitle property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoTitle, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTitle[] = $item;
        
        return $this;
    }
}
