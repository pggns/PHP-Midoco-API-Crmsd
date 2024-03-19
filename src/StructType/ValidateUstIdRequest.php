<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateUstIdRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidateUstIdRequest extends AbstractStructBase
{
    /**
     * The ustId
     * @var string|null
     */
    protected ?string $ustId = null;
    /**
     * Constructor method for ValidateUstIdRequest
     * @uses ValidateUstIdRequest::setUstId()
     * @param string $ustId
     */
    public function __construct(?string $ustId = null)
    {
        $this
            ->setUstId($ustId);
    }
    /**
     * Get ustId value
     * @return string|null
     */
    public function getUstId(): ?string
    {
        return $this->ustId;
    }
    /**
     * Set ustId value
     * @param string $ustId
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateUstIdRequest
     */
    public function setUstId(?string $ustId = null): self
    {
        // validation for constraint: string
        if (!is_null($ustId) && !is_string($ustId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ustId, true), gettype($ustId)), __LINE__);
        }
        $this->ustId = $ustId;
        
        return $this;
    }
}
