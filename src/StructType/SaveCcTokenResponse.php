<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCcTokenResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCcTokenResponse extends AbstractStructBase
{
    /**
     * The ccTokenReferenceId
     * @var int|null
     */
    protected ?int $ccTokenReferenceId = null;
    /**
     * Constructor method for SaveCcTokenResponse
     * @uses SaveCcTokenResponse::setCcTokenReferenceId()
     * @param int $ccTokenReferenceId
     */
    public function __construct(?int $ccTokenReferenceId = null)
    {
        $this
            ->setCcTokenReferenceId($ccTokenReferenceId);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCcTokenResponse
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
}
