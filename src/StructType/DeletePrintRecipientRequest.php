<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletePrintRecipientRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeletePrintRecipientRequest extends AbstractStructBase
{
    /**
     * The MidocoPrintRecipient
     * Meta information extracted from the WSDL
     * - ref: MidocoPrintRecipient
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoPrintRecipient|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoPrintRecipient $MidocoPrintRecipient = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for DeletePrintRecipientRequest
     * @uses DeletePrintRecipientRequest::setMidocoPrintRecipient()
     * @uses DeletePrintRecipientRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoPrintRecipient $midocoPrintRecipient
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoPrintRecipient $midocoPrintRecipient = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoPrintRecipient($midocoPrintRecipient)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoPrintRecipient value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoPrintRecipient|null
     */
    public function getMidocoPrintRecipient(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoPrintRecipient
    {
        return $this->MidocoPrintRecipient;
    }
    /**
     * Set MidocoPrintRecipient value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoPrintRecipient $midocoPrintRecipient
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeletePrintRecipientRequest
     */
    public function setMidocoPrintRecipient(?\Pggns\MidocoApi\Crmsd\StructType\MidocoPrintRecipient $midocoPrintRecipient = null): self
    {
        $this->MidocoPrintRecipient = $midocoPrintRecipient;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeletePrintRecipientRequest
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
