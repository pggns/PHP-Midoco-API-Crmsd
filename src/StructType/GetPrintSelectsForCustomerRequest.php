<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintSelectsForCustomerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPrintSelectsForCustomerRequest extends AbstractStructBase
{
    /**
     * The handler
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected ?array $handler = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The cultureId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * Constructor method for GetPrintSelectsForCustomerRequest
     * @uses GetPrintSelectsForCustomerRequest::setHandler()
     * @uses GetPrintSelectsForCustomerRequest::setUnitName()
     * @uses GetPrintSelectsForCustomerRequest::setCultureId()
     * @uses GetPrintSelectsForCustomerRequest::setCustomerId()
     * @param string[] $handler
     * @param string $unitName
     * @param string $cultureId
     * @param int $customerId
     */
    public function __construct(?array $handler = null, ?string $unitName = null, ?string $cultureId = null, ?int $customerId = null)
    {
        $this
            ->setHandler($handler)
            ->setUnitName($unitName)
            ->setCultureId($cultureId)
            ->setCustomerId($customerId);
    }
    /**
     * Get handler value
     * @return string[]
     */
    public function getHandler(): ?array
    {
        return $this->handler;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHandler method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHandler method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHandlerForArrayConstraintFromSetHandler(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPrintSelectsForCustomerRequestHandlerItem) {
            // validation for constraint: itemType
            if (!is_string($getPrintSelectsForCustomerRequestHandlerItem)) {
                $invalidValues[] = is_object($getPrintSelectsForCustomerRequestHandlerItem) ? get_class($getPrintSelectsForCustomerRequestHandlerItem) : sprintf('%s(%s)', gettype($getPrintSelectsForCustomerRequestHandlerItem), var_export($getPrintSelectsForCustomerRequestHandlerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The handler property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set handler value
     * @throws InvalidArgumentException
     * @param string[] $handler
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetPrintSelectsForCustomerRequest
     */
    public function setHandler(?array $handler = null): self
    {
        // validation for constraint: array
        if ('' !== ($handlerArrayErrorMessage = self::validateHandlerForArrayConstraintFromSetHandler($handler))) {
            throw new InvalidArgumentException($handlerArrayErrorMessage, __LINE__);
        }
        $this->handler = $handler;
        
        return $this;
    }
    /**
     * Add item to handler value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetPrintSelectsForCustomerRequest
     */
    public function addToHandler(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The handler property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->handler[] = $item;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetPrintSelectsForCustomerRequest
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
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetPrintSelectsForCustomerRequest
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetPrintSelectsForCustomerRequest
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
}
