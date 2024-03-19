<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmHistoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCrmHistoryRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmHistory
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmHistoryDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CrmHistoryDTO $MidocoCrmHistory = null;
    /**
     * Constructor method for SaveCrmHistoryRequest
     * @uses SaveCrmHistoryRequest::setMidocoCrmHistory()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmHistoryDTO $midocoCrmHistory
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CrmHistoryDTO $midocoCrmHistory = null)
    {
        $this
            ->setMidocoCrmHistory($midocoCrmHistory);
    }
    /**
     * Get MidocoCrmHistory value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmHistoryDTO|null
     */
    public function getMidocoCrmHistory(): ?\Pggns\MidocoApi\Crmsd\StructType\CrmHistoryDTO
    {
        return $this->MidocoCrmHistory;
    }
    /**
     * Set MidocoCrmHistory value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmHistoryDTO $midocoCrmHistory
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCrmHistoryRequest
     */
    public function setMidocoCrmHistory(?\Pggns\MidocoApi\Crmsd\StructType\CrmHistoryDTO $midocoCrmHistory = null): self
    {
        $this->MidocoCrmHistory = $midocoCrmHistory;
        
        return $this;
    }
}
