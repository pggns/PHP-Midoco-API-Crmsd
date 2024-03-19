<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSettlMDocsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoSettlMDocsRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The settlMdocId
     * @var int|null
     */
    protected ?int $settlMdocId = null;
    /**
     * Constructor method for GetMidocoSettlMDocsRequest
     * @uses GetMidocoSettlMDocsRequest::setCustomerId()
     * @uses GetMidocoSettlMDocsRequest::setSettlMdocId()
     * @param int $customerId
     * @param int $settlMdocId
     */
    public function __construct(?int $customerId = null, ?int $settlMdocId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setSettlMdocId($settlMdocId);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetMidocoSettlMDocsRequest
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
     * Get settlMdocId value
     * @return int|null
     */
    public function getSettlMdocId(): ?int
    {
        return $this->settlMdocId;
    }
    /**
     * Set settlMdocId value
     * @param int $settlMdocId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetMidocoSettlMDocsRequest
     */
    public function setSettlMdocId(?int $settlMdocId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlMdocId) && !(is_int($settlMdocId) || ctype_digit($settlMdocId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlMdocId, true), gettype($settlMdocId)), __LINE__);
        }
        $this->settlMdocId = $settlMdocId;
        
        return $this;
    }
}
