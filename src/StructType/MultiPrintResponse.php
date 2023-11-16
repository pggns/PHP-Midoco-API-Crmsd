<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiPrintResponse StructType
 * @subpackage Structs
 */
class MultiPrintResponse extends AbstractStructBase
{
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * The historyId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $historyId = [];
    /**
     * The rtfData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $rtfData = [];
    /**
     * The MidocoMailDescription4Inexso
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: system:MidocoMailDescription4Inexso
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoMailDescription4Inexso[]
     */
    protected array $MidocoMailDescription4Inexso = [];
    /**
     * Constructor method for MultiPrintResponse
     * @uses MultiPrintResponse::setMidocoMailMessage()
     * @uses MultiPrintResponse::setHistoryId()
     * @uses MultiPrintResponse::setRtfData()
     * @uses MultiPrintResponse::setMidocoMailDescription4Inexso()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $midocoMailMessage
     * @param int[] $historyId
     * @param string[] $rtfData
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMailDescription4Inexso[] $midocoMailDescription4Inexso
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $midocoMailMessage = null, array $historyId = [], array $rtfData = [], array $midocoMailDescription4Inexso = [])
    {
        $this
            ->setMidocoMailMessage($midocoMailMessage)
            ->setHistoryId($historyId)
            ->setRtfData($rtfData)
            ->setMidocoMailDescription4Inexso($midocoMailDescription4Inexso);
    }
    /**
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\Crmsd\StructType\MultiPrintResponse
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
    /**
     * Get historyId value
     * @return int[]
     */
    public function getHistoryId(): array
    {
        return $this->historyId;
    }
    /**
     * This method is responsible for validating the values passed to the setHistoryId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHistoryId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHistoryIdForArrayConstraintsFromSetHistoryId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $multiPrintResponseHistoryIdItem) {
            // validation for constraint: itemType
            if (!(is_int($multiPrintResponseHistoryIdItem) || ctype_digit($multiPrintResponseHistoryIdItem))) {
                $invalidValues[] = is_object($multiPrintResponseHistoryIdItem) ? get_class($multiPrintResponseHistoryIdItem) : sprintf('%s(%s)', gettype($multiPrintResponseHistoryIdItem), var_export($multiPrintResponseHistoryIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The historyId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set historyId value
     * @throws InvalidArgumentException
     * @param int[] $historyId
     * @return \Pggns\MidocoApi\Crmsd\StructType\MultiPrintResponse
     */
    public function setHistoryId(array $historyId = []): self
    {
        // validation for constraint: array
        if ('' !== ($historyIdArrayErrorMessage = self::validateHistoryIdForArrayConstraintsFromSetHistoryId($historyId))) {
            throw new InvalidArgumentException($historyIdArrayErrorMessage, __LINE__);
        }
        $this->historyId = $historyId;
        
        return $this;
    }
    /**
     * Add item to historyId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MultiPrintResponse
     */
    public function addToHistoryId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The historyId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->historyId[] = $item;
        
        return $this;
    }
    /**
     * Get rtfData value
     * @return string[]
     */
    public function getRtfData(): array
    {
        return $this->rtfData;
    }
    /**
     * This method is responsible for validating the values passed to the setRtfData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRtfData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRtfDataForArrayConstraintsFromSetRtfData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $multiPrintResponseRtfDataItem) {
            // validation for constraint: itemType
            if (!is_string($multiPrintResponseRtfDataItem)) {
                $invalidValues[] = is_object($multiPrintResponseRtfDataItem) ? get_class($multiPrintResponseRtfDataItem) : sprintf('%s(%s)', gettype($multiPrintResponseRtfDataItem), var_export($multiPrintResponseRtfDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The rtfData property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set rtfData value
     * @throws InvalidArgumentException
     * @param string[] $rtfData
     * @return \Pggns\MidocoApi\Crmsd\StructType\MultiPrintResponse
     */
    public function setRtfData(array $rtfData = []): self
    {
        // validation for constraint: array
        if ('' !== ($rtfDataArrayErrorMessage = self::validateRtfDataForArrayConstraintsFromSetRtfData($rtfData))) {
            throw new InvalidArgumentException($rtfDataArrayErrorMessage, __LINE__);
        }
        $this->rtfData = $rtfData;
        
        return $this;
    }
    /**
     * Add item to rtfData value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MultiPrintResponse
     */
    public function addToRtfData(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The rtfData property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->rtfData[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMailDescription4Inexso value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoMailDescription4Inexso[]
     */
    public function getMidocoMailDescription4Inexso(): array
    {
        return $this->MidocoMailDescription4Inexso;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMailDescription4Inexso method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMailDescription4Inexso method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMailDescription4InexsoForArrayConstraintsFromSetMidocoMailDescription4Inexso(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $multiPrintResponseMidocoMailDescription4InexsoItem) {
            // validation for constraint: itemType
            if (!$multiPrintResponseMidocoMailDescription4InexsoItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoMailDescription4Inexso) {
                $invalidValues[] = is_object($multiPrintResponseMidocoMailDescription4InexsoItem) ? get_class($multiPrintResponseMidocoMailDescription4InexsoItem) : sprintf('%s(%s)', gettype($multiPrintResponseMidocoMailDescription4InexsoItem), var_export($multiPrintResponseMidocoMailDescription4InexsoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMailDescription4Inexso property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoMailDescription4Inexso, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMailDescription4Inexso value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMailDescription4Inexso[] $midocoMailDescription4Inexso
     * @return \Pggns\MidocoApi\Crmsd\StructType\MultiPrintResponse
     */
    public function setMidocoMailDescription4Inexso(array $midocoMailDescription4Inexso = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMailDescription4InexsoArrayErrorMessage = self::validateMidocoMailDescription4InexsoForArrayConstraintsFromSetMidocoMailDescription4Inexso($midocoMailDescription4Inexso))) {
            throw new InvalidArgumentException($midocoMailDescription4InexsoArrayErrorMessage, __LINE__);
        }
        $this->MidocoMailDescription4Inexso = $midocoMailDescription4Inexso;
        
        return $this;
    }
    /**
     * Add item to MidocoMailDescription4Inexso value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMailDescription4Inexso $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MultiPrintResponse
     */
    public function addToMidocoMailDescription4Inexso(\Pggns\MidocoApi\Crmsd\StructType\MidocoMailDescription4Inexso $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoMailDescription4Inexso) {
            throw new InvalidArgumentException(sprintf('The MidocoMailDescription4Inexso property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoMailDescription4Inexso, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMailDescription4Inexso[] = $item;
        
        return $this;
    }
}
