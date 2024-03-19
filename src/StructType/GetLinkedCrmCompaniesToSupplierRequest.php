<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLinkedCrmCompaniesToSupplierRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetLinkedCrmCompaniesToSupplierRequest extends AbstractStructBase
{
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The supplierName
     * @var string|null
     */
    protected ?string $supplierName = null;
    /**
     * The supplierCity
     * @var string|null
     */
    protected ?string $supplierCity = null;
    /**
     * The supplierCountry
     * @var string|null
     */
    protected ?string $supplierCountry = null;
    /**
     * The supplierStreet
     * @var string|null
     */
    protected ?string $supplierStreet = null;
    /**
     * The supplierStreetNo
     * @var string|null
     */
    protected ?string $supplierStreetNo = null;
    /**
     * The supplierPostalCode
     * @var string|null
     */
    protected ?string $supplierPostalCode = null;
    /**
     * Constructor method for GetLinkedCrmCompaniesToSupplierRequest
     * @uses GetLinkedCrmCompaniesToSupplierRequest::setSupplierId()
     * @uses GetLinkedCrmCompaniesToSupplierRequest::setSupplierName()
     * @uses GetLinkedCrmCompaniesToSupplierRequest::setSupplierCity()
     * @uses GetLinkedCrmCompaniesToSupplierRequest::setSupplierCountry()
     * @uses GetLinkedCrmCompaniesToSupplierRequest::setSupplierStreet()
     * @uses GetLinkedCrmCompaniesToSupplierRequest::setSupplierStreetNo()
     * @uses GetLinkedCrmCompaniesToSupplierRequest::setSupplierPostalCode()
     * @param string $supplierId
     * @param string $supplierName
     * @param string $supplierCity
     * @param string $supplierCountry
     * @param string $supplierStreet
     * @param string $supplierStreetNo
     * @param string $supplierPostalCode
     */
    public function __construct(?string $supplierId = null, ?string $supplierName = null, ?string $supplierCity = null, ?string $supplierCountry = null, ?string $supplierStreet = null, ?string $supplierStreetNo = null, ?string $supplierPostalCode = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setSupplierName($supplierName)
            ->setSupplierCity($supplierCity)
            ->setSupplierCountry($supplierCountry)
            ->setSupplierStreet($supplierStreet)
            ->setSupplierStreetNo($supplierStreetNo)
            ->setSupplierPostalCode($supplierPostalCode);
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetLinkedCrmCompaniesToSupplierRequest
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get supplierName value
     * @return string|null
     */
    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }
    /**
     * Set supplierName value
     * @param string $supplierName
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetLinkedCrmCompaniesToSupplierRequest
     */
    public function setSupplierName(?string $supplierName = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierName) && !is_string($supplierName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierName, true), gettype($supplierName)), __LINE__);
        }
        $this->supplierName = $supplierName;
        
        return $this;
    }
    /**
     * Get supplierCity value
     * @return string|null
     */
    public function getSupplierCity(): ?string
    {
        return $this->supplierCity;
    }
    /**
     * Set supplierCity value
     * @param string $supplierCity
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetLinkedCrmCompaniesToSupplierRequest
     */
    public function setSupplierCity(?string $supplierCity = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierCity) && !is_string($supplierCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCity, true), gettype($supplierCity)), __LINE__);
        }
        $this->supplierCity = $supplierCity;
        
        return $this;
    }
    /**
     * Get supplierCountry value
     * @return string|null
     */
    public function getSupplierCountry(): ?string
    {
        return $this->supplierCountry;
    }
    /**
     * Set supplierCountry value
     * @param string $supplierCountry
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetLinkedCrmCompaniesToSupplierRequest
     */
    public function setSupplierCountry(?string $supplierCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierCountry) && !is_string($supplierCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCountry, true), gettype($supplierCountry)), __LINE__);
        }
        $this->supplierCountry = $supplierCountry;
        
        return $this;
    }
    /**
     * Get supplierStreet value
     * @return string|null
     */
    public function getSupplierStreet(): ?string
    {
        return $this->supplierStreet;
    }
    /**
     * Set supplierStreet value
     * @param string $supplierStreet
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetLinkedCrmCompaniesToSupplierRequest
     */
    public function setSupplierStreet(?string $supplierStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierStreet) && !is_string($supplierStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierStreet, true), gettype($supplierStreet)), __LINE__);
        }
        $this->supplierStreet = $supplierStreet;
        
        return $this;
    }
    /**
     * Get supplierStreetNo value
     * @return string|null
     */
    public function getSupplierStreetNo(): ?string
    {
        return $this->supplierStreetNo;
    }
    /**
     * Set supplierStreetNo value
     * @param string $supplierStreetNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetLinkedCrmCompaniesToSupplierRequest
     */
    public function setSupplierStreetNo(?string $supplierStreetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierStreetNo) && !is_string($supplierStreetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierStreetNo, true), gettype($supplierStreetNo)), __LINE__);
        }
        $this->supplierStreetNo = $supplierStreetNo;
        
        return $this;
    }
    /**
     * Get supplierPostalCode value
     * @return string|null
     */
    public function getSupplierPostalCode(): ?string
    {
        return $this->supplierPostalCode;
    }
    /**
     * Set supplierPostalCode value
     * @param string $supplierPostalCode
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetLinkedCrmCompaniesToSupplierRequest
     */
    public function setSupplierPostalCode(?string $supplierPostalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierPostalCode) && !is_string($supplierPostalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierPostalCode, true), gettype($supplierPostalCode)), __LINE__);
        }
        $this->supplierPostalCode = $supplierPostalCode;
        
        return $this;
    }
}
