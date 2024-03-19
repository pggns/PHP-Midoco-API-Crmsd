<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCollectiveInvoiceSettingResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveCollectiveInvoiceSetting --- saves a CollectiveInvoiceSetting. returns the new/updates CollectiveInvoiceSetting
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCollectiveInvoiceSettingResponse extends AbstractStructBase
{
    /**
     * The MidocoCollectiveInvoiceSetting
     * Meta information extracted from the WSDL
     * - ref: MidocoCollectiveInvoiceSetting
     * @var \Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO $MidocoCollectiveInvoiceSetting = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveCollectiveInvoiceSettingResponse
     * @uses SaveCollectiveInvoiceSettingResponse::setMidocoCollectiveInvoiceSetting()
     * @uses SaveCollectiveInvoiceSettingResponse::setInternalVersion()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO $midocoCollectiveInvoiceSetting
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO $midocoCollectiveInvoiceSetting = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCollectiveInvoiceSetting($midocoCollectiveInvoiceSetting)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoCollectiveInvoiceSetting value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO|null
     */
    public function getMidocoCollectiveInvoiceSetting(): ?\Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO
    {
        return $this->MidocoCollectiveInvoiceSetting;
    }
    /**
     * Set MidocoCollectiveInvoiceSetting value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO $midocoCollectiveInvoiceSetting
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCollectiveInvoiceSettingResponse
     */
    public function setMidocoCollectiveInvoiceSetting(?\Pggns\MidocoApi\Crmsd\StructType\CollectInvSettingDTO $midocoCollectiveInvoiceSetting = null): self
    {
        $this->MidocoCollectiveInvoiceSetting = $midocoCollectiveInvoiceSetting;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCollectiveInvoiceSettingResponse
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
