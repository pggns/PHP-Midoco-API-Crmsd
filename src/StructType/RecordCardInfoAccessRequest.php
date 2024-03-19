<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecordCardInfoAccessRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RecordCardInfoAccessRequest extends AbstractStructBase
{
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The CreditCardNo
     * @var string|null
     */
    protected ?string $CreditCardNo = null;
    /**
     * Constructor method for RecordCardInfoAccessRequest
     * @uses RecordCardInfoAccessRequest::setUserId()
     * @uses RecordCardInfoAccessRequest::setCreditCardNo()
     * @param int $userId
     * @param string $creditCardNo
     */
    public function __construct(?int $userId = null, ?string $creditCardNo = null)
    {
        $this
            ->setUserId($userId)
            ->setCreditCardNo($creditCardNo);
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Crmsd\StructType\RecordCardInfoAccessRequest
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
    /**
     * Get CreditCardNo value
     * @return string|null
     */
    public function getCreditCardNo(): ?string
    {
        return $this->CreditCardNo;
    }
    /**
     * Set CreditCardNo value
     * @param string $creditCardNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\RecordCardInfoAccessRequest
     */
    public function setCreditCardNo(?string $creditCardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($creditCardNo) && !is_string($creditCardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditCardNo, true), gettype($creditCardNo)), __LINE__);
        }
        $this->CreditCardNo = $creditCardNo;
        
        return $this;
    }
}
