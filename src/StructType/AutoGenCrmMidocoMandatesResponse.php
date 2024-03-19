<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AutoGenCrmMidocoMandatesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AutoGenCrmMidocoMandatesResponse extends AbstractStructBase
{
    /**
     * The MidocoMandateGenErrorCrm
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMandateGenErrorCrm
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoMandateGenErrorCrm[]
     */
    protected ?array $MidocoMandateGenErrorCrm = null;
    /**
     * Constructor method for AutoGenCrmMidocoMandatesResponse
     * @uses AutoGenCrmMidocoMandatesResponse::setMidocoMandateGenErrorCrm()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandateGenErrorCrm[] $midocoMandateGenErrorCrm
     */
    public function __construct(?array $midocoMandateGenErrorCrm = null)
    {
        $this
            ->setMidocoMandateGenErrorCrm($midocoMandateGenErrorCrm);
    }
    /**
     * Get MidocoMandateGenErrorCrm value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoMandateGenErrorCrm[]
     */
    public function getMidocoMandateGenErrorCrm(): ?array
    {
        return $this->MidocoMandateGenErrorCrm;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMandateGenErrorCrm method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMandateGenErrorCrm method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMandateGenErrorCrmForArrayConstraintFromSetMidocoMandateGenErrorCrm(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $autoGenCrmMidocoMandatesResponseMidocoMandateGenErrorCrmItem) {
            // validation for constraint: itemType
            if (!$autoGenCrmMidocoMandatesResponseMidocoMandateGenErrorCrmItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoMandateGenErrorCrm) {
                $invalidValues[] = is_object($autoGenCrmMidocoMandatesResponseMidocoMandateGenErrorCrmItem) ? get_class($autoGenCrmMidocoMandatesResponseMidocoMandateGenErrorCrmItem) : sprintf('%s(%s)', gettype($autoGenCrmMidocoMandatesResponseMidocoMandateGenErrorCrmItem), var_export($autoGenCrmMidocoMandatesResponseMidocoMandateGenErrorCrmItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMandateGenErrorCrm property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoMandateGenErrorCrm, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMandateGenErrorCrm value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandateGenErrorCrm[] $midocoMandateGenErrorCrm
     * @return \Pggns\MidocoApi\Crmsd\StructType\AutoGenCrmMidocoMandatesResponse
     */
    public function setMidocoMandateGenErrorCrm(?array $midocoMandateGenErrorCrm = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMandateGenErrorCrmArrayErrorMessage = self::validateMidocoMandateGenErrorCrmForArrayConstraintFromSetMidocoMandateGenErrorCrm($midocoMandateGenErrorCrm))) {
            throw new InvalidArgumentException($midocoMandateGenErrorCrmArrayErrorMessage, __LINE__);
        }
        $this->MidocoMandateGenErrorCrm = $midocoMandateGenErrorCrm;
        
        return $this;
    }
    /**
     * Add item to MidocoMandateGenErrorCrm value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandateGenErrorCrm $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\AutoGenCrmMidocoMandatesResponse
     */
    public function addToMidocoMandateGenErrorCrm(\Pggns\MidocoApi\Crmsd\StructType\MidocoMandateGenErrorCrm $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoMandateGenErrorCrm) {
            throw new InvalidArgumentException(sprintf('The MidocoMandateGenErrorCrm property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoMandateGenErrorCrm, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMandateGenErrorCrm[] = $item;
        
        return $this;
    }
}
