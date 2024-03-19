<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveVirtualCcCardRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveVirtualCcCardRequest extends AbstractStructBase
{
    /**
     * The MidocoVirtualCcCard
     * Meta information extracted from the WSDL
     * - ref: MidocoVirtualCcCard
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard $MidocoVirtualCcCard = null;
    /**
     * The isDeactivation
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isDeactivation = null;
    /**
     * The isTokenization
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isTokenization = null;
    /**
     * Constructor method for SaveVirtualCcCardRequest
     * @uses SaveVirtualCcCardRequest::setMidocoVirtualCcCard()
     * @uses SaveVirtualCcCardRequest::setIsDeactivation()
     * @uses SaveVirtualCcCardRequest::setIsTokenization()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard $midocoVirtualCcCard
     * @param bool $isDeactivation
     * @param bool $isTokenization
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard $midocoVirtualCcCard = null, ?bool $isDeactivation = false, ?bool $isTokenization = false)
    {
        $this
            ->setMidocoVirtualCcCard($midocoVirtualCcCard)
            ->setIsDeactivation($isDeactivation)
            ->setIsTokenization($isTokenization);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveVirtualCcCardRequest
     */
    public function setMidocoVirtualCcCard(?\Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard $midocoVirtualCcCard = null): self
    {
        $this->MidocoVirtualCcCard = $midocoVirtualCcCard;
        
        return $this;
    }
    /**
     * Get isDeactivation value
     * @return bool|null
     */
    public function getIsDeactivation(): ?bool
    {
        return $this->isDeactivation;
    }
    /**
     * Set isDeactivation value
     * @param bool $isDeactivation
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveVirtualCcCardRequest
     */
    public function setIsDeactivation(?bool $isDeactivation = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeactivation) && !is_bool($isDeactivation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeactivation, true), gettype($isDeactivation)), __LINE__);
        }
        $this->isDeactivation = $isDeactivation;
        
        return $this;
    }
    /**
     * Get isTokenization value
     * @return bool|null
     */
    public function getIsTokenization(): ?bool
    {
        return $this->isTokenization;
    }
    /**
     * Set isTokenization value
     * @param bool $isTokenization
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveVirtualCcCardRequest
     */
    public function setIsTokenization(?bool $isTokenization = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isTokenization) && !is_bool($isTokenization)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTokenization, true), gettype($isTokenization)), __LINE__);
        }
        $this->isTokenization = $isTokenization;
        
        return $this;
    }
}
