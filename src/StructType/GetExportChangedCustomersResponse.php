<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExportChangedCustomersResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExportChangedCustomersResponse extends AbstractStructBase
{
    /**
     * The MidocoExportChangedCustomersLog
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoExportChangedCustomersLog
     * @var \Pggns\MidocoApi\Crmsd\StructType\ExportChangedCustomersLogDTO[]
     */
    protected ?array $MidocoExportChangedCustomersLog = null;
    /**
     * Constructor method for GetExportChangedCustomersResponse
     * @uses GetExportChangedCustomersResponse::setMidocoExportChangedCustomersLog()
     * @param \Pggns\MidocoApi\Crmsd\StructType\ExportChangedCustomersLogDTO[] $midocoExportChangedCustomersLog
     */
    public function __construct(?array $midocoExportChangedCustomersLog = null)
    {
        $this
            ->setMidocoExportChangedCustomersLog($midocoExportChangedCustomersLog);
    }
    /**
     * Get MidocoExportChangedCustomersLog value
     * @return \Pggns\MidocoApi\Crmsd\StructType\ExportChangedCustomersLogDTO[]
     */
    public function getMidocoExportChangedCustomersLog(): ?array
    {
        return $this->MidocoExportChangedCustomersLog;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoExportChangedCustomersLog method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoExportChangedCustomersLog method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoExportChangedCustomersLogForArrayConstraintFromSetMidocoExportChangedCustomersLog(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExportChangedCustomersResponseMidocoExportChangedCustomersLogItem) {
            // validation for constraint: itemType
            if (!$getExportChangedCustomersResponseMidocoExportChangedCustomersLogItem instanceof \Pggns\MidocoApi\Crmsd\StructType\ExportChangedCustomersLogDTO) {
                $invalidValues[] = is_object($getExportChangedCustomersResponseMidocoExportChangedCustomersLogItem) ? get_class($getExportChangedCustomersResponseMidocoExportChangedCustomersLogItem) : sprintf('%s(%s)', gettype($getExportChangedCustomersResponseMidocoExportChangedCustomersLogItem), var_export($getExportChangedCustomersResponseMidocoExportChangedCustomersLogItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoExportChangedCustomersLog property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\ExportChangedCustomersLogDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoExportChangedCustomersLog value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\ExportChangedCustomersLogDTO[] $midocoExportChangedCustomersLog
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExportChangedCustomersResponse
     */
    public function setMidocoExportChangedCustomersLog(?array $midocoExportChangedCustomersLog = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoExportChangedCustomersLogArrayErrorMessage = self::validateMidocoExportChangedCustomersLogForArrayConstraintFromSetMidocoExportChangedCustomersLog($midocoExportChangedCustomersLog))) {
            throw new InvalidArgumentException($midocoExportChangedCustomersLogArrayErrorMessage, __LINE__);
        }
        $this->MidocoExportChangedCustomersLog = $midocoExportChangedCustomersLog;
        
        return $this;
    }
    /**
     * Add item to MidocoExportChangedCustomersLog value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\ExportChangedCustomersLogDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExportChangedCustomersResponse
     */
    public function addToMidocoExportChangedCustomersLog(\Pggns\MidocoApi\Crmsd\StructType\ExportChangedCustomersLogDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\ExportChangedCustomersLogDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoExportChangedCustomersLog property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\ExportChangedCustomersLogDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoExportChangedCustomersLog[] = $item;
        
        return $this;
    }
}
