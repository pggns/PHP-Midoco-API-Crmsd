<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDebitorsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDebitorsRequest extends AbstractStructBase
{
    /**
     * The custId
     * @var int|null
     */
    protected ?int $custId = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * Constructor method for GetDebitorsRequest
     * @uses GetDebitorsRequest::setCustId()
     * @uses GetDebitorsRequest::setDebitorNo()
     * @param int $custId
     * @param string $debitorNo
     */
    public function __construct(?int $custId = null, ?string $debitorNo = null)
    {
        $this
            ->setCustId($custId)
            ->setDebitorNo($debitorNo);
    }
    /**
     * Get custId value
     * @return int|null
     */
    public function getCustId(): ?int
    {
        return $this->custId;
    }
    /**
     * Set custId value
     * @param int $custId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitorsRequest
     */
    public function setCustId(?int $custId = null): self
    {
        // validation for constraint: int
        if (!is_null($custId) && !(is_int($custId) || ctype_digit($custId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($custId, true), gettype($custId)), __LINE__);
        }
        $this->custId = $custId;
        
        return $this;
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitorsRequest
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
}
