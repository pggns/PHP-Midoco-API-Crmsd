<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteCrmRulesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteCrmRulesRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The ruleName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected ?array $ruleName = null;
    /**
     * Constructor method for ExecuteCrmRulesRequest
     * @uses ExecuteCrmRulesRequest::setCustomerId()
     * @uses ExecuteCrmRulesRequest::setRuleName()
     * @param int $customerId
     * @param string[] $ruleName
     */
    public function __construct(?int $customerId = null, ?array $ruleName = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setRuleName($ruleName);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\ExecuteCrmRulesRequest
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get ruleName value
     * @return string[]
     */
    public function getRuleName(): ?array
    {
        return $this->ruleName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRuleName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRuleName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRuleNameForArrayConstraintFromSetRuleName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeCrmRulesRequestRuleNameItem) {
            // validation for constraint: itemType
            if (!is_string($executeCrmRulesRequestRuleNameItem)) {
                $invalidValues[] = is_object($executeCrmRulesRequestRuleNameItem) ? get_class($executeCrmRulesRequestRuleNameItem) : sprintf('%s(%s)', gettype($executeCrmRulesRequestRuleNameItem), var_export($executeCrmRulesRequestRuleNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ruleName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ruleName value
     * @throws InvalidArgumentException
     * @param string[] $ruleName
     * @return \Pggns\MidocoApi\Crmsd\StructType\ExecuteCrmRulesRequest
     */
    public function setRuleName(?array $ruleName = null): self
    {
        // validation for constraint: array
        if ('' !== ($ruleNameArrayErrorMessage = self::validateRuleNameForArrayConstraintFromSetRuleName($ruleName))) {
            throw new InvalidArgumentException($ruleNameArrayErrorMessage, __LINE__);
        }
        $this->ruleName = $ruleName;
        
        return $this;
    }
    /**
     * Add item to ruleName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ExecuteCrmRulesRequest
     */
    public function addToRuleName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ruleName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ruleName[] = $item;
        
        return $this;
    }
}
