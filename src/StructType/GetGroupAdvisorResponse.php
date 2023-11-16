<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGroupAdvisorResponse StructType
 * @subpackage Structs
 */
class GetGroupAdvisorResponse extends AbstractStructBase
{
    /**
     * The MidocoGroupAdviser
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoGroupAdviser
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser[]
     */
    protected array $MidocoGroupAdviser = [];
    /**
     * Constructor method for GetGroupAdvisorResponse
     * @uses GetGroupAdvisorResponse::setMidocoGroupAdviser()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser[] $midocoGroupAdviser
     */
    public function __construct(array $midocoGroupAdviser = [])
    {
        $this
            ->setMidocoGroupAdviser($midocoGroupAdviser);
    }
    /**
     * Get MidocoGroupAdviser value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser[]
     */
    public function getMidocoGroupAdviser(): array
    {
        return $this->MidocoGroupAdviser;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoGroupAdviser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoGroupAdviser method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoGroupAdviserForArrayConstraintsFromSetMidocoGroupAdviser(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getGroupAdvisorResponseMidocoGroupAdviserItem) {
            // validation for constraint: itemType
            if (!$getGroupAdvisorResponseMidocoGroupAdviserItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser) {
                $invalidValues[] = is_object($getGroupAdvisorResponseMidocoGroupAdviserItem) ? get_class($getGroupAdvisorResponseMidocoGroupAdviserItem) : sprintf('%s(%s)', gettype($getGroupAdvisorResponseMidocoGroupAdviserItem), var_export($getGroupAdvisorResponseMidocoGroupAdviserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoGroupAdviser property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoGroupAdviser value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser[] $midocoGroupAdviser
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetGroupAdvisorResponse
     */
    public function setMidocoGroupAdviser(array $midocoGroupAdviser = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoGroupAdviserArrayErrorMessage = self::validateMidocoGroupAdviserForArrayConstraintsFromSetMidocoGroupAdviser($midocoGroupAdviser))) {
            throw new InvalidArgumentException($midocoGroupAdviserArrayErrorMessage, __LINE__);
        }
        $this->MidocoGroupAdviser = $midocoGroupAdviser;
        
        return $this;
    }
    /**
     * Add item to MidocoGroupAdviser value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetGroupAdvisorResponse
     */
    public function addToMidocoGroupAdviser(\Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser) {
            throw new InvalidArgumentException(sprintf('The MidocoGroupAdviser property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoGroupAdviser[] = $item;
        
        return $this;
    }
}
