<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDebitCardRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteDebitCardRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $MidocoCrmDebitCard = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The invokeWorkflow
     * Meta information extracted from the WSDL
     * - documentation: Optional workflow execution to show a task in workflow after deleting Debit card in CRM. It is optional because a workflow execution during batch processing will result in longer execution time.
     * - default: false
     * @var bool|null
     */
    protected ?bool $invokeWorkflow = null;
    /**
     * Constructor method for DeleteDebitCardRequest
     * @uses DeleteDebitCardRequest::setMidocoCrmDebitCard()
     * @uses DeleteDebitCardRequest::setInternalVersion()
     * @uses DeleteDebitCardRequest::setInvokeWorkflow()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $midocoCrmDebitCard
     * @param int $internalVersion
     * @param bool $invokeWorkflow
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null, ?int $internalVersion = null, ?bool $invokeWorkflow = false)
    {
        $this
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setInternalVersion($internalVersion)
            ->setInvokeWorkflow($invokeWorkflow);
    }
    /**
     * Get MidocoCrmDebitCard value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard|null
     */
    public function getMidocoCrmDebitCard(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard
    {
        return $this->MidocoCrmDebitCard;
    }
    /**
     * Set MidocoCrmDebitCard value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $midocoCrmDebitCard
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteDebitCardRequest
     */
    public function setMidocoCrmDebitCard(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null): self
    {
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteDebitCardRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteDebitCardRequest
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
