<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveComplaintStateRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: saveComplaintState - adds a complaint state
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveComplaintStateRequest extends AbstractStructBase
{
    /**
     * The MidocoComplaintState
     * Meta information extracted from the WSDL
     * - ref: MidocoComplaintState
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO $MidocoComplaintState = null;
    /**
     * Constructor method for SaveComplaintStateRequest
     * @uses SaveComplaintStateRequest::setMidocoComplaintState()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO $midocoComplaintState
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO $midocoComplaintState = null)
    {
        $this
            ->setMidocoComplaintState($midocoComplaintState);
    }
    /**
     * Get MidocoComplaintState value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO|null
     */
    public function getMidocoComplaintState(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO
    {
        return $this->MidocoComplaintState;
    }
    /**
     * Set MidocoComplaintState value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO $midocoComplaintState
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveComplaintStateRequest
     */
    public function setMidocoComplaintState(?\Pggns\MidocoApi\Crmsd\StructType\MidocoComplaintStateDTO $midocoComplaintState = null): self
    {
        $this->MidocoComplaintState = $midocoComplaintState;
        
        return $this;
    }
}
