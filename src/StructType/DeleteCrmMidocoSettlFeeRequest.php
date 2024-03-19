<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCrmMidocoSettlFeeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCrmMidocoSettlFeeRequest extends AbstractStructBase
{
    /**
     * The feeId
     * @var int|null
     */
    protected ?int $feeId = null;
    /**
     * Constructor method for DeleteCrmMidocoSettlFeeRequest
     * @uses DeleteCrmMidocoSettlFeeRequest::setFeeId()
     * @param int $feeId
     */
    public function __construct(?int $feeId = null)
    {
        $this
            ->setFeeId($feeId);
    }
    /**
     * Get feeId value
     * @return int|null
     */
    public function getFeeId(): ?int
    {
        return $this->feeId;
    }
    /**
     * Set feeId value
     * @param int $feeId
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCrmMidocoSettlFeeRequest
     */
    public function setFeeId(?int $feeId = null): self
    {
        // validation for constraint: int
        if (!is_null($feeId) && !(is_int($feeId) || ctype_digit($feeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeId, true), gettype($feeId)), __LINE__);
        }
        $this->feeId = $feeId;
        
        return $this;
    }
}
