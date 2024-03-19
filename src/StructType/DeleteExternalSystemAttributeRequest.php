<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteExternalSystemAttributeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteExternalSystemAttributeRequest extends AbstractStructBase
{
    /**
     * The systemName
     * @var string|null
     */
    protected ?string $systemName = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The attributeName
     * @var string|null
     */
    protected ?string $attributeName = null;
    /**
     * Constructor method for DeleteExternalSystemAttributeRequest
     * @uses DeleteExternalSystemAttributeRequest::setSystemName()
     * @uses DeleteExternalSystemAttributeRequest::setType()
     * @uses DeleteExternalSystemAttributeRequest::setAttributeName()
     * @param string $systemName
     * @param string $type
     * @param string $attributeName
     */
    public function __construct(?string $systemName = null, ?string $type = null, ?string $attributeName = null)
    {
        $this
            ->setSystemName($systemName)
            ->setType($type)
            ->setAttributeName($attributeName);
    }
    /**
     * Get systemName value
     * @return string|null
     */
    public function getSystemName(): ?string
    {
        return $this->systemName;
    }
    /**
     * Set systemName value
     * @param string $systemName
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteExternalSystemAttributeRequest
     */
    public function setSystemName(?string $systemName = null): self
    {
        // validation for constraint: string
        if (!is_null($systemName) && !is_string($systemName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($systemName, true), gettype($systemName)), __LINE__);
        }
        $this->systemName = $systemName;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteExternalSystemAttributeRequest
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get attributeName value
     * @return string|null
     */
    public function getAttributeName(): ?string
    {
        return $this->attributeName;
    }
    /**
     * Set attributeName value
     * @param string $attributeName
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteExternalSystemAttributeRequest
     */
    public function setAttributeName(?string $attributeName = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeName) && !is_string($attributeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeName, true), gettype($attributeName)), __LINE__);
        }
        $this->attributeName = $attributeName;
        
        return $this;
    }
}
