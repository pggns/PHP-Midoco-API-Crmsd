<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmNoticeCommentsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrmNoticeCommentsRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The noticePosition
     * @var int|null
     */
    protected ?int $noticePosition = null;
    /**
     * Constructor method for GetCrmNoticeCommentsRequest
     * @uses GetCrmNoticeCommentsRequest::setCustomerId()
     * @uses GetCrmNoticeCommentsRequest::setNoticePosition()
     * @param int $customerId
     * @param int $noticePosition
     */
    public function __construct(?int $customerId = null, ?int $noticePosition = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setNoticePosition($noticePosition);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmNoticeCommentsRequest
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get noticePosition value
     * @return int|null
     */
    public function getNoticePosition(): ?int
    {
        return $this->noticePosition;
    }
    /**
     * Set noticePosition value
     * @param int $noticePosition
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmNoticeCommentsRequest
     */
    public function setNoticePosition(?int $noticePosition = null): self
    {
        // validation for constraint: int
        if (!is_null($noticePosition) && !(is_int($noticePosition) || ctype_digit($noticePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noticePosition, true), gettype($noticePosition)), __LINE__);
        }
        $this->noticePosition = $noticePosition;
        
        return $this;
    }
}
