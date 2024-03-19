<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMidocoMandateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchMidocoMandateResponse extends AbstractStructBase
{
    /**
     * The MidocoMandate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: MidocoMandate
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate[]
     */
    protected array $MidocoMandate;
    /**
     * Constructor method for SearchMidocoMandateResponse
     * @uses SearchMidocoMandateResponse::setMidocoMandate()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate[] $midocoMandate
     */
    public function __construct(array $midocoMandate)
    {
        $this
            ->setMidocoMandate($midocoMandate);
    }
    /**
     * Get MidocoMandate value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate[]
     */
    public function getMidocoMandate(): array
    {
        return $this->MidocoMandate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMandate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMandate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMandateForArrayConstraintFromSetMidocoMandate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchMidocoMandateResponseMidocoMandateItem) {
            // validation for constraint: itemType
            if (!$searchMidocoMandateResponseMidocoMandateItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate) {
                $invalidValues[] = is_object($searchMidocoMandateResponseMidocoMandateItem) ? get_class($searchMidocoMandateResponseMidocoMandateItem) : sprintf('%s(%s)', gettype($searchMidocoMandateResponseMidocoMandateItem), var_export($searchMidocoMandateResponseMidocoMandateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMandate property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMandate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate[] $midocoMandate
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchMidocoMandateResponse
     */
    public function setMidocoMandate(array $midocoMandate): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMandateArrayErrorMessage = self::validateMidocoMandateForArrayConstraintFromSetMidocoMandate($midocoMandate))) {
            throw new InvalidArgumentException($midocoMandateArrayErrorMessage, __LINE__);
        }
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
    }
    /**
     * Add item to MidocoMandate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchMidocoMandateResponse
     */
    public function addToMidocoMandate(\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate) {
            throw new InvalidArgumentException(sprintf('The MidocoMandate property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMandate[] = $item;
        
        return $this;
    }
}
