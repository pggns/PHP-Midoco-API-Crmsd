<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCcCardRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCcCardRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCcCard
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCcCard
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard $MidocoCrmCcCard = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The invokeWorkflow
     * Meta information extracted from the WSDL
     * - documentation: Optional workflow execution to show a task in workflow after saving a invalid CC card in CRM. It is optional because a workflow execution during batch processing will result in longer execution time.
     * - default: false
     * @var bool|null
     */
    protected ?bool $invokeWorkflow = null;
    /**
     * Constructor method for SaveCcCardRequest
     * @uses SaveCcCardRequest::setMidocoCrmCcCard()
     * @uses SaveCcCardRequest::setInternalVersion()
     * @uses SaveCcCardRequest::setInvokeWorkflow()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard $midocoCrmCcCard
     * @param int $internalVersion
     * @param bool $invokeWorkflow
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard $midocoCrmCcCard = null, ?int $internalVersion = null, ?bool $invokeWorkflow = false)
    {
        $this
            ->setMidocoCrmCcCard($midocoCrmCcCard)
            ->setInternalVersion($internalVersion)
            ->setInvokeWorkflow($invokeWorkflow);
    }
    /**
     * Get MidocoCrmCcCard value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard|null
     */
    public function getMidocoCrmCcCard(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard
    {
        return $this->MidocoCrmCcCard;
    }
    /**
     * Set MidocoCrmCcCard value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard $midocoCrmCcCard
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCcCardRequest
     */
    public function setMidocoCrmCcCard(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard $midocoCrmCcCard = null): self
    {
        $this->MidocoCrmCcCard = $midocoCrmCcCard;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCcCardRequest
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
    /**
     * Get invokeWorkflow value
     * @return bool|null
     */
    public function getInvokeWorkflow(): ?bool
    {
        return $this->invokeWorkflow;
    }
    /**
     * Set invokeWorkflow value
     * @param bool $invokeWorkflow
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCcCardRequest
     */
    public function setInvokeWorkflow(?bool $invokeWorkflow = false): self
    {
        // validation for constraint: boolean
        if (!is_null($invokeWorkflow) && !is_bool($invokeWorkflow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($invokeWorkflow, true), gettype($invokeWorkflow)), __LINE__);
        }
        $this->invokeWorkflow = $invokeWorkflow;
        
        return $this;
    }
}
