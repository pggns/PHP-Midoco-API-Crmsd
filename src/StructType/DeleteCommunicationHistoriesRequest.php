<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCommunicationHistoriesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCommunicationHistoriesRequest extends AbstractStructBase
{
    /**
     * The MidocoCommunicationHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoCommunicationHistory
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory $MidocoCommunicationHistory = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for DeleteCommunicationHistoriesRequest
     * @uses DeleteCommunicationHistoriesRequest::setMidocoCommunicationHistory()
     * @uses DeleteCommunicationHistoriesRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory $midocoCommunicationHistory
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory $midocoCommunicationHistory = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCommunicationHistory($midocoCommunicationHistory)
            ->setInternalVersion($internalVersion);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCommunicationHistoriesRequest
     */
    public function setMidocoCommunicationHistory(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCommunicationHistory $midocoCommunicationHistory = null): self
    {
        $this->MidocoCommunicationHistory = $midocoCommunicationHistory;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCommunicationHistoriesRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
