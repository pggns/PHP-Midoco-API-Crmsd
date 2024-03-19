<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteVirtualCcCardRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteVirtualCcCardRequest extends AbstractStructBase
{
    /**
     * The MidocoVirtualCcCard
     * Meta information extracted from the WSDL
     * - ref: MidocoVirtualCcCard
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard $MidocoVirtualCcCard = null;
    /**
     * Constructor method for DeleteVirtualCcCardRequest
     * @uses DeleteVirtualCcCardRequest::setMidocoVirtualCcCard()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard $midocoVirtualCcCard
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard $midocoVirtualCcCard = null)
    {
        $this
            ->setMidocoVirtualCcCard($midocoVirtualCcCard);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteVirtualCcCardRequest
     */
    public function setMidocoVirtualCcCard(?\Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCard $midocoVirtualCcCard = null): self
    {
        $this->MidocoVirtualCcCard = $midocoVirtualCcCard;
        
        return $this;
    }
}
