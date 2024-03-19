<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMandatesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchMandatesRequest extends AbstractStructBase
{
    /**
     * The mandateReference
     * @var string|null
     */
    protected ?string $mandateReference = null;
    /**
     * The isOrderMandate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $isOrderMandate = null;
    /**
     * The isBillingMandate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $isBillingMandate = null;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for SearchMandatesRequest
     * @uses SearchMandatesRequest::setMandateReference()
     * @uses SearchMandatesRequest::setIsOrderMandate()
     * @uses SearchMandatesRequest::setIsBillingMandate()
     * @uses SearchMandatesRequest::setUnitName()
     * @param string $mandateReference
     * @param bool $isOrderMandate
     * @param bool $isBillingMandate
     * @param string $unitName
     */
    public function __construct(?string $mandateReference = null, ?bool $isOrderMandate = null, ?bool $isBillingMandate = null, ?string $unitName = null)
    {
        $this
            ->setMandateReference($mandateReference)
            ->setIsOrderMandate($isOrderMandate)
            ->setIsBillingMandate($isBillingMandate)
            ->setUnitName($unitName);
    }
    /**
     * Get mandateReference value
     * @return string|null
     */
    public function getMandateReference(): ?string
    {
        return $this->mandateReference;
    }
    /**
     * Set mandateReference value
     * @param string $mandateReference
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchMandatesRequest
     */
    public function setMandateReference(?string $mandateReference = null): self
    {
        // validation for constraint: string
        if (!is_null($mandateReference) && !is_string($mandateReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandateReference, true), gettype($mandateReference)), __LINE__);
        }
        $this->mandateReference = $mandateReference;
        
        return $this;
    }
    /**
     * Get isOrderMandate value
     * @return bool|null
     */
    public function getIsOrderMandate(): ?bool
    {
        return $this->isOrderMandate;
    }
    /**
     * Set isOrderMandate value
     * @param bool $isOrderMandate
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchMandatesRequest
     */
    public function setIsOrderMandate(?bool $isOrderMandate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOrderMandate) && !is_bool($isOrderMandate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOrderMandate, true), gettype($isOrderMandate)), __LINE__);
        }
        $this->isOrderMandate = $isOrderMandate;
        
        return $this;
    }
    /**
     * Get isBillingMandate value
     * @return bool|null
     */
    public function getIsBillingMandate(): ?bool
    {
        return $this->isBillingMandate;
    }
    /**
     * Set isBillingMandate value
     * @param bool $isBillingMandate
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchMandatesRequest
     */
    public function setIsBillingMandate(?bool $isBillingMandate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBillingMandate) && !is_bool($isBillingMandate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBillingMandate, true), gettype($isBillingMandate)), __LINE__);
        }
        $this->isBillingMandate = $isBillingMandate;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchMandatesRequest
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
}
