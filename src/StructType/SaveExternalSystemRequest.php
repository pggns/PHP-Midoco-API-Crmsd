<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveExternalSystemRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveExternalSystemRequest extends AbstractStructBase
{
    /**
     * The MidocoExternalSystem
     * Meta information extracted from the WSDL
     * - ref: MidocoExternalSystem
     * @var \Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO $MidocoExternalSystem = null;
    /**
     * Constructor method for SaveExternalSystemRequest
     * @uses SaveExternalSystemRequest::setMidocoExternalSystem()
     * @param \Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO $midocoExternalSystem
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO $midocoExternalSystem = null)
    {
        $this
            ->setMidocoExternalSystem($midocoExternalSystem);
    }
    /**
     * Get MidocoExternalSystem value
     * @return \Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO|null
     */
    public function getMidocoExternalSystem(): ?\Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO
    {
        return $this->MidocoExternalSystem;
    }
    /**
     * Set MidocoExternalSystem value
     * @param \Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO $midocoExternalSystem
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveExternalSystemRequest
     */
    public function setMidocoExternalSystem(?\Pggns\MidocoApi\Crmsd\StructType\ExternalSystemDTO $midocoExternalSystem = null): self
    {
        $this->MidocoExternalSystem = $midocoExternalSystem;
        
        return $this;
    }
}
