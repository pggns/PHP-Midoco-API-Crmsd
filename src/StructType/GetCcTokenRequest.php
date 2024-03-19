<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCcTokenRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCcTokenRequest extends AbstractStructBase
{
    /**
     * The ccTokenReferenceId
     * @var int|null
     */
    protected ?int $ccTokenReferenceId = null;
    /**
     * The ccTokenType
     * @var string|null
     */
    protected ?string $ccTokenType = null;
    /**
     * Constructor method for GetCcTokenRequest
     * @uses GetCcTokenRequest::setCcTokenReferenceId()
     * @uses GetCcTokenRequest::setCcTokenType()
     * @param int $ccTokenReferenceId
     * @param string $ccTokenType
     */
    public function __construct(?int $ccTokenReferenceId = null, ?string $ccTokenType = null)
    {
        $this
            ->setCcTokenReferenceId($ccTokenReferenceId)
            ->setCcTokenType($ccTokenType);
    }
    /**
     * Get ccTokenReferenceId value
     * @return int|null
     */
    public function getCcTokenReferenceId(): ?int
    {
        return $this->ccTokenReferenceId;
    }
    /**
     * Set ccTokenReferenceId value
     * @param int $ccTokenReferenceId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCcTokenRequest
     */
    public function setCcTokenReferenceId(?int $ccTokenReferenceId = null): self
    {
        // validation for constraint: int
        if (!is_null($ccTokenReferenceId) && !(is_int($ccTokenReferenceId) || ctype_digit($ccTokenReferenceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccTokenReferenceId, true), gettype($ccTokenReferenceId)), __LINE__);
        }
        $this->ccTokenReferenceId = $ccTokenReferenceId;
        
        return $this;
    }
    /**
     * Get ccTokenType value
     * @return string|null
     */
    public function getCcTokenType(): ?string
    {
        return $this->ccTokenType;
    }
    /**
     * Set ccTokenType value
     * @param string $ccTokenType
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCcTokenRequest
     */
    public function setCcTokenType(?string $ccTokenType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccTokenType) && !is_string($ccTokenType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccTokenType, true), gettype($ccTokenType)), __LINE__);
        }
        $this->ccTokenType = $ccTokenType;
        
        return $this;
    }
}
