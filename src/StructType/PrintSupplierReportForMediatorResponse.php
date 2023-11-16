<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintSupplierReportForMediatorResponse StructType
 * @subpackage Structs
 */
class PrintSupplierReportForMediatorResponse extends AbstractStructBase
{
    /**
     * The printJobId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $printJobId = [];
    /**
     * Constructor method for PrintSupplierReportForMediatorResponse
     * @uses PrintSupplierReportForMediatorResponse::setPrintJobId()
     * @param int[] $printJobId
     */
    public function __construct(array $printJobId = [])
    {
        $this
            ->setPrintJobId($printJobId);
    }
    /**
     * Get printJobId value
     * @return int[]
     */
    public function getPrintJobId(): array
    {
        return $this->printJobId;
    }
    /**
     * This method is responsible for validating the values passed to the setPrintJobId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrintJobId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrintJobIdForArrayConstraintsFromSetPrintJobId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $printSupplierReportForMediatorResponsePrintJobIdItem) {
            // validation for constraint: itemType
            if (!(is_int($printSupplierReportForMediatorResponsePrintJobIdItem) || ctype_digit($printSupplierReportForMediatorResponsePrintJobIdItem))) {
                $invalidValues[] = is_object($printSupplierReportForMediatorResponsePrintJobIdItem) ? get_class($printSupplierReportForMediatorResponsePrintJobIdItem) : sprintf('%s(%s)', gettype($printSupplierReportForMediatorResponsePrintJobIdItem), var_export($printSupplierReportForMediatorResponsePrintJobIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The printJobId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set printJobId value
     * @throws InvalidArgumentException
     * @param int[] $printJobId
     * @return \Pggns\MidocoApi\Crmsd\StructType\PrintSupplierReportForMediatorResponse
     */
    public function setPrintJobId(array $printJobId = []): self
    {
        // validation for constraint: array
        if ('' !== ($printJobIdArrayErrorMessage = self::validatePrintJobIdForArrayConstraintsFromSetPrintJobId($printJobId))) {
            throw new InvalidArgumentException($printJobIdArrayErrorMessage, __LINE__);
        }
        $this->printJobId = $printJobId;
        
        return $this;
    }
    /**
     * Add item to printJobId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\PrintSupplierReportForMediatorResponse
     */
    public function addToPrintJobId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The printJobId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->printJobId[] = $item;
        
        return $this;
    }
}
