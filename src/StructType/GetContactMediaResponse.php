<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContactMediaResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getContactMedia --- returns the list of contact media
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetContactMediaResponse extends AbstractStructBase
{
    /**
     * The MidocoContactMediaExt
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactMediaExt
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoContactMediaExt[]
     */
    protected ?array $MidocoContactMediaExt = null;
    /**
     * Constructor method for GetContactMediaResponse
     * @uses GetContactMediaResponse::setMidocoContactMediaExt()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactMediaExt[] $midocoContactMediaExt
     */
    public function __construct(?array $midocoContactMediaExt = null)
    {
        $this
            ->setMidocoContactMediaExt($midocoContactMediaExt);
    }
    /**
     * Get MidocoContactMediaExt value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoContactMediaExt[]
     */
    public function getMidocoContactMediaExt(): ?array
    {
        return $this->MidocoContactMediaExt;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoContactMediaExt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactMediaExt method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactMediaExtForArrayConstraintFromSetMidocoContactMediaExt(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getContactMediaResponseMidocoContactMediaExtItem) {
            // validation for constraint: itemType
            if (!$getContactMediaResponseMidocoContactMediaExtItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactMediaExt) {
                $invalidValues[] = is_object($getContactMediaResponseMidocoContactMediaExtItem) ? get_class($getContactMediaResponseMidocoContactMediaExtItem) : sprintf('%s(%s)', gettype($getContactMediaResponseMidocoContactMediaExtItem), var_export($getContactMediaResponseMidocoContactMediaExtItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactMediaExt property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactMediaExt, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactMediaExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactMediaExt[] $midocoContactMediaExt
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetContactMediaResponse
     */
    public function setMidocoContactMediaExt(?array $midocoContactMediaExt = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactMediaExtArrayErrorMessage = self::validateMidocoContactMediaExtForArrayConstraintFromSetMidocoContactMediaExt($midocoContactMediaExt))) {
            throw new InvalidArgumentException($midocoContactMediaExtArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactMediaExt = $midocoContactMediaExt;
        
        return $this;
    }
    /**
     * Add item to MidocoContactMediaExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactMediaExt $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetContactMediaResponse
     */
    public function addToMidocoContactMediaExt(\Pggns\MidocoApi\Crmsd\StructType\MidocoContactMediaExt $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactMediaExt) {
            throw new InvalidArgumentException(sprintf('The MidocoContactMediaExt property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactMediaExt, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactMediaExt[] = $item;
        
        return $this;
    }
}
