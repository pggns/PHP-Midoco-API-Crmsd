<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintCommunicationHistoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintCommunicationHistoryRequest extends AbstractStructBase
{
    /**
     * The MidocoCommunicationHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoCommunicationHistory
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory $MidocoCommunicationHistory = null;
    /**
     * Constructor method for PrintCommunicationHistoryRequest
     * @uses PrintCommunicationHistoryRequest::setMidocoCommunicationHistory()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory $midocoCommunicationHistory
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory $midocoCommunicationHistory = null)
    {
        $this
            ->setMidocoCommunicationHistory($midocoCommunicationHistory);
    }
    /**
     * Get MidocoCommunicationHistory value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory|null
     */
    public function getMidocoCommunicationHistory(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory
    {
        return $this->MidocoCommunicationHistory;
    }
    /**
     * Set MidocoCommunicationHistory value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory $midocoCommunicationHistory
     * @return \Pggns\MidocoApi\Crmsd\StructType\PrintCommunicationHistoryRequest
     */
    public function setMidocoCommunicationHistory(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory $midocoCommunicationHistory = null): self
    {
        $this->MidocoCommunicationHistory = $midocoCommunicationHistory;
        
        return $this;
    }
}
