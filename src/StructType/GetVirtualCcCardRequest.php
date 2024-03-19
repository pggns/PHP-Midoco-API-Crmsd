<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVirtualCcCardRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVirtualCcCardRequest extends AbstractStructBase
{
    /**
     * The MidocoVirtualCcCard
     * Meta information extracted from the WSDL
     * - ref: MidocoVirtualCcCard
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard $MidocoVirtualCcCard = null;
    /**
     * The isActive
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * Constructor method for GetVirtualCcCardRequest
     * @uses GetVirtualCcCardRequest::setMidocoVirtualCcCard()
     * @uses GetVirtualCcCardRequest::setIsActive()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard $midocoVirtualCcCard
     * @param bool $isActive
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard $midocoVirtualCcCard = null, ?bool $isActive = null)
    {
        $this
            ->setMidocoVirtualCcCard($midocoVirtualCcCard)
            ->setIsActive($isActive);
    }
    /**
     * Get MidocoVirtualCcCard value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard|null
     */
    public function getMidocoVirtualCcCard(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard
    {
        return $this->MidocoVirtualCcCard;
    }
    /**
     * Set MidocoVirtualCcCard value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard $midocoVirtualCcCard
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetVirtualCcCardRequest
     */
    public function setMidocoVirtualCcCard(?\Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard $midocoVirtualCcCard = null): self
    {
        $this->MidocoVirtualCcCard = $midocoVirtualCcCard;
        
        return $this;
    }
    /**
     * Get isActive value
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }
    /**
     * Set isActive value
     * @param bool $isActive
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetVirtualCcCardRequest
     */
    public function setIsActive(?bool $isActive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isActive) && !is_bool($isActive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActive, true), gettype($isActive)), __LINE__);
        }
        $this->isActive = $isActive;
        
        return $this;
    }
}
