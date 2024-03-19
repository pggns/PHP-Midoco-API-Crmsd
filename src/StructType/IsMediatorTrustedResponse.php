<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsMediatorTrustedResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IsMediatorTrustedResponse extends AbstractStructBase
{
    /**
     * The isTrusted
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $isTrusted;
    /**
     * Constructor method for IsMediatorTrustedResponse
     * @uses IsMediatorTrustedResponse::setIsTrusted()
     * @param bool $isTrusted
     */
    public function __construct(bool $isTrusted)
    {
        $this
            ->setIsTrusted($isTrusted);
    }
    /**
     * Get isTrusted value
     * @return bool
     */
    public function getIsTrusted(): bool
    {
        return $this->isTrusted;
    }
    /**
     * Set isTrusted value
     * @param bool $isTrusted
     * @return \Pggns\MidocoApi\Crmsd\StructType\IsMediatorTrustedResponse
     */
    public function setIsTrusted(bool $isTrusted): self
    {
        // validation for constraint: boolean
        if (!is_null($isTrusted) && !is_bool($isTrusted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTrusted, true), gettype($isTrusted)), __LINE__);
        }
        $this->isTrusted = $isTrusted;
        
        return $this;
    }
}
