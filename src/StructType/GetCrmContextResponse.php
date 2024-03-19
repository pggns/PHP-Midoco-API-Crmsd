<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmContextResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrmContextResponse extends AbstractStructBase
{
    /**
     * The hasMediators
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $hasMediators;
    /**
     * The hasForeignCurrencyMediators
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $hasForeignCurrencyMediators;
    /**
     * The hasAgencies
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $hasAgencies;
    /**
     * The hasForeignCurrencyAgencies
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $hasForeignCurrencyAgencies;
    /**
     * The hasCooperations
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $hasCooperations;
    /**
     * The hasCreditors
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $hasCreditors;
    /**
     * The hasDebteeId
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $hasDebteeId;
    /**
     * The hasCustomerCategories
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $hasCustomerCategories;
    /**
     * Constructor method for GetCrmContextResponse
     * @uses GetCrmContextResponse::setHasMediators()
     * @uses GetCrmContextResponse::setHasForeignCurrencyMediators()
     * @uses GetCrmContextResponse::setHasAgencies()
     * @uses GetCrmContextResponse::setHasForeignCurrencyAgencies()
     * @uses GetCrmContextResponse::setHasCooperations()
     * @uses GetCrmContextResponse::setHasCreditors()
     * @uses GetCrmContextResponse::setHasDebteeId()
     * @uses GetCrmContextResponse::setHasCustomerCategories()
     * @param bool $hasMediators
     * @param bool $hasForeignCurrencyMediators
     * @param bool $hasAgencies
     * @param bool $hasForeignCurrencyAgencies
     * @param bool $hasCooperations
     * @param bool $hasCreditors
     * @param bool $hasDebteeId
     * @param bool $hasCustomerCategories
     */
    public function __construct(bool $hasMediators, bool $hasForeignCurrencyMediators, bool $hasAgencies, bool $hasForeignCurrencyAgencies, bool $hasCooperations, bool $hasCreditors, bool $hasDebteeId, bool $hasCustomerCategories)
    {
        $this
            ->setHasMediators($hasMediators)
            ->setHasForeignCurrencyMediators($hasForeignCurrencyMediators)
            ->setHasAgencies($hasAgencies)
            ->setHasForeignCurrencyAgencies($hasForeignCurrencyAgencies)
            ->setHasCooperations($hasCooperations)
            ->setHasCreditors($hasCreditors)
            ->setHasDebteeId($hasDebteeId)
            ->setHasCustomerCategories($hasCustomerCategories);
    }
    /**
     * Get hasMediators value
     * @return bool
     */
    public function getHasMediators(): bool
    {
        return $this->hasMediators;
    }
    /**
     * Set hasMediators value
     * @param bool $hasMediators
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmContextResponse
     */
    public function setHasMediators(bool $hasMediators): self
    {
        // validation for constraint: boolean
        if (!is_null($hasMediators) && !is_bool($hasMediators)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMediators, true), gettype($hasMediators)), __LINE__);
        }
        $this->hasMediators = $hasMediators;
        
        return $this;
    }
    /**
     * Get hasForeignCurrencyMediators value
     * @return bool
     */
    public function getHasForeignCurrencyMediators(): bool
    {
        return $this->hasForeignCurrencyMediators;
    }
    /**
     * Set hasForeignCurrencyMediators value
     * @param bool $hasForeignCurrencyMediators
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmContextResponse
     */
    public function setHasForeignCurrencyMediators(bool $hasForeignCurrencyMediators): self
    {
        // validation for constraint: boolean
        if (!is_null($hasForeignCurrencyMediators) && !is_bool($hasForeignCurrencyMediators)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasForeignCurrencyMediators, true), gettype($hasForeignCurrencyMediators)), __LINE__);
        }
        $this->hasForeignCurrencyMediators = $hasForeignCurrencyMediators;
        
        return $this;
    }
    /**
     * Get hasAgencies value
     * @return bool
     */
    public function getHasAgencies(): bool
    {
        return $this->hasAgencies;
    }
    /**
     * Set hasAgencies value
     * @param bool $hasAgencies
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmContextResponse
     */
    public function setHasAgencies(bool $hasAgencies): self
    {
        // validation for constraint: boolean
        if (!is_null($hasAgencies) && !is_bool($hasAgencies)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasAgencies, true), gettype($hasAgencies)), __LINE__);
        }
        $this->hasAgencies = $hasAgencies;
        
        return $this;
    }
    /**
     * Get hasForeignCurrencyAgencies value
     * @return bool
     */
    public function getHasForeignCurrencyAgencies(): bool
    {
        return $this->hasForeignCurrencyAgencies;
    }
    /**
     * Set hasForeignCurrencyAgencies value
     * @param bool $hasForeignCurrencyAgencies
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmContextResponse
     */
    public function setHasForeignCurrencyAgencies(bool $hasForeignCurrencyAgencies): self
    {
        // validation for constraint: boolean
        if (!is_null($hasForeignCurrencyAgencies) && !is_bool($hasForeignCurrencyAgencies)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasForeignCurrencyAgencies, true), gettype($hasForeignCurrencyAgencies)), __LINE__);
        }
        $this->hasForeignCurrencyAgencies = $hasForeignCurrencyAgencies;
        
        return $this;
    }
    /**
     * Get hasCooperations value
     * @return bool
     */
    public function getHasCooperations(): bool
    {
        return $this->hasCooperations;
    }
    /**
     * Set hasCooperations value
     * @param bool $hasCooperations
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmContextResponse
     */
    public function setHasCooperations(bool $hasCooperations): self
    {
        // validation for constraint: boolean
        if (!is_null($hasCooperations) && !is_bool($hasCooperations)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasCooperations, true), gettype($hasCooperations)), __LINE__);
        }
        $this->hasCooperations = $hasCooperations;
        
        return $this;
    }
    /**
     * Get hasCreditors value
     * @return bool
     */
    public function getHasCreditors(): bool
    {
        return $this->hasCreditors;
    }
    /**
     * Set hasCreditors value
     * @param bool $hasCreditors
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmContextResponse
     */
    public function setHasCreditors(bool $hasCreditors): self
    {
        // validation for constraint: boolean
        if (!is_null($hasCreditors) && !is_bool($hasCreditors)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasCreditors, true), gettype($hasCreditors)), __LINE__);
        }
        $this->hasCreditors = $hasCreditors;
        
        return $this;
    }
    /**
     * Get hasDebteeId value
     * @return bool
     */
    public function getHasDebteeId(): bool
    {
        return $this->hasDebteeId;
    }
    /**
     * Set hasDebteeId value
     * @param bool $hasDebteeId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmContextResponse
     */
    public function setHasDebteeId(bool $hasDebteeId): self
    {
        // validation for constraint: boolean
        if (!is_null($hasDebteeId) && !is_bool($hasDebteeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasDebteeId, true), gettype($hasDebteeId)), __LINE__);
        }
        $this->hasDebteeId = $hasDebteeId;
        
        return $this;
    }
    /**
     * Get hasCustomerCategories value
     * @return bool
     */
    public function getHasCustomerCategories(): bool
    {
        return $this->hasCustomerCategories;
    }
    /**
     * Set hasCustomerCategories value
     * @param bool $hasCustomerCategories
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmContextResponse
     */
    public function setHasCustomerCategories(bool $hasCustomerCategories): self
    {
        // validation for constraint: boolean
        if (!is_null($hasCustomerCategories) && !is_bool($hasCustomerCategories)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasCustomerCategories, true), gettype($hasCustomerCategories)), __LINE__);
        }
        $this->hasCustomerCategories = $hasCustomerCategories;
        
        return $this;
    }
}
