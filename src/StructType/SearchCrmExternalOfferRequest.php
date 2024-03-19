<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCrmExternalOfferRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCrmExternalOfferRequest extends AbstractStructBase
{
    /**
     * The refId
     * @var int|null
     */
    protected ?int $refId = null;
    /**
     * The advisorId
     * @var string|null
     */
    protected ?string $advisorId = null;
    /**
     * The offerId
     * @var string|null
     */
    protected ?string $offerId = null;
    /**
     * The scope
     * @var string|null
     */
    protected ?string $scope = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * Constructor method for SearchCrmExternalOfferRequest
     * @uses SearchCrmExternalOfferRequest::setRefId()
     * @uses SearchCrmExternalOfferRequest::setAdvisorId()
     * @uses SearchCrmExternalOfferRequest::setOfferId()
     * @uses SearchCrmExternalOfferRequest::setScope()
     * @uses SearchCrmExternalOfferRequest::setStatus()
     * @uses SearchCrmExternalOfferRequest::setMidocoCustomerId()
     * @param int $refId
     * @param string $advisorId
     * @param string $offerId
     * @param string $scope
     * @param string $status
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     */
    public function __construct(?int $refId = null, ?string $advisorId = null, ?string $offerId = null, ?string $scope = null, ?string $status = null, ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null)
    {
        $this
            ->setRefId($refId)
            ->setAdvisorId($advisorId)
            ->setOfferId($offerId)
            ->setScope($scope)
            ->setStatus($status)
            ->setMidocoCustomerId($midocoCustomerId);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCrmExternalOfferRequest
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
     * Get advisorId value
     * @return string|null
     */
    public function getAdvisorId(): ?string
    {
        return $this->advisorId;
    }
    /**
     * Set advisorId value
     * @param string $advisorId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCrmExternalOfferRequest
     */
    public function setAdvisorId(?string $advisorId = null): self
    {
        // validation for constraint: string
        if (!is_null($advisorId) && !is_string($advisorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($advisorId, true), gettype($advisorId)), __LINE__);
        }
        $this->advisorId = $advisorId;
        
        return $this;
    }
    /**
     * Get offerId value
     * @return string|null
     */
    public function getOfferId(): ?string
    {
        return $this->offerId;
    }
    /**
     * Set offerId value
     * @param string $offerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCrmExternalOfferRequest
     */
    public function setOfferId(?string $offerId = null): self
    {
        // validation for constraint: string
        if (!is_null($offerId) && !is_string($offerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offerId, true), gettype($offerId)), __LINE__);
        }
        $this->offerId = $offerId;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCrmExternalOfferRequest
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
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCrmExternalOfferRequest
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    public function getMidocoCustomerId(): ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCrmExternalOfferRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
}
