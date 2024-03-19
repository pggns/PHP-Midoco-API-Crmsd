<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExtendedCustomerTravelsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExtendedCustomerTravelsRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The maxOfRecords
     * @var int|null
     */
    protected ?int $maxOfRecords = null;
    /**
     * The includedStatus
     * Meta information extracted from the WSDL
     * - documentation: A list of status like OK, OP that should be included. includedStatus overrides excludedStatus.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $includedStatus = null;
    /**
     * The excludedStatus
     * Meta information extracted from the WSDL
     * - documentation: A list of status like OK, OP that should be excluded. includedStatus overrides excludedStatus.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $excludedStatus = null;
    /**
     * The withoutExtendedInfo
     * Meta information extracted from the WSDL
     * - documentation: If true the response will only contain the info from MidocoCustomerTravel
     * @var bool|null
     */
    protected ?bool $withoutExtendedInfo = null;
    /**
     * The showFeeDetails
     * Meta information extracted from the WSDL
     * - documentation: If false the response will not contain the info about fees
     * - default: true
     * @var bool|null
     */
    protected ?bool $showFeeDetails = null;
    /**
     * The beginIndex
     * Meta information extracted from the WSDL
     * - documentation: The first MidocoCustomerTravel of the result set to include starting at 1. A number smaller than 1 is considered 1. If the beginIndex is greater than the total number of records, no records are returned. Requires endIndex to be set.
     * @var int|null
     */
    protected ?int $beginIndex = null;
    /**
     * The endIndex
     * Meta information extracted from the WSDL
     * - documentation: The last MidocoCustomerTravel of the result set to include. A number smaller than 1 is considered 1. If set, at most 1000 MidocoCustomerTravel are included in the response. Requires beginIndex to be set. Assuming there are enough
     * results if beginIndex is 1 and the endIndex is 10, then 10 results are included in the response; if beginIndex is 4 and the endIndex is 6, then 3 results are included in the response; if beginIndex is 10 and the endIndex is 10, then 1 result is
     * included in the response; if beginIndex is 10 and the endIndex is 1, then an error is returned.
     * @var int|null
     */
    protected ?int $endIndex = null;
    /**
     * The totalNoOfRecordsOnly
     * Meta information extracted from the WSDL
     * - documentation: If true the response will only contain the totalNoOfRecords attribute, but no MidocoCustomerTravel.
     * @var bool|null
     */
    protected ?bool $totalNoOfRecordsOnly = null;
    /**
     * Constructor method for GetExtendedCustomerTravelsRequest
     * @uses GetExtendedCustomerTravelsRequest::setMidocoCustomerId()
     * @uses GetExtendedCustomerTravelsRequest::setMaxOfRecords()
     * @uses GetExtendedCustomerTravelsRequest::setIncludedStatus()
     * @uses GetExtendedCustomerTravelsRequest::setExcludedStatus()
     * @uses GetExtendedCustomerTravelsRequest::setWithoutExtendedInfo()
     * @uses GetExtendedCustomerTravelsRequest::setShowFeeDetails()
     * @uses GetExtendedCustomerTravelsRequest::setBeginIndex()
     * @uses GetExtendedCustomerTravelsRequest::setEndIndex()
     * @uses GetExtendedCustomerTravelsRequest::setTotalNoOfRecordsOnly()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @param int $maxOfRecords
     * @param string[] $includedStatus
     * @param string[] $excludedStatus
     * @param bool $withoutExtendedInfo
     * @param bool $showFeeDetails
     * @param int $beginIndex
     * @param int $endIndex
     * @param bool $totalNoOfRecordsOnly
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null, ?int $maxOfRecords = null, ?array $includedStatus = null, ?array $excludedStatus = null, ?bool $withoutExtendedInfo = null, ?bool $showFeeDetails = true, ?int $beginIndex = null, ?int $endIndex = null, ?bool $totalNoOfRecordsOnly = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setMaxOfRecords($maxOfRecords)
            ->setIncludedStatus($includedStatus)
            ->setExcludedStatus($excludedStatus)
            ->setWithoutExtendedInfo($withoutExtendedInfo)
            ->setShowFeeDetails($showFeeDetails)
            ->setBeginIndex($beginIndex)
            ->setEndIndex($endIndex)
            ->setTotalNoOfRecordsOnly($totalNoOfRecordsOnly);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    public function getMidocoCustomerId(): ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExtendedCustomerTravelsRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get maxOfRecords value
     * @return int|null
     */
    public function getMaxOfRecords(): ?int
    {
        return $this->maxOfRecords;
    }
    /**
     * Set maxOfRecords value
     * @param int $maxOfRecords
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExtendedCustomerTravelsRequest
     */
    public function setMaxOfRecords(?int $maxOfRecords = null): self
    {
        // validation for constraint: int
        if (!is_null($maxOfRecords) && !(is_int($maxOfRecords) || ctype_digit($maxOfRecords))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxOfRecords, true), gettype($maxOfRecords)), __LINE__);
        }
        $this->maxOfRecords = $maxOfRecords;
        
        return $this;
    }
    /**
     * Get includedStatus value
     * @return string[]
     */
    public function getIncludedStatus(): ?array
    {
        return $this->includedStatus;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setIncludedStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIncludedStatus method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIncludedStatusForArrayConstraintFromSetIncludedStatus(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExtendedCustomerTravelsRequestIncludedStatusItem) {
            // validation for constraint: itemType
            if (!is_string($getExtendedCustomerTravelsRequestIncludedStatusItem)) {
                $invalidValues[] = is_object($getExtendedCustomerTravelsRequestIncludedStatusItem) ? get_class($getExtendedCustomerTravelsRequestIncludedStatusItem) : sprintf('%s(%s)', gettype($getExtendedCustomerTravelsRequestIncludedStatusItem), var_export($getExtendedCustomerTravelsRequestIncludedStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The includedStatus property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set includedStatus value
     * @throws InvalidArgumentException
     * @param string[] $includedStatus
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExtendedCustomerTravelsRequest
     */
    public function setIncludedStatus(?array $includedStatus = null): self
    {
        // validation for constraint: array
        if ('' !== ($includedStatusArrayErrorMessage = self::validateIncludedStatusForArrayConstraintFromSetIncludedStatus($includedStatus))) {
            throw new InvalidArgumentException($includedStatusArrayErrorMessage, __LINE__);
        }
        $this->includedStatus = $includedStatus;
        
        return $this;
    }
    /**
     * Add item to includedStatus value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExtendedCustomerTravelsRequest
     */
    public function addToIncludedStatus(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The includedStatus property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->includedStatus[] = $item;
        
        return $this;
    }
    /**
     * Get excludedStatus value
     * @return string[]
     */
    public function getExcludedStatus(): ?array
    {
        return $this->excludedStatus;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setExcludedStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExcludedStatus method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExcludedStatusForArrayConstraintFromSetExcludedStatus(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExtendedCustomerTravelsRequestExcludedStatusItem) {
            // validation for constraint: itemType
            if (!is_string($getExtendedCustomerTravelsRequestExcludedStatusItem)) {
                $invalidValues[] = is_object($getExtendedCustomerTravelsRequestExcludedStatusItem) ? get_class($getExtendedCustomerTravelsRequestExcludedStatusItem) : sprintf('%s(%s)', gettype($getExtendedCustomerTravelsRequestExcludedStatusItem), var_export($getExtendedCustomerTravelsRequestExcludedStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The excludedStatus property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set excludedStatus value
     * @throws InvalidArgumentException
     * @param string[] $excludedStatus
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExtendedCustomerTravelsRequest
     */
    public function setExcludedStatus(?array $excludedStatus = null): self
    {
        // validation for constraint: array
        if ('' !== ($excludedStatusArrayErrorMessage = self::validateExcludedStatusForArrayConstraintFromSetExcludedStatus($excludedStatus))) {
            throw new InvalidArgumentException($excludedStatusArrayErrorMessage, __LINE__);
        }
        $this->excludedStatus = $excludedStatus;
        
        return $this;
    }
    /**
     * Add item to excludedStatus value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExtendedCustomerTravelsRequest
     */
    public function addToExcludedStatus(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The excludedStatus property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->excludedStatus[] = $item;
        
        return $this;
    }
    /**
     * Get withoutExtendedInfo value
     * @return bool|null
     */
    public function getWithoutExtendedInfo(): ?bool
    {
        return $this->withoutExtendedInfo;
    }
    /**
     * Set withoutExtendedInfo value
     * @param bool $withoutExtendedInfo
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExtendedCustomerTravelsRequest
     */
    public function setWithoutExtendedInfo(?bool $withoutExtendedInfo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($withoutExtendedInfo) && !is_bool($withoutExtendedInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($withoutExtendedInfo, true), gettype($withoutExtendedInfo)), __LINE__);
        }
        $this->withoutExtendedInfo = $withoutExtendedInfo;
        
        return $this;
    }
    /**
     * Get showFeeDetails value
     * @return bool|null
     */
    public function getShowFeeDetails(): ?bool
    {
        return $this->showFeeDetails;
    }
    /**
     * Set showFeeDetails value
     * @param bool $showFeeDetails
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExtendedCustomerTravelsRequest
     */
    public function setShowFeeDetails(?bool $showFeeDetails = true): self
    {
        // validation for constraint: boolean
        if (!is_null($showFeeDetails) && !is_bool($showFeeDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showFeeDetails, true), gettype($showFeeDetails)), __LINE__);
        }
        $this->showFeeDetails = $showFeeDetails;
        
        return $this;
    }
    /**
     * Get beginIndex value
     * @return int|null
     */
    public function getBeginIndex(): ?int
    {
        return $this->beginIndex;
    }
    /**
     * Set beginIndex value
     * @param int $beginIndex
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExtendedCustomerTravelsRequest
     */
    public function setBeginIndex(?int $beginIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($beginIndex) && !(is_int($beginIndex) || ctype_digit($beginIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($beginIndex, true), gettype($beginIndex)), __LINE__);
        }
        $this->beginIndex = $beginIndex;
        
        return $this;
    }
    /**
     * Get endIndex value
     * @return int|null
     */
    public function getEndIndex(): ?int
    {
        return $this->endIndex;
    }
    /**
     * Set endIndex value
     * @param int $endIndex
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExtendedCustomerTravelsRequest
     */
    public function setEndIndex(?int $endIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($endIndex) && !(is_int($endIndex) || ctype_digit($endIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endIndex, true), gettype($endIndex)), __LINE__);
        }
        $this->endIndex = $endIndex;
        
        return $this;
    }
    /**
     * Get totalNoOfRecordsOnly value
     * @return bool|null
     */
    public function getTotalNoOfRecordsOnly(): ?bool
    {
        return $this->totalNoOfRecordsOnly;
    }
    /**
     * Set totalNoOfRecordsOnly value
     * @param bool $totalNoOfRecordsOnly
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExtendedCustomerTravelsRequest
     */
    public function setTotalNoOfRecordsOnly(?bool $totalNoOfRecordsOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($totalNoOfRecordsOnly) && !is_bool($totalNoOfRecordsOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($totalNoOfRecordsOnly, true), gettype($totalNoOfRecordsOnly)), __LINE__);
        }
        $this->totalNoOfRecordsOnly = $totalNoOfRecordsOnly;
        
        return $this;
    }
}
