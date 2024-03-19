<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailablePrintRecipientRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailablePrintRecipientRequest extends AbstractStructBase
{
    /**
     * The cusomerId
     * @var int|null
     */
    protected ?int $cusomerId = null;
    /**
     * Constructor method for GetAvailablePrintRecipientRequest
     * @uses GetAvailablePrintRecipientRequest::setCusomerId()
     * @param int $cusomerId
     */
    public function __construct(?int $cusomerId = null)
    {
        $this
            ->setCusomerId($cusomerId);
    }
    /**
     * Get cusomerId value
     * @return int|null
     */
    public function getCusomerId(): ?int
    {
        return $this->cusomerId;
    }
    /**
     * Set cusomerId value
     * @param int $cusomerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAvailablePrintRecipientRequest
     */
    public function setCusomerId(?int $cusomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($cusomerId) && !(is_int($cusomerId) || ctype_digit($cusomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cusomerId, true), gettype($cusomerId)), __LINE__);
        }
        $this->cusomerId = $cusomerId;
        
        return $this;
    }
}
