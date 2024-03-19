<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMediatorResponse extends AbstractStructBase
{
    /**
     * The MidocoMediator
     * Meta information extracted from the WSDL
     * - ref: MidocoMediator
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO $MidocoMediator = null;
    /**
     * Constructor method for GetMediatorResponse
     * @uses GetMediatorResponse::setMidocoMediator()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO $midocoMediator
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO $midocoMediator = null)
    {
        $this
            ->setMidocoMediator($midocoMediator);
    }
    /**
     * Get MidocoMediator value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO|null
     */
    public function getMidocoMediator(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO
    {
        return $this->MidocoMediator;
    }
    /**
     * Set MidocoMediator value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO $midocoMediator
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetMediatorResponse
     */
    public function setMidocoMediator(?\Pggns\MidocoApi\Crmsd\StructType\MidocoMediatorDTO $midocoMediator = null): self
    {
        $this->MidocoMediator = $midocoMediator;
        
        return $this;
    }
}
