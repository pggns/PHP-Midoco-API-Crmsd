<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MergeCustomersRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MergeCustomersRequest extends AbstractStructBase
{
    /**
     * The custIdSave
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $custIdSave;
    /**
     * The custIdDel
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $custIdDel;
    /**
     * The MidocoCrmAddressID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmAddressID
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddressIDDTO[]
     */
    protected ?array $MidocoCrmAddressID = null;
    /**
     * The MidocoDebitorNo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDebitorNo
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoDebitorNoDTO[]
     */
    protected ?array $MidocoDebitorNo = null;
    /**
     * The MergeCreditCardNo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $MergeCreditCardNo = null;
    /**
     * The MergeBonusCardNo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $MergeBonusCardNo = null;
    /**
     * The MergeContactEntryId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $MergeContactEntryId = null;
    /**
     * The MergeDebitCardId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $MergeDebitCardId = null;
    /**
     * The MergeCrmCriteriaId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $MergeCrmCriteriaId = null;
    /**
     * The custIdPayment
     * @var int|null
     */
    protected ?int $custIdPayment = null;
    /**
     * The locked
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $locked = null;
    /**
     * The lockReasonId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $lockReasonId = null;
    /**
     * Constructor method for MergeCustomersRequest
     * @uses MergeCustomersRequest::setCustIdSave()
     * @uses MergeCustomersRequest::setCustIdDel()
     * @uses MergeCustomersRequest::setMidocoCrmAddressID()
     * @uses MergeCustomersRequest::setMidocoDebitorNo()
     * @uses MergeCustomersRequest::setMergeCreditCardNo()
     * @uses MergeCustomersRequest::setMergeBonusCardNo()
     * @uses MergeCustomersRequest::setMergeContactEntryId()
     * @uses MergeCustomersRequest::setMergeDebitCardId()
     * @uses MergeCustomersRequest::setMergeCrmCriteriaId()
     * @uses MergeCustomersRequest::setCustIdPayment()
     * @uses MergeCustomersRequest::setLocked()
     * @uses MergeCustomersRequest::setLockReasonId()
     * @param int $custIdSave
     * @param int $custIdDel
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddressIDDTO[] $midocoCrmAddressID
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoDebitorNoDTO[] $midocoDebitorNo
     * @param string[] $mergeCreditCardNo
     * @param string[] $mergeBonusCardNo
     * @param int[] $mergeContactEntryId
     * @param int[] $mergeDebitCardId
     * @param int[] $mergeCrmCriteriaId
     * @param int $custIdPayment
     * @param bool $locked
     * @param string $lockReasonId
     */
    public function __construct(int $custIdSave, int $custIdDel, ?array $midocoCrmAddressID = null, ?array $midocoDebitorNo = null, ?array $mergeCreditCardNo = null, ?array $mergeBonusCardNo = null, ?array $mergeContactEntryId = null, ?array $mergeDebitCardId = null, ?array $mergeCrmCriteriaId = null, ?int $custIdPayment = null, ?bool $locked = null, ?string $lockReasonId = null)
    {
        $this
            ->setCustIdSave($custIdSave)
            ->setCustIdDel($custIdDel)
            ->setMidocoCrmAddressID($midocoCrmAddressID)
            ->setMidocoDebitorNo($midocoDebitorNo)
            ->setMergeCreditCardNo($mergeCreditCardNo)
            ->setMergeBonusCardNo($mergeBonusCardNo)
            ->setMergeContactEntryId($mergeContactEntryId)
            ->setMergeDebitCardId($mergeDebitCardId)
            ->setMergeCrmCriteriaId($mergeCrmCriteriaId)
            ->setCustIdPayment($custIdPayment)
            ->setLocked($locked)
            ->setLockReasonId($lockReasonId);
    }
    /**
     * Get custIdSave value
     * @return int
     */
    public function getCustIdSave(): int
    {
        return $this->custIdSave;
    }
    /**
     * Set custIdSave value
     * @param int $custIdSave
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function setCustIdSave(int $custIdSave): self
    {
        // validation for constraint: int
        if (!is_null($custIdSave) && !(is_int($custIdSave) || ctype_digit($custIdSave))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($custIdSave, true), gettype($custIdSave)), __LINE__);
        }
        $this->custIdSave = $custIdSave;
        
        return $this;
    }
    /**
     * Get custIdDel value
     * @return int
     */
    public function getCustIdDel(): int
    {
        return $this->custIdDel;
    }
    /**
     * Set custIdDel value
     * @param int $custIdDel
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function setCustIdDel(int $custIdDel): self
    {
        // validation for constraint: int
        if (!is_null($custIdDel) && !(is_int($custIdDel) || ctype_digit($custIdDel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($custIdDel, true), gettype($custIdDel)), __LINE__);
        }
        $this->custIdDel = $custIdDel;
        
        return $this;
    }
    /**
     * Get MidocoCrmAddressID value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddressIDDTO[]
     */
    public function getMidocoCrmAddressID(): ?array
    {
        return $this->MidocoCrmAddressID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmAddressID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmAddressID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmAddressIDForArrayConstraintFromSetMidocoCrmAddressID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mergeCustomersRequestMidocoCrmAddressIDItem) {
            // validation for constraint: itemType
            if (!$mergeCustomersRequestMidocoCrmAddressIDItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddressIDDTO) {
                $invalidValues[] = is_object($mergeCustomersRequestMidocoCrmAddressIDItem) ? get_class($mergeCustomersRequestMidocoCrmAddressIDItem) : sprintf('%s(%s)', gettype($mergeCustomersRequestMidocoCrmAddressIDItem), var_export($mergeCustomersRequestMidocoCrmAddressIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmAddressID property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddressIDDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmAddressID value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddressIDDTO[] $midocoCrmAddressID
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function setMidocoCrmAddressID(?array $midocoCrmAddressID = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmAddressIDArrayErrorMessage = self::validateMidocoCrmAddressIDForArrayConstraintFromSetMidocoCrmAddressID($midocoCrmAddressID))) {
            throw new InvalidArgumentException($midocoCrmAddressIDArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmAddressID = $midocoCrmAddressID;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmAddressID value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddressIDDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function addToMidocoCrmAddressID(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddressIDDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddressIDDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmAddressID property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddressIDDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmAddressID[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoDebitorNo value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoDebitorNoDTO[]
     */
    public function getMidocoDebitorNo(): ?array
    {
        return $this->MidocoDebitorNo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDebitorNo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDebitorNo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDebitorNoForArrayConstraintFromSetMidocoDebitorNo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mergeCustomersRequestMidocoDebitorNoItem) {
            // validation for constraint: itemType
            if (!$mergeCustomersRequestMidocoDebitorNoItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoDebitorNoDTO) {
                $invalidValues[] = is_object($mergeCustomersRequestMidocoDebitorNoItem) ? get_class($mergeCustomersRequestMidocoDebitorNoItem) : sprintf('%s(%s)', gettype($mergeCustomersRequestMidocoDebitorNoItem), var_export($mergeCustomersRequestMidocoDebitorNoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDebitorNo property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoDebitorNoDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDebitorNo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoDebitorNoDTO[] $midocoDebitorNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function setMidocoDebitorNo(?array $midocoDebitorNo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDebitorNoArrayErrorMessage = self::validateMidocoDebitorNoForArrayConstraintFromSetMidocoDebitorNo($midocoDebitorNo))) {
            throw new InvalidArgumentException($midocoDebitorNoArrayErrorMessage, __LINE__);
        }
        $this->MidocoDebitorNo = $midocoDebitorNo;
        
        return $this;
    }
    /**
     * Add item to MidocoDebitorNo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoDebitorNoDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function addToMidocoDebitorNo(\Pggns\MidocoApi\Crmsd\StructType\MidocoDebitorNoDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoDebitorNoDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDebitorNo property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoDebitorNoDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDebitorNo[] = $item;
        
        return $this;
    }
    /**
     * Get MergeCreditCardNo value
     * @return string[]
     */
    public function getMergeCreditCardNo(): ?array
    {
        return $this->MergeCreditCardNo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMergeCreditCardNo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMergeCreditCardNo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMergeCreditCardNoForArrayConstraintFromSetMergeCreditCardNo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mergeCustomersRequestMergeCreditCardNoItem) {
            // validation for constraint: itemType
            if (!is_string($mergeCustomersRequestMergeCreditCardNoItem)) {
                $invalidValues[] = is_object($mergeCustomersRequestMergeCreditCardNoItem) ? get_class($mergeCustomersRequestMergeCreditCardNoItem) : sprintf('%s(%s)', gettype($mergeCustomersRequestMergeCreditCardNoItem), var_export($mergeCustomersRequestMergeCreditCardNoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MergeCreditCardNo property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MergeCreditCardNo value
     * @throws InvalidArgumentException
     * @param string[] $mergeCreditCardNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function setMergeCreditCardNo(?array $mergeCreditCardNo = null): self
    {
        // validation for constraint: array
        if ('' !== ($mergeCreditCardNoArrayErrorMessage = self::validateMergeCreditCardNoForArrayConstraintFromSetMergeCreditCardNo($mergeCreditCardNo))) {
            throw new InvalidArgumentException($mergeCreditCardNoArrayErrorMessage, __LINE__);
        }
        $this->MergeCreditCardNo = $mergeCreditCardNo;
        
        return $this;
    }
    /**
     * Add item to MergeCreditCardNo value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function addToMergeCreditCardNo(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The MergeCreditCardNo property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MergeCreditCardNo[] = $item;
        
        return $this;
    }
    /**
     * Get MergeBonusCardNo value
     * @return string[]
     */
    public function getMergeBonusCardNo(): ?array
    {
        return $this->MergeBonusCardNo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMergeBonusCardNo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMergeBonusCardNo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMergeBonusCardNoForArrayConstraintFromSetMergeBonusCardNo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mergeCustomersRequestMergeBonusCardNoItem) {
            // validation for constraint: itemType
            if (!is_string($mergeCustomersRequestMergeBonusCardNoItem)) {
                $invalidValues[] = is_object($mergeCustomersRequestMergeBonusCardNoItem) ? get_class($mergeCustomersRequestMergeBonusCardNoItem) : sprintf('%s(%s)', gettype($mergeCustomersRequestMergeBonusCardNoItem), var_export($mergeCustomersRequestMergeBonusCardNoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MergeBonusCardNo property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MergeBonusCardNo value
     * @throws InvalidArgumentException
     * @param string[] $mergeBonusCardNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function setMergeBonusCardNo(?array $mergeBonusCardNo = null): self
    {
        // validation for constraint: array
        if ('' !== ($mergeBonusCardNoArrayErrorMessage = self::validateMergeBonusCardNoForArrayConstraintFromSetMergeBonusCardNo($mergeBonusCardNo))) {
            throw new InvalidArgumentException($mergeBonusCardNoArrayErrorMessage, __LINE__);
        }
        $this->MergeBonusCardNo = $mergeBonusCardNo;
        
        return $this;
    }
    /**
     * Add item to MergeBonusCardNo value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function addToMergeBonusCardNo(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The MergeBonusCardNo property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MergeBonusCardNo[] = $item;
        
        return $this;
    }
    /**
     * Get MergeContactEntryId value
     * @return int[]
     */
    public function getMergeContactEntryId(): ?array
    {
        return $this->MergeContactEntryId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMergeContactEntryId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMergeContactEntryId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMergeContactEntryIdForArrayConstraintFromSetMergeContactEntryId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mergeCustomersRequestMergeContactEntryIdItem) {
            // validation for constraint: itemType
            if (!(is_int($mergeCustomersRequestMergeContactEntryIdItem) || ctype_digit($mergeCustomersRequestMergeContactEntryIdItem))) {
                $invalidValues[] = is_object($mergeCustomersRequestMergeContactEntryIdItem) ? get_class($mergeCustomersRequestMergeContactEntryIdItem) : sprintf('%s(%s)', gettype($mergeCustomersRequestMergeContactEntryIdItem), var_export($mergeCustomersRequestMergeContactEntryIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MergeContactEntryId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MergeContactEntryId value
     * @throws InvalidArgumentException
     * @param int[] $mergeContactEntryId
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function setMergeContactEntryId(?array $mergeContactEntryId = null): self
    {
        // validation for constraint: array
        if ('' !== ($mergeContactEntryIdArrayErrorMessage = self::validateMergeContactEntryIdForArrayConstraintFromSetMergeContactEntryId($mergeContactEntryId))) {
            throw new InvalidArgumentException($mergeContactEntryIdArrayErrorMessage, __LINE__);
        }
        $this->MergeContactEntryId = $mergeContactEntryId;
        
        return $this;
    }
    /**
     * Add item to MergeContactEntryId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function addToMergeContactEntryId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The MergeContactEntryId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MergeContactEntryId[] = $item;
        
        return $this;
    }
    /**
     * Get MergeDebitCardId value
     * @return int[]
     */
    public function getMergeDebitCardId(): ?array
    {
        return $this->MergeDebitCardId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMergeDebitCardId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMergeDebitCardId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMergeDebitCardIdForArrayConstraintFromSetMergeDebitCardId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mergeCustomersRequestMergeDebitCardIdItem) {
            // validation for constraint: itemType
            if (!(is_int($mergeCustomersRequestMergeDebitCardIdItem) || ctype_digit($mergeCustomersRequestMergeDebitCardIdItem))) {
                $invalidValues[] = is_object($mergeCustomersRequestMergeDebitCardIdItem) ? get_class($mergeCustomersRequestMergeDebitCardIdItem) : sprintf('%s(%s)', gettype($mergeCustomersRequestMergeDebitCardIdItem), var_export($mergeCustomersRequestMergeDebitCardIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MergeDebitCardId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MergeDebitCardId value
     * @throws InvalidArgumentException
     * @param int[] $mergeDebitCardId
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function setMergeDebitCardId(?array $mergeDebitCardId = null): self
    {
        // validation for constraint: array
        if ('' !== ($mergeDebitCardIdArrayErrorMessage = self::validateMergeDebitCardIdForArrayConstraintFromSetMergeDebitCardId($mergeDebitCardId))) {
            throw new InvalidArgumentException($mergeDebitCardIdArrayErrorMessage, __LINE__);
        }
        $this->MergeDebitCardId = $mergeDebitCardId;
        
        return $this;
    }
    /**
     * Add item to MergeDebitCardId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function addToMergeDebitCardId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The MergeDebitCardId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MergeDebitCardId[] = $item;
        
        return $this;
    }
    /**
     * Get MergeCrmCriteriaId value
     * @return int[]
     */
    public function getMergeCrmCriteriaId(): ?array
    {
        return $this->MergeCrmCriteriaId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMergeCrmCriteriaId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMergeCrmCriteriaId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMergeCrmCriteriaIdForArrayConstraintFromSetMergeCrmCriteriaId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mergeCustomersRequestMergeCrmCriteriaIdItem) {
            // validation for constraint: itemType
            if (!(is_int($mergeCustomersRequestMergeCrmCriteriaIdItem) || ctype_digit($mergeCustomersRequestMergeCrmCriteriaIdItem))) {
                $invalidValues[] = is_object($mergeCustomersRequestMergeCrmCriteriaIdItem) ? get_class($mergeCustomersRequestMergeCrmCriteriaIdItem) : sprintf('%s(%s)', gettype($mergeCustomersRequestMergeCrmCriteriaIdItem), var_export($mergeCustomersRequestMergeCrmCriteriaIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MergeCrmCriteriaId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MergeCrmCriteriaId value
     * @throws InvalidArgumentException
     * @param int[] $mergeCrmCriteriaId
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function setMergeCrmCriteriaId(?array $mergeCrmCriteriaId = null): self
    {
        // validation for constraint: array
        if ('' !== ($mergeCrmCriteriaIdArrayErrorMessage = self::validateMergeCrmCriteriaIdForArrayConstraintFromSetMergeCrmCriteriaId($mergeCrmCriteriaId))) {
            throw new InvalidArgumentException($mergeCrmCriteriaIdArrayErrorMessage, __LINE__);
        }
        $this->MergeCrmCriteriaId = $mergeCrmCriteriaId;
        
        return $this;
    }
    /**
     * Add item to MergeCrmCriteriaId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function addToMergeCrmCriteriaId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The MergeCrmCriteriaId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MergeCrmCriteriaId[] = $item;
        
        return $this;
    }
    /**
     * Get custIdPayment value
     * @return int|null
     */
    public function getCustIdPayment(): ?int
    {
        return $this->custIdPayment;
    }
    /**
     * Set custIdPayment value
     * @param int $custIdPayment
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function setCustIdPayment(?int $custIdPayment = null): self
    {
        // validation for constraint: int
        if (!is_null($custIdPayment) && !(is_int($custIdPayment) || ctype_digit($custIdPayment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($custIdPayment, true), gettype($custIdPayment)), __LINE__);
        }
        $this->custIdPayment = $custIdPayment;
        
        return $this;
    }
    /**
     * Get locked value
     * @return bool|null
     */
    public function getLocked(): ?bool
    {
        return $this->locked;
    }
    /**
     * Set locked value
     * @param bool $locked
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function setLocked(?bool $locked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($locked) && !is_bool($locked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($locked, true), gettype($locked)), __LINE__);
        }
        $this->locked = $locked;
        
        return $this;
    }
    /**
     * Get lockReasonId value
     * @return string|null
     */
    public function getLockReasonId(): ?string
    {
        return $this->lockReasonId;
    }
    /**
     * Set lockReasonId value
     * @param string $lockReasonId
     * @return \Pggns\MidocoApi\Crmsd\StructType\MergeCustomersRequest
     */
    public function setLockReasonId(?string $lockReasonId = null): self
    {
        // validation for constraint: string
        if (!is_null($lockReasonId) && !is_string($lockReasonId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockReasonId, true), gettype($lockReasonId)), __LINE__);
        }
        $this->lockReasonId = $lockReasonId;
        
        return $this;
    }
}
