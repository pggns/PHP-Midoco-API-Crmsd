<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMediatorSettlementLevelRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMediatorSettlementLevelRequest extends AbstractStructBase
{
    /**
     * The MidocoMediatorSettlementLevel
     * Meta information extracted from the WSDL
     * - ref: MidocoMediatorSettlementLevel
     * @var \Pggns\MidocoApi\Crmsd\StructType\MediatorSettlementLevelDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MediatorSettlementLevelDTO $MidocoMediatorSettlementLevel = null;
    /**
     * Constructor method for SaveMediatorSettlementLevelRequest
     * @uses SaveMediatorSettlementLevelRequest::setMidocoMediatorSettlementLevel()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel = null)
    {
        $this
            ->setMidocoMediatorSettlementLevel($midocoMediatorSettlementLevel);
    }
    /**
     * Get MidocoMediatorSettlementLevel value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MediatorSettlementLevelDTO|null
     */
    public function getMidocoMediatorSettlementLevel(): ?\Pggns\MidocoApi\Crmsd\StructType\MediatorSettlementLevelDTO
    {
        return $this->MidocoMediatorSettlementLevel;
    }
    /**
     * Set MidocoMediatorSettlementLevel value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveMediatorSettlementLevelRequest
     */
    public function setMidocoMediatorSettlementLevel(?\Pggns\MidocoApi\Crmsd\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel = null): self
    {
        $this->MidocoMediatorSettlementLevel = $midocoMediatorSettlementLevel;
        
        return $this;
    }
}
