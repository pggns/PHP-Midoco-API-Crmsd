<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInvoiceFileFormatRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetInvoiceFileFormatRequest extends AbstractStructBase
{
    /**
     * The MidocoInvoiceFileFormat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoInvoiceFileFormat
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoInvoiceFileFormat|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoInvoiceFileFormat $MidocoInvoiceFileFormat = null;
    /**
     * Constructor method for GetInvoiceFileFormatRequest
     * @uses GetInvoiceFileFormatRequest::setMidocoInvoiceFileFormat()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat = null)
    {
        $this
            ->setMidocoInvoiceFileFormat($midocoInvoiceFileFormat);
    }
    /**
     * Get MidocoInvoiceFileFormat value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoInvoiceFileFormat|null
     */
    public function getMidocoInvoiceFileFormat(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoInvoiceFileFormat
    {
        return $this->MidocoInvoiceFileFormat;
    }
    /**
     * Set MidocoInvoiceFileFormat value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetInvoiceFileFormatRequest
     */
    public function setMidocoInvoiceFileFormat(?\Pggns\MidocoApi\Crmsd\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat = null): self
    {
        $this->MidocoInvoiceFileFormat = $midocoInvoiceFileFormat;
        
        return $this;
    }
}
