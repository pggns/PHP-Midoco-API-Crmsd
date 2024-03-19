<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorContactsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMediatorContactsRequest extends AbstractStructBase
{
    /**
     * The mediatorId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $mediatorId;
    /**
     * The contactType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $contactType = null;
    /**
     * Constructor method for GetMediatorContactsRequest
     * @uses GetMediatorContactsRequest::setMediatorId()
     * @uses GetMediatorContactsRequest::setContactType()
     * @param string $mediatorId
     * @param string $contactType
     */
    public function __construct(string $mediatorId, ?string $contactType = null)
    {
        $this
            ->setMediatorId($mediatorId)
            ->setContactType($contactType);
    }
    /**
     * Get mediatorId value
     * @return string
     */
    public function getMediatorId(): string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetMediatorContactsRequest
     */
    public function setMediatorId(string $mediatorId): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get contactType value
     * @return string|null
     */
    public function getContactType(): ?string
    {
        return $this->contactType;
    }
    /**
     * Set contactType value
     * @param string $contactType
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetMediatorContactsRequest
     */
    public function setContactType(?string $contactType = null): self
    {
        // validation for constraint: string
        if (!is_null($contactType) && !is_string($contactType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactType, true), gettype($contactType)), __LINE__);
        }
        $this->contactType = $contactType;
        
        return $this;
    }
}
