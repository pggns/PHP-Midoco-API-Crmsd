<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerMfRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerMfRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The CustomerMfRuleAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerMfRuleAttributeType[]
     */
    protected ?array $CustomerMfRuleAttribute = null;
    /**
     * The bean
     * @var string|null
     */
    protected ?string $bean = null;
    /**
     * The className
     * @var string|null
     */
    protected ?string $className = null;
    /**
     * The attrName
     * @var string|null
     */
    protected ?string $attrName = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The onlyNumeric
     * @var bool|null
     */
    protected ?bool $onlyNumeric = null;
    /**
     * The printEnforced
     * @var bool|null
     */
    protected ?bool $printEnforced = null;
    /**
     * The presetContent
     * @var bool|null
     */
    protected ?bool $presetContent = null;
    /**
     * The validDate
     * @var string|null
     */
    protected ?string $validDate = null;
    /**
     * Constructor method for GetCustomerMfRequest
     * @uses GetCustomerMfRequest::setMidocoCustomerId()
     * @uses GetCustomerMfRequest::setCustomerMfRuleAttribute()
     * @uses GetCustomerMfRequest::setBean()
     * @uses GetCustomerMfRequest::setClassName()
     * @uses GetCustomerMfRequest::setAttrName()
     * @uses GetCustomerMfRequest::setUnitName()
     * @uses GetCustomerMfRequest::setOnlyNumeric()
     * @uses GetCustomerMfRequest::setPrintEnforced()
     * @uses GetCustomerMfRequest::setPresetContent()
     * @uses GetCustomerMfRequest::setValidDate()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerMfRuleAttributeType[] $customerMfRuleAttribute
     * @param string $bean
     * @param string $className
     * @param string $attrName
     * @param string $unitName
     * @param bool $onlyNumeric
     * @param bool $printEnforced
     * @param bool $presetContent
     * @param string $validDate
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null, ?array $customerMfRuleAttribute = null, ?string $bean = null, ?string $className = null, ?string $attrName = null, ?string $unitName = null, ?bool $onlyNumeric = null, ?bool $printEnforced = null, ?bool $presetContent = null, ?string $validDate = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setCustomerMfRuleAttribute($customerMfRuleAttribute)
            ->setBean($bean)
            ->setClassName($className)
            ->setAttrName($attrName)
            ->setUnitName($unitName)
            ->setOnlyNumeric($onlyNumeric)
            ->setPrintEnforced($printEnforced)
            ->setPresetContent($presetContent)
            ->setValidDate($validDate);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMfRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get CustomerMfRuleAttribute value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CustomerMfRuleAttributeType[]
     */
    public function getCustomerMfRuleAttribute(): ?array
    {
        return $this->CustomerMfRuleAttribute;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCustomerMfRuleAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerMfRuleAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerMfRuleAttributeForArrayConstraintFromSetCustomerMfRuleAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCustomerMfRequestCustomerMfRuleAttributeItem) {
            // validation for constraint: itemType
            if (!$getCustomerMfRequestCustomerMfRuleAttributeItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CustomerMfRuleAttributeType) {
                $invalidValues[] = is_object($getCustomerMfRequestCustomerMfRuleAttributeItem) ? get_class($getCustomerMfRequestCustomerMfRuleAttributeItem) : sprintf('%s(%s)', gettype($getCustomerMfRequestCustomerMfRuleAttributeItem), var_export($getCustomerMfRequestCustomerMfRuleAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CustomerMfRuleAttribute property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CustomerMfRuleAttributeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CustomerMfRuleAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerMfRuleAttributeType[] $customerMfRuleAttribute
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMfRequest
     */
    public function setCustomerMfRuleAttribute(?array $customerMfRuleAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($customerMfRuleAttributeArrayErrorMessage = self::validateCustomerMfRuleAttributeForArrayConstraintFromSetCustomerMfRuleAttribute($customerMfRuleAttribute))) {
            throw new InvalidArgumentException($customerMfRuleAttributeArrayErrorMessage, __LINE__);
        }
        $this->CustomerMfRuleAttribute = $customerMfRuleAttribute;
        
        return $this;
    }
    /**
     * Add item to CustomerMfRuleAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerMfRuleAttributeType $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMfRequest
     */
    public function addToCustomerMfRuleAttribute(\Pggns\MidocoApi\Crmsd\StructType\CustomerMfRuleAttributeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CustomerMfRuleAttributeType) {
            throw new InvalidArgumentException(sprintf('The CustomerMfRuleAttribute property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CustomerMfRuleAttributeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CustomerMfRuleAttribute[] = $item;
        
        return $this;
    }
    /**
     * Get bean value
     * @return string|null
     */
    public function getBean(): ?string
    {
        return $this->bean;
    }
    /**
     * Set bean value
     * @param string $bean
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMfRequest
     */
    public function setBean(?string $bean = null): self
    {
        // validation for constraint: string
        if (!is_null($bean) && !is_string($bean)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bean, true), gettype($bean)), __LINE__);
        }
        $this->bean = $bean;
        
        return $this;
    }
    /**
     * Get className value
     * @return string|null
     */
    public function getClassName(): ?string
    {
        return $this->className;
    }
    /**
     * Set className value
     * @param string $className
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMfRequest
     */
    public function setClassName(?string $className = null): self
    {
        // validation for constraint: string
        if (!is_null($className) && !is_string($className)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($className, true), gettype($className)), __LINE__);
        }
        $this->className = $className;
        
        return $this;
    }
    /**
     * Get attrName value
     * @return string|null
     */
    public function getAttrName(): ?string
    {
        return $this->attrName;
    }
    /**
     * Set attrName value
     * @param string $attrName
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMfRequest
     */
    public function setAttrName(?string $attrName = null): self
    {
        // validation for constraint: string
        if (!is_null($attrName) && !is_string($attrName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrName, true), gettype($attrName)), __LINE__);
        }
        $this->attrName = $attrName;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMfRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get onlyNumeric value
     * @return bool|null
     */
    public function getOnlyNumeric(): ?bool
    {
        return $this->onlyNumeric;
    }
    /**
     * Set onlyNumeric value
     * @param bool $onlyNumeric
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMfRequest
     */
    public function setOnlyNumeric(?bool $onlyNumeric = null): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyNumeric) && !is_bool($onlyNumeric)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyNumeric, true), gettype($onlyNumeric)), __LINE__);
        }
        $this->onlyNumeric = $onlyNumeric;
        
        return $this;
    }
    /**
     * Get printEnforced value
     * @return bool|null
     */
    public function getPrintEnforced(): ?bool
    {
        return $this->printEnforced;
    }
    /**
     * Set printEnforced value
     * @param bool $printEnforced
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMfRequest
     */
    public function setPrintEnforced(?bool $printEnforced = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printEnforced) && !is_bool($printEnforced)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printEnforced, true), gettype($printEnforced)), __LINE__);
        }
        $this->printEnforced = $printEnforced;
        
        return $this;
    }
    /**
     * Get presetContent value
     * @return bool|null
     */
    public function getPresetContent(): ?bool
    {
        return $this->presetContent;
    }
    /**
     * Set presetContent value
     * @param bool $presetContent
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMfRequest
     */
    public function setPresetContent(?bool $presetContent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($presetContent) && !is_bool($presetContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($presetContent, true), gettype($presetContent)), __LINE__);
        }
        $this->presetContent = $presetContent;
        
        return $this;
    }
    /**
     * Get validDate value
     * @return string|null
     */
    public function getValidDate(): ?string
    {
        return $this->validDate;
    }
    /**
     * Set validDate value
     * @param string $validDate
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMfRequest
     */
    public function setValidDate(?string $validDate = null): self
    {
        // validation for constraint: string
        if (!is_null($validDate) && !is_string($validDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validDate, true), gettype($validDate)), __LINE__);
        }
        $this->validDate = $validDate;
        
        return $this;
    }
}
