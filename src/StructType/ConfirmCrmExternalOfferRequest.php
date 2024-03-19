<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConfirmCrmExternalOfferRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ConfirmCrmExternalOfferRequest extends AbstractStructBase
{
    /**
     * The refId
     * @var int|null
     */
    protected ?int $refId = null;
    /**
     * The advisoryId
     * @var string|null
     */
    protected ?string $advisoryId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The scope
     * @var string|null
     */
    protected ?string $scope = null;
    /**
     * Constructor method for ConfirmCrmExternalOfferRequest
     * @uses ConfirmCrmExternalOfferRequest::setRefId()
     * @uses ConfirmCrmExternalOfferRequest::setAdvisoryId()
     * @uses ConfirmCrmExternalOfferRequest::setCustomerId()
     * @uses ConfirmCrmExternalOfferRequest::setScope()
     * @param int $refId
     * @param string $advisoryId
     * @param int $customerId
     * @param string $scope
     */
    public function __construct(?int $refId = null, ?string $advisoryId = null, ?int $customerId = null, ?string $scope = null)
    {
        $this
            ->setRefId($refId)
            ->setAdvisoryId($advisoryId)
            ->setCustomerId($customerId)
            ->setScope($scope);
    }
    /**
     * Get refId value
     * @return int|null
     */
    public function getRefId(): ?int
    {
        return $this->refId;
    }
    /**
     * Set refId value
     * @param int $refId
     * @return \Pggns\MidocoApi\Crmsd\StructType\ConfirmCrmExternalOfferRequest
     */
    public function setRefId(?int $refId = null): self
    {
        // validation for constraint: int
        if (!is_null($refId) && !(is_int($refId) || ctype_digit($refId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refId, true), gettype($refId)), __LINE__);
        }
        $this->refId = $refId;
        
        return $this;
    }
    /**
     * Get advisoryId value
     * @return string|null
     */
    public function getAdvisoryId(): ?string
    {
        return $this->advisoryId;
    }
    /**
     * Set advisoryId value
     * @param string $advisoryId
     * @return \Pggns\MidocoApi\Crmsd\StructType\ConfirmCrmExternalOfferRequest
     */
    public function setAdvisoryId(?string $advisoryId = null): self
    {
        // validation for constraint: string
        if (!is_null($advisoryId) && !is_string($advisoryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($advisoryId, true), gettype($advisoryId)), __LINE__);
        }
        $this->advisoryId = $advisoryId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\ConfirmCrmExternalOfferRequest
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
     * Get scope value
     * @return string|null
     */
    public function getScope(): ?string
    {
        return $this->scope;
    }
    /**
     * Set scope value
     * @param string $scope
     * @return \Pggns\MidocoApi\Crmsd\StructType\ConfirmCrmExternalOfferRequest
     */
    public function setScope(?string $scope = null): self
    {
        // validation for constraint: string
        if (!is_null($scope) && !is_string($scope)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scope, true), gettype($scope)), __LINE__);
        }
        $this->scope = $scope;
        
        return $this;
    }
}
