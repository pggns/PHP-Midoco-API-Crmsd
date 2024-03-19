<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCRMImportDTOs StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCRMImportDTOs extends AbstractStructBase
{
    /**
     * The MidocoImportCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportCustomer
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCustomer[]
     */
    protected ?array $MidocoImportCustomer = null;
    /**
     * The MidocoImportCCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportCCard
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCCard[]
     */
    protected ?array $MidocoImportCCard = null;
    /**
     * The MidocoImportAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportAttribute
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAttribute[]
     */
    protected ?array $MidocoImportAttribute = null;
    /**
     * The MidocoImportNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportNotice
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoImportNotice[]
     */
    protected ?array $MidocoImportNotice = null;
    /**
     * The MidocoImportDebitor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportDebitor
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoImportDebitor[]
     */
    protected ?array $MidocoImportDebitor = null;
    /**
     * The MidocoImportHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportHistory
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoImportHistory[]
     */
    protected ?array $MidocoImportHistory = null;
    /**
     * The MidocoImportContactHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportContactHistory
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactHistory[]
     */
    protected ?array $MidocoImportContactHistory = null;
    /**
     * The MidocoImportAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportAddress
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAddress[]
     */
    protected ?array $MidocoImportAddress = null;
    /**
     * The MidocoImportContactType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportContactType
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactType[]
     */
    protected ?array $MidocoImportContactType = null;
    /**
     * The MidocoImportAgencyInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportAgencyInfo
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAgencyInfo[]
     */
    protected ?array $MidocoImportAgencyInfo = null;
    /**
     * Constructor method for MidocoCRMImportDTOs
     * @uses MidocoCRMImportDTOs::setMidocoImportCustomer()
     * @uses MidocoCRMImportDTOs::setMidocoImportCCard()
     * @uses MidocoCRMImportDTOs::setMidocoImportAttribute()
     * @uses MidocoCRMImportDTOs::setMidocoImportNotice()
     * @uses MidocoCRMImportDTOs::setMidocoImportDebitor()
     * @uses MidocoCRMImportDTOs::setMidocoImportHistory()
     * @uses MidocoCRMImportDTOs::setMidocoImportContactHistory()
     * @uses MidocoCRMImportDTOs::setMidocoImportAddress()
     * @uses MidocoCRMImportDTOs::setMidocoImportContactType()
     * @uses MidocoCRMImportDTOs::setMidocoImportAgencyInfo()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCustomer[] $midocoImportCustomer
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCCard[] $midocoImportCCard
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAttribute[] $midocoImportAttribute
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportNotice[] $midocoImportNotice
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportDebitor[] $midocoImportDebitor
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportHistory[] $midocoImportHistory
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactHistory[] $midocoImportContactHistory
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAddress[] $midocoImportAddress
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactType[] $midocoImportContactType
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAgencyInfo[] $midocoImportAgencyInfo
     */
    public function __construct(?array $midocoImportCustomer = null, ?array $midocoImportCCard = null, ?array $midocoImportAttribute = null, ?array $midocoImportNotice = null, ?array $midocoImportDebitor = null, ?array $midocoImportHistory = null, ?array $midocoImportContactHistory = null, ?array $midocoImportAddress = null, ?array $midocoImportContactType = null, ?array $midocoImportAgencyInfo = null)
    {
        $this
            ->setMidocoImportCustomer($midocoImportCustomer)
            ->setMidocoImportCCard($midocoImportCCard)
            ->setMidocoImportAttribute($midocoImportAttribute)
            ->setMidocoImportNotice($midocoImportNotice)
            ->setMidocoImportDebitor($midocoImportDebitor)
            ->setMidocoImportHistory($midocoImportHistory)
            ->setMidocoImportContactHistory($midocoImportContactHistory)
            ->setMidocoImportAddress($midocoImportAddress)
            ->setMidocoImportContactType($midocoImportContactType)
            ->setMidocoImportAgencyInfo($midocoImportAgencyInfo);
    }
    /**
     * Get MidocoImportCustomer value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCustomer[]
     */
    public function getMidocoImportCustomer(): ?array
    {
        return $this->MidocoImportCustomer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoImportCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportCustomer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportCustomerForArrayConstraintFromSetMidocoImportCustomer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportCustomerItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportCustomerItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCustomer) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportCustomerItem) ? get_class($midocoCRMImportDTOsMidocoImportCustomerItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportCustomerItem), var_export($midocoCRMImportDTOsMidocoImportCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportCustomer property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCustomer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCustomer[] $midocoImportCustomer
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportCustomer(?array $midocoImportCustomer = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportCustomerArrayErrorMessage = self::validateMidocoImportCustomerForArrayConstraintFromSetMidocoImportCustomer($midocoImportCustomer))) {
            throw new InvalidArgumentException($midocoImportCustomerArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportCustomer = $midocoImportCustomer;
        
        return $this;
    }
    /**
     * Add item to MidocoImportCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCustomer $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportCustomer(\Pggns\MidocoApi\Crmsd\StructType\MidocoImportCustomer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCustomer) {
            throw new InvalidArgumentException(sprintf('The MidocoImportCustomer property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCustomer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportCustomer[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportCCard value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCCard[]
     */
    public function getMidocoImportCCard(): ?array
    {
        return $this->MidocoImportCCard;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoImportCCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportCCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportCCardForArrayConstraintFromSetMidocoImportCCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportCCardItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportCCardItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCCard) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportCCardItem) ? get_class($midocoCRMImportDTOsMidocoImportCCardItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportCCardItem), var_export($midocoCRMImportDTOsMidocoImportCCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportCCard property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportCCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCCard[] $midocoImportCCard
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportCCard(?array $midocoImportCCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportCCardArrayErrorMessage = self::validateMidocoImportCCardForArrayConstraintFromSetMidocoImportCCard($midocoImportCCard))) {
            throw new InvalidArgumentException($midocoImportCCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportCCard = $midocoImportCCard;
        
        return $this;
    }
    /**
     * Add item to MidocoImportCCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCCard $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportCCard(\Pggns\MidocoApi\Crmsd\StructType\MidocoImportCCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCCard) {
            throw new InvalidArgumentException(sprintf('The MidocoImportCCard property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportCCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportCCard[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportAttribute value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAttribute[]
     */
    public function getMidocoImportAttribute(): ?array
    {
        return $this->MidocoImportAttribute;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoImportAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportAttributeForArrayConstraintFromSetMidocoImportAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportAttributeItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportAttributeItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAttribute) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportAttributeItem) ? get_class($midocoCRMImportDTOsMidocoImportAttributeItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportAttributeItem), var_export($midocoCRMImportDTOsMidocoImportAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportAttribute property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAttribute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAttribute[] $midocoImportAttribute
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportAttribute(?array $midocoImportAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportAttributeArrayErrorMessage = self::validateMidocoImportAttributeForArrayConstraintFromSetMidocoImportAttribute($midocoImportAttribute))) {
            throw new InvalidArgumentException($midocoImportAttributeArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportAttribute = $midocoImportAttribute;
        
        return $this;
    }
    /**
     * Add item to MidocoImportAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAttribute $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportAttribute(\Pggns\MidocoApi\Crmsd\StructType\MidocoImportAttribute $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAttribute) {
            throw new InvalidArgumentException(sprintf('The MidocoImportAttribute property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAttribute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportAttribute[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportNotice value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoImportNotice[]
     */
    public function getMidocoImportNotice(): ?array
    {
        return $this->MidocoImportNotice;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoImportNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportNotice method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportNoticeForArrayConstraintFromSetMidocoImportNotice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportNoticeItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportNoticeItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportNotice) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportNoticeItem) ? get_class($midocoCRMImportDTOsMidocoImportNoticeItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportNoticeItem), var_export($midocoCRMImportDTOsMidocoImportNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportNotice property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportNotice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportNotice[] $midocoImportNotice
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportNotice(?array $midocoImportNotice = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportNoticeArrayErrorMessage = self::validateMidocoImportNoticeForArrayConstraintFromSetMidocoImportNotice($midocoImportNotice))) {
            throw new InvalidArgumentException($midocoImportNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportNotice = $midocoImportNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoImportNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportNotice $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportNotice(\Pggns\MidocoApi\Crmsd\StructType\MidocoImportNotice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportNotice) {
            throw new InvalidArgumentException(sprintf('The MidocoImportNotice property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportNotice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportNotice[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportDebitor value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoImportDebitor[]
     */
    public function getMidocoImportDebitor(): ?array
    {
        return $this->MidocoImportDebitor;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoImportDebitor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportDebitor method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportDebitorForArrayConstraintFromSetMidocoImportDebitor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportDebitorItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportDebitorItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportDebitor) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportDebitorItem) ? get_class($midocoCRMImportDTOsMidocoImportDebitorItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportDebitorItem), var_export($midocoCRMImportDTOsMidocoImportDebitorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportDebitor property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportDebitor, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportDebitor[] $midocoImportDebitor
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportDebitor(?array $midocoImportDebitor = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportDebitorArrayErrorMessage = self::validateMidocoImportDebitorForArrayConstraintFromSetMidocoImportDebitor($midocoImportDebitor))) {
            throw new InvalidArgumentException($midocoImportDebitorArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportDebitor = $midocoImportDebitor;
        
        return $this;
    }
    /**
     * Add item to MidocoImportDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportDebitor $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportDebitor(\Pggns\MidocoApi\Crmsd\StructType\MidocoImportDebitor $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportDebitor) {
            throw new InvalidArgumentException(sprintf('The MidocoImportDebitor property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportDebitor, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportDebitor[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportHistory value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoImportHistory[]
     */
    public function getMidocoImportHistory(): ?array
    {
        return $this->MidocoImportHistory;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoImportHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportHistoryForArrayConstraintFromSetMidocoImportHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportHistoryItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportHistoryItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportHistory) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportHistoryItem) ? get_class($midocoCRMImportDTOsMidocoImportHistoryItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportHistoryItem), var_export($midocoCRMImportDTOsMidocoImportHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportHistory property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportHistory[] $midocoImportHistory
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportHistory(?array $midocoImportHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportHistoryArrayErrorMessage = self::validateMidocoImportHistoryForArrayConstraintFromSetMidocoImportHistory($midocoImportHistory))) {
            throw new InvalidArgumentException($midocoImportHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportHistory = $midocoImportHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoImportHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportHistory $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportHistory(\Pggns\MidocoApi\Crmsd\StructType\MidocoImportHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoImportHistory property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportHistory[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportContactHistory value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactHistory[]
     */
    public function getMidocoImportContactHistory(): ?array
    {
        return $this->MidocoImportContactHistory;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoImportContactHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportContactHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportContactHistoryForArrayConstraintFromSetMidocoImportContactHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportContactHistoryItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportContactHistoryItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactHistory) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportContactHistoryItem) ? get_class($midocoCRMImportDTOsMidocoImportContactHistoryItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportContactHistoryItem), var_export($midocoCRMImportDTOsMidocoImportContactHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportContactHistory property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactHistory[] $midocoImportContactHistory
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportContactHistory(?array $midocoImportContactHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportContactHistoryArrayErrorMessage = self::validateMidocoImportContactHistoryForArrayConstraintFromSetMidocoImportContactHistory($midocoImportContactHistory))) {
            throw new InvalidArgumentException($midocoImportContactHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportContactHistory = $midocoImportContactHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoImportContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactHistory $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportContactHistory(\Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoImportContactHistory property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportContactHistory[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportAddress value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAddress[]
     */
    public function getMidocoImportAddress(): ?array
    {
        return $this->MidocoImportAddress;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoImportAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportAddressForArrayConstraintFromSetMidocoImportAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportAddressItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportAddressItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAddress) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportAddressItem) ? get_class($midocoCRMImportDTOsMidocoImportAddressItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportAddressItem), var_export($midocoCRMImportDTOsMidocoImportAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportAddress property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAddress[] $midocoImportAddress
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportAddress(?array $midocoImportAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportAddressArrayErrorMessage = self::validateMidocoImportAddressForArrayConstraintFromSetMidocoImportAddress($midocoImportAddress))) {
            throw new InvalidArgumentException($midocoImportAddressArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportAddress = $midocoImportAddress;
        
        return $this;
    }
    /**
     * Add item to MidocoImportAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAddress $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportAddress(\Pggns\MidocoApi\Crmsd\StructType\MidocoImportAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAddress) {
            throw new InvalidArgumentException(sprintf('The MidocoImportAddress property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportAddress[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportContactType value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactType[]
     */
    public function getMidocoImportContactType(): ?array
    {
        return $this->MidocoImportContactType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoImportContactType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportContactType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportContactTypeForArrayConstraintFromSetMidocoImportContactType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportContactTypeItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportContactTypeItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactType) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportContactTypeItem) ? get_class($midocoCRMImportDTOsMidocoImportContactTypeItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportContactTypeItem), var_export($midocoCRMImportDTOsMidocoImportContactTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportContactType property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportContactType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactType[] $midocoImportContactType
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportContactType(?array $midocoImportContactType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportContactTypeArrayErrorMessage = self::validateMidocoImportContactTypeForArrayConstraintFromSetMidocoImportContactType($midocoImportContactType))) {
            throw new InvalidArgumentException($midocoImportContactTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportContactType = $midocoImportContactType;
        
        return $this;
    }
    /**
     * Add item to MidocoImportContactType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactType $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportContactType(\Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactType) {
            throw new InvalidArgumentException(sprintf('The MidocoImportContactType property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportContactType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportContactType[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportAgencyInfo value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAgencyInfo[]
     */
    public function getMidocoImportAgencyInfo(): ?array
    {
        return $this->MidocoImportAgencyInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoImportAgencyInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportAgencyInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportAgencyInfoForArrayConstraintFromSetMidocoImportAgencyInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportAgencyInfoItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportAgencyInfoItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAgencyInfo) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportAgencyInfoItem) ? get_class($midocoCRMImportDTOsMidocoImportAgencyInfoItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportAgencyInfoItem), var_export($midocoCRMImportDTOsMidocoImportAgencyInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportAgencyInfo property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAgencyInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportAgencyInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAgencyInfo[] $midocoImportAgencyInfo
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportAgencyInfo(?array $midocoImportAgencyInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportAgencyInfoArrayErrorMessage = self::validateMidocoImportAgencyInfoForArrayConstraintFromSetMidocoImportAgencyInfo($midocoImportAgencyInfo))) {
            throw new InvalidArgumentException($midocoImportAgencyInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportAgencyInfo = $midocoImportAgencyInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoImportAgencyInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAgencyInfo $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportAgencyInfo(\Pggns\MidocoApi\Crmsd\StructType\MidocoImportAgencyInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAgencyInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoImportAgencyInfo property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoImportAgencyInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportAgencyInfo[] = $item;
        
        return $this;
    }
}
