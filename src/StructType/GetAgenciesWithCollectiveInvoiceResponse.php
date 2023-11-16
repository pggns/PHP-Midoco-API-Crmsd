<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgenciesWithCollectiveInvoiceResponse StructType
 * @subpackage Structs
 */
class GetAgenciesWithCollectiveInvoiceResponse extends AbstractStructBase
{
    /**
     * The agencyId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected array $agencyId = [];
    /**
     * Constructor method for GetAgenciesWithCollectiveInvoiceResponse
     * @uses GetAgenciesWithCollectiveInvoiceResponse::setAgencyId()
     * @param string[] $agencyId
     */
    public function __construct(array $agencyId = [])
    {
        $this
            ->setAgencyId($agencyId);
    }
    /**
     * Get agencyId value
     * @return string[]
     */
    public function getAgencyId(): array
    {
        return $this->agencyId;
    }
    /**
     * This method is responsible for validating the values passed to the setAgencyId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAgencyId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAgencyIdForArrayConstraintsFromSetAgencyId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAgenciesWithCollectiveInvoiceResponseAgencyIdItem) {
            // validation for constraint: itemType
            if (!is_string($getAgenciesWithCollectiveInvoiceResponseAgencyIdItem)) {
                $invalidValues[] = is_object($getAgenciesWithCollectiveInvoiceResponseAgencyIdItem) ? get_class($getAgenciesWithCollectiveInvoiceResponseAgencyIdItem) : sprintf('%s(%s)', gettype($getAgenciesWithCollectiveInvoiceResponseAgencyIdItem), var_export($getAgenciesWithCollectiveInvoiceResponseAgencyIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The agencyId property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set agencyId value
     * @throws InvalidArgumentException
     * @param string[] $agencyId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAgenciesWithCollectiveInvoiceResponse
     */
    public function setAgencyId(array $agencyId = []): self
    {
        // validation for constraint: array
        if ('' !== ($agencyIdArrayErrorMessage = self::validateAgencyIdForArrayConstraintsFromSetAgencyId($agencyId))) {
            throw new InvalidArgumentException($agencyIdArrayErrorMessage, __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Add item to agencyId value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAgenciesWithCollectiveInvoiceResponse
     */
    public function addToAgencyId(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The agencyId property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->agencyId[] = $item;
        
        return $this;
    }
}
