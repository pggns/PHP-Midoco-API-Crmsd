<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoSettlMDocOrgUnitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoSettlMDocOrgUnitRequest extends AbstractStructBase
{
    /**
     * The settlMdocId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $settlMdocId;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $unitName;
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $customerId;
    /**
     * Constructor method for DeleteMidocoSettlMDocOrgUnitRequest
     * @uses DeleteMidocoSettlMDocOrgUnitRequest::setSettlMdocId()
     * @uses DeleteMidocoSettlMDocOrgUnitRequest::setUnitName()
     * @uses DeleteMidocoSettlMDocOrgUnitRequest::setCustomerId()
     * @param int $settlMdocId
     * @param string $unitName
     * @param int $customerId
     */
    public function __construct(int $settlMdocId, string $unitName, int $customerId)
    {
        $this
            ->setSettlMdocId($settlMdocId)
            ->setUnitName($unitName)
            ->setCustomerId($customerId);
    }
    /**
     * Get settlMdocId value
     * @return int
     */
    public function getSettlMdocId(): int
    {
        return $this->settlMdocId;
    }
    /**
     * Set settlMdocId value
     * @param int $settlMdocId
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteMidocoSettlMDocOrgUnitRequest
     */
    public function setSettlMdocId(int $settlMdocId): self
    {
        // validation for constraint: int
        if (!is_null($settlMdocId) && !(is_int($settlMdocId) || ctype_digit($settlMdocId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlMdocId, true), gettype($settlMdocId)), __LINE__);
        }
        $this->settlMdocId = $settlMdocId;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteMidocoSettlMDocOrgUnitRequest
     */
    public function setUnitName(string $unitName): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteMidocoSettlMDocOrgUnitRequest
     */
    public function setCustomerId(int $customerId): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
}
