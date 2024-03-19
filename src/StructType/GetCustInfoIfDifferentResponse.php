<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustInfoIfDifferentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCustInfoIfDifferent --- get the address, debitor and payment information of 2 customers if the this information is different
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustInfoIfDifferentResponse extends AbstractStructBase
{
    /**
     * The MidocoCustAddrDebitorPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: MidocoCustAddrDebitorPayment
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustAddrDebitorPayment[]
     */
    protected ?array $MidocoCustAddrDebitorPayment = null;
    /**
     * The differentAddr
     * @var bool|null
     */
    protected ?bool $differentAddr = null;
    /**
     * The differentDebitor
     * @var bool|null
     */
    protected ?bool $differentDebitor = null;
    /**
     * The differentPayment
     * @var bool|null
     */
    protected ?bool $differentPayment = null;
    /**
     * The differentContactEntries
     * @var bool|null
     */
    protected ?bool $differentContactEntries = null;
    /**
     * The differentCreditCards
     * @var bool|null
     */
    protected ?bool $differentCreditCards = null;
    /**
     * The differentBonusCards
     * @var bool|null
     */
    protected ?bool $differentBonusCards = null;
    /**
     * The differentDebitCards
     * @var bool|null
     */
    protected ?bool $differentDebitCards = null;
    /**
     * The differentAttribute
     * @var bool|null
     */
    protected ?bool $differentAttribute = null;
    /**
     * The differentLock
     * @var bool|null
     */
    protected ?bool $differentLock = null;
    /**
     * Constructor method for GetCustInfoIfDifferentResponse
     * @uses GetCustInfoIfDifferentResponse::setMidocoCustAddrDebitorPayment()
     * @uses GetCustInfoIfDifferentResponse::setDifferentAddr()
     * @uses GetCustInfoIfDifferentResponse::setDifferentDebitor()
     * @uses GetCustInfoIfDifferentResponse::setDifferentPayment()
     * @uses GetCustInfoIfDifferentResponse::setDifferentContactEntries()
     * @uses GetCustInfoIfDifferentResponse::setDifferentCreditCards()
     * @uses GetCustInfoIfDifferentResponse::setDifferentBonusCards()
     * @uses GetCustInfoIfDifferentResponse::setDifferentDebitCards()
     * @uses GetCustInfoIfDifferentResponse::setDifferentAttribute()
     * @uses GetCustInfoIfDifferentResponse::setDifferentLock()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustAddrDebitorPayment[] $midocoCustAddrDebitorPayment
     * @param bool $differentAddr
     * @param bool $differentDebitor
     * @param bool $differentPayment
     * @param bool $differentContactEntries
     * @param bool $differentCreditCards
     * @param bool $differentBonusCards
     * @param bool $differentDebitCards
     * @param bool $differentAttribute
     * @param bool $differentLock
     */
    public function __construct(?array $midocoCustAddrDebitorPayment = null, ?bool $differentAddr = null, ?bool $differentDebitor = null, ?bool $differentPayment = null, ?bool $differentContactEntries = null, ?bool $differentCreditCards = null, ?bool $differentBonusCards = null, ?bool $differentDebitCards = null, ?bool $differentAttribute = null, ?bool $differentLock = null)
    {
        $this
            ->setMidocoCustAddrDebitorPayment($midocoCustAddrDebitorPayment)
            ->setDifferentAddr($differentAddr)
            ->setDifferentDebitor($differentDebitor)
            ->setDifferentPayment($differentPayment)
            ->setDifferentContactEntries($differentContactEntries)
            ->setDifferentCreditCards($differentCreditCards)
            ->setDifferentBonusCards($differentBonusCards)
            ->setDifferentDebitCards($differentDebitCards)
            ->setDifferentAttribute($differentAttribute)
            ->setDifferentLock($differentLock);
    }
    /**
     * Get MidocoCustAddrDebitorPayment value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CustAddrDebitorPayment[]
     */
    public function getMidocoCustAddrDebitorPayment(): ?array
    {
        return $this->MidocoCustAddrDebitorPayment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustAddrDebitorPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustAddrDebitorPayment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustAddrDebitorPaymentForArrayConstraintFromSetMidocoCustAddrDebitorPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCustInfoIfDifferentResponseMidocoCustAddrDebitorPaymentItem) {
            // validation for constraint: itemType
            if (!$getCustInfoIfDifferentResponseMidocoCustAddrDebitorPaymentItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CustAddrDebitorPayment) {
                $invalidValues[] = is_object($getCustInfoIfDifferentResponseMidocoCustAddrDebitorPaymentItem) ? get_class($getCustInfoIfDifferentResponseMidocoCustAddrDebitorPaymentItem) : sprintf('%s(%s)', gettype($getCustInfoIfDifferentResponseMidocoCustAddrDebitorPaymentItem), var_export($getCustInfoIfDifferentResponseMidocoCustAddrDebitorPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustAddrDebitorPayment property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CustAddrDebitorPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustAddrDebitorPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustAddrDebitorPayment[] $midocoCustAddrDebitorPayment
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustInfoIfDifferentResponse
     */
    public function setMidocoCustAddrDebitorPayment(?array $midocoCustAddrDebitorPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustAddrDebitorPaymentArrayErrorMessage = self::validateMidocoCustAddrDebitorPaymentForArrayConstraintFromSetMidocoCustAddrDebitorPayment($midocoCustAddrDebitorPayment))) {
            throw new InvalidArgumentException($midocoCustAddrDebitorPaymentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($midocoCustAddrDebitorPayment) && count($midocoCustAddrDebitorPayment) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($midocoCustAddrDebitorPayment)), __LINE__);
        }
        $this->MidocoCustAddrDebitorPayment = $midocoCustAddrDebitorPayment;
        
        return $this;
    }
    /**
     * Add item to MidocoCustAddrDebitorPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustAddrDebitorPayment $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustInfoIfDifferentResponse
     */
    public function addToMidocoCustAddrDebitorPayment(\Pggns\MidocoApi\Crmsd\StructType\CustAddrDebitorPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CustAddrDebitorPayment) {
            throw new InvalidArgumentException(sprintf('The MidocoCustAddrDebitorPayment property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CustAddrDebitorPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->MidocoCustAddrDebitorPayment) && count($this->MidocoCustAddrDebitorPayment) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->MidocoCustAddrDebitorPayment)), __LINE__);
        }
        $this->MidocoCustAddrDebitorPayment[] = $item;
        
        return $this;
    }
    /**
     * Get differentAddr value
     * @return bool|null
     */
    public function getDifferentAddr(): ?bool
    {
        return $this->differentAddr;
    }
    /**
     * Set differentAddr value
     * @param bool $differentAddr
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustInfoIfDifferentResponse
     */
    public function setDifferentAddr(?bool $differentAddr = null): self
    {
        // validation for constraint: boolean
        if (!is_null($differentAddr) && !is_bool($differentAddr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($differentAddr, true), gettype($differentAddr)), __LINE__);
        }
        $this->differentAddr = $differentAddr;
        
        return $this;
    }
    /**
     * Get differentDebitor value
     * @return bool|null
     */
    public function getDifferentDebitor(): ?bool
    {
        return $this->differentDebitor;
    }
    /**
     * Set differentDebitor value
     * @param bool $differentDebitor
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustInfoIfDifferentResponse
     */
    public function setDifferentDebitor(?bool $differentDebitor = null): self
    {
        // validation for constraint: boolean
        if (!is_null($differentDebitor) && !is_bool($differentDebitor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($differentDebitor, true), gettype($differentDebitor)), __LINE__);
        }
        $this->differentDebitor = $differentDebitor;
        
        return $this;
    }
    /**
     * Get differentPayment value
     * @return bool|null
     */
    public function getDifferentPayment(): ?bool
    {
        return $this->differentPayment;
    }
    /**
     * Set differentPayment value
     * @param bool $differentPayment
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustInfoIfDifferentResponse
     */
    public function setDifferentPayment(?bool $differentPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($differentPayment) && !is_bool($differentPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($differentPayment, true), gettype($differentPayment)), __LINE__);
        }
        $this->differentPayment = $differentPayment;
        
        return $this;
    }
    /**
     * Get differentContactEntries value
     * @return bool|null
     */
    public function getDifferentContactEntries(): ?bool
    {
        return $this->differentContactEntries;
    }
    /**
     * Set differentContactEntries value
     * @param bool $differentContactEntries
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustInfoIfDifferentResponse
     */
    public function setDifferentContactEntries(?bool $differentContactEntries = null): self
    {
        // validation for constraint: boolean
        if (!is_null($differentContactEntries) && !is_bool($differentContactEntries)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($differentContactEntries, true), gettype($differentContactEntries)), __LINE__);
        }
        $this->differentContactEntries = $differentContactEntries;
        
        return $this;
    }
    /**
     * Get differentCreditCards value
     * @return bool|null
     */
    public function getDifferentCreditCards(): ?bool
    {
        return $this->differentCreditCards;
    }
    /**
     * Set differentCreditCards value
     * @param bool $differentCreditCards
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustInfoIfDifferentResponse
     */
    public function setDifferentCreditCards(?bool $differentCreditCards = null): self
    {
        // validation for constraint: boolean
        if (!is_null($differentCreditCards) && !is_bool($differentCreditCards)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($differentCreditCards, true), gettype($differentCreditCards)), __LINE__);
        }
        $this->differentCreditCards = $differentCreditCards;
        
        return $this;
    }
    /**
     * Get differentBonusCards value
     * @return bool|null
     */
    public function getDifferentBonusCards(): ?bool
    {
        return $this->differentBonusCards;
    }
    /**
     * Set differentBonusCards value
     * @param bool $differentBonusCards
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustInfoIfDifferentResponse
     */
    public function setDifferentBonusCards(?bool $differentBonusCards = null): self
    {
        // validation for constraint: boolean
        if (!is_null($differentBonusCards) && !is_bool($differentBonusCards)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($differentBonusCards, true), gettype($differentBonusCards)), __LINE__);
        }
        $this->differentBonusCards = $differentBonusCards;
        
        return $this;
    }
    /**
     * Get differentDebitCards value
     * @return bool|null
     */
    public function getDifferentDebitCards(): ?bool
    {
        return $this->differentDebitCards;
    }
    /**
     * Set differentDebitCards value
     * @param bool $differentDebitCards
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustInfoIfDifferentResponse
     */
    public function setDifferentDebitCards(?bool $differentDebitCards = null): self
    {
        // validation for constraint: boolean
        if (!is_null($differentDebitCards) && !is_bool($differentDebitCards)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($differentDebitCards, true), gettype($differentDebitCards)), __LINE__);
        }
        $this->differentDebitCards = $differentDebitCards;
        
        return $this;
    }
    /**
     * Get differentAttribute value
     * @return bool|null
     */
    public function getDifferentAttribute(): ?bool
    {
        return $this->differentAttribute;
    }
    /**
     * Set differentAttribute value
     * @param bool $differentAttribute
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustInfoIfDifferentResponse
     */
    public function setDifferentAttribute(?bool $differentAttribute = null): self
    {
        // validation for constraint: boolean
        if (!is_null($differentAttribute) && !is_bool($differentAttribute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($differentAttribute, true), gettype($differentAttribute)), __LINE__);
        }
        $this->differentAttribute = $differentAttribute;
        
        return $this;
    }
    /**
     * Get differentLock value
     * @return bool|null
     */
    public function getDifferentLock(): ?bool
    {
        return $this->differentLock;
    }
    /**
     * Set differentLock value
     * @param bool $differentLock
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustInfoIfDifferentResponse
     */
    public function setDifferentLock(?bool $differentLock = null): self
    {
        // validation for constraint: boolean
        if (!is_null($differentLock) && !is_bool($differentLock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($differentLock, true), gettype($differentLock)), __LINE__);
        }
        $this->differentLock = $differentLock;
        
        return $this;
    }
}
