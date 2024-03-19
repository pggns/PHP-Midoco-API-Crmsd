<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDebitCardRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveDebitCardRequest extends AbstractStructBase
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
     * The useValidation
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $useValidation = null;
    /**
     * The invokeWorkflow
     * Meta information extracted from the WSDL
     * - documentation: Optional workflow execution to show a task in workflow after saving a missing Debit card in CRM. It is optional because a workflow execution during batch processing will result in longer execution time.
     * - default: false
     * @var bool|null
     */
    protected ?bool $invokeWorkflow = null;
    /**
     * Constructor method for SaveDebitCardRequest
     * @uses SaveDebitCardRequest::setMidocoCrmDebitCard()
     * @uses SaveDebitCardRequest::setInternalVersion()
     * @uses SaveDebitCardRequest::setUseValidation()
     * @uses SaveDebitCardRequest::setInvokeWorkflow()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $midocoCrmDebitCard
     * @param int $internalVersion
     * @param bool $useValidation
     * @param bool $invokeWorkflow
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null, ?int $internalVersion = null, ?bool $useValidation = true, ?bool $invokeWorkflow = false)
    {
        $this
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setInternalVersion($internalVersion)
            ->setUseValidation($useValidation)
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveDebitCardRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveDebitCardRequest
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
     * Get useValidation value
     * @return bool|null
     */
    public function getUseValidation(): ?bool
    {
        return $this->useValidation;
    }
    /**
     * Set useValidation value
     * @param bool $useValidation
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveDebitCardRequest
     */
    public function setUseValidation(?bool $useValidation = true): self
    {
        // validation for constraint: boolean
        if (!is_null($useValidation) && !is_bool($useValidation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useValidation, true), gettype($useValidation)), __LINE__);
        }
        $this->useValidation = $useValidation;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveDebitCardRequest
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
