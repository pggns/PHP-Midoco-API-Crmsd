<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerLinksRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerLinksRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The linkType
     * @var int|null
     */
    protected ?int $linkType = null;
    /**
     * Constructor method for GetCustomerLinksRequest
     * @uses GetCustomerLinksRequest::setMidocoCustomerId()
     * @uses GetCustomerLinksRequest::setLinkType()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @param int $linkType
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null, ?int $linkType = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setLinkType($linkType);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerLinksRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get linkType value
     * @return int|null
     */
    public function getLinkType(): ?int
    {
        return $this->linkType;
    }
    /**
     * Set linkType value
     * @param int $linkType
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerLinksRequest
     */
    public function setLinkType(?int $linkType = null): self
    {
        // validation for constraint: int
        if (!is_null($linkType) && !(is_int($linkType) || ctype_digit($linkType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($linkType, true), gettype($linkType)), __LINE__);
        }
        $this->linkType = $linkType;
        
        return $this;
    }
}
