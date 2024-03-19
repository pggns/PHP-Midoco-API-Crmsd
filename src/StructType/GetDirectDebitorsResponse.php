<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDirectDebitorsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDirectDebitorsResponse extends AbstractStructBase
{
    /**
     * The MidocoDirectDebitor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDirectDebitor
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoDirectDebitor[]
     */
    protected ?array $MidocoDirectDebitor = null;
    /**
     * Constructor method for GetDirectDebitorsResponse
     * @uses GetDirectDebitorsResponse::setMidocoDirectDebitor()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoDirectDebitor[] $midocoDirectDebitor
     */
    public function __construct(?array $midocoDirectDebitor = null)
    {
        $this
            ->setMidocoDirectDebitor($midocoDirectDebitor);
    }
    /**
     * Get MidocoDirectDebitor value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoDirectDebitor[]
     */
    public function getMidocoDirectDebitor(): ?array
    {
        return $this->MidocoDirectDebitor;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDirectDebitor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDirectDebitor method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDirectDebitorForArrayConstraintFromSetMidocoDirectDebitor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDirectDebitorsResponseMidocoDirectDebitorItem) {
            // validation for constraint: itemType
            if (!$getDirectDebitorsResponseMidocoDirectDebitorItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoDirectDebitor) {
                $invalidValues[] = is_object($getDirectDebitorsResponseMidocoDirectDebitorItem) ? get_class($getDirectDebitorsResponseMidocoDirectDebitorItem) : sprintf('%s(%s)', gettype($getDirectDebitorsResponseMidocoDirectDebitorItem), var_export($getDirectDebitorsResponseMidocoDirectDebitorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDirectDebitor property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoDirectDebitor, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDirectDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoDirectDebitor[] $midocoDirectDebitor
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDirectDebitorsResponse
     */
    public function setMidocoDirectDebitor(?array $midocoDirectDebitor = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDirectDebitorArrayErrorMessage = self::validateMidocoDirectDebitorForArrayConstraintFromSetMidocoDirectDebitor($midocoDirectDebitor))) {
            throw new InvalidArgumentException($midocoDirectDebitorArrayErrorMessage, __LINE__);
        }
        $this->MidocoDirectDebitor = $midocoDirectDebitor;
        
        return $this;
    }
    /**
     * Add item to MidocoDirectDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoDirectDebitor $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDirectDebitorsResponse
     */
    public function addToMidocoDirectDebitor(\Pggns\MidocoApi\Crmsd\StructType\MidocoDirectDebitor $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoDirectDebitor) {
            throw new InvalidArgumentException(sprintf('The MidocoDirectDebitor property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoDirectDebitor, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDirectDebitor[] = $item;
        
        return $this;
    }
}
