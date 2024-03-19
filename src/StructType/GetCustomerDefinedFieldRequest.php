<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerDefinedFieldRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerDefinedFieldRequest extends AbstractStructBase
{
    /**
     * The cdfName
     * @var string|null
     */
    protected ?string $cdfName = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The remarkMapping
     * @var string|null
     */
    protected ?string $remarkMapping = null;
    /**
     * Constructor method for GetCustomerDefinedFieldRequest
     * @uses GetCustomerDefinedFieldRequest::setCdfName()
     * @uses GetCustomerDefinedFieldRequest::setDescription()
     * @uses GetCustomerDefinedFieldRequest::setRemarkMapping()
     * @param string $cdfName
     * @param string $description
     * @param string $remarkMapping
     */
    public function __construct(?string $cdfName = null, ?string $description = null, ?string $remarkMapping = null)
    {
        $this
            ->setCdfName($cdfName)
            ->setDescription($description)
            ->setRemarkMapping($remarkMapping);
    }
    /**
     * Get cdfName value
     * @return string|null
     */
    public function getCdfName(): ?string
    {
        return $this->cdfName;
    }
    /**
     * Set cdfName value
     * @param string $cdfName
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerDefinedFieldRequest
     */
    public function setCdfName(?string $cdfName = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfName) && !is_string($cdfName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfName, true), gettype($cdfName)), __LINE__);
        }
        $this->cdfName = $cdfName;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerDefinedFieldRequest
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get remarkMapping value
     * @return string|null
     */
    public function getRemarkMapping(): ?string
    {
        return $this->remarkMapping;
    }
    /**
     * Set remarkMapping value
     * @param string $remarkMapping
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerDefinedFieldRequest
     */
    public function setRemarkMapping(?string $remarkMapping = null): self
    {
        // validation for constraint: string
        if (!is_null($remarkMapping) && !is_string($remarkMapping)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remarkMapping, true), gettype($remarkMapping)), __LINE__);
        }
        $this->remarkMapping = $remarkMapping;
        
        return $this;
    }
}
