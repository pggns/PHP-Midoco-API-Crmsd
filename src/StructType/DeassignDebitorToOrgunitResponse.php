<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeassignDebitorToOrgunitResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeassignDebitorToOrgunitResponse extends AbstractStructBase
{
    /**
     * The result
     * @var bool|null
     */
    protected ?bool $result = null;
    /**
     * Constructor method for DeassignDebitorToOrgunitResponse
     * @uses DeassignDebitorToOrgunitResponse::setResult()
     * @param bool $result
     */
    public function __construct(?bool $result = null)
    {
        $this
            ->setResult($result);
    }
    /**
     * Get result value
     * @return bool|null
     */
    public function getResult(): ?bool
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param bool $result
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeassignDebitorToOrgunitResponse
     */
    public function setResult(?bool $result = null): self
    {
        // validation for constraint: boolean
        if (!is_null($result) && !is_bool($result)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        $this->result = $result;
        
        return $this;
    }
}
