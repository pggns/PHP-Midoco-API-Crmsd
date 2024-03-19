<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteInvoiceFileFormatRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteInvoiceFileFormatRequest extends AbstractStructBase
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
     * The MidocoInvoiceFileFormatContent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoInvoiceFileFormatContent
     * @var \Pggns\MidocoApi\Crmsd\StructType\InvoiceFileFormatContentDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\InvoiceFileFormatContentDTO $MidocoInvoiceFileFormatContent = null;
    /**
     * Constructor method for DeleteInvoiceFileFormatRequest
     * @uses DeleteInvoiceFileFormatRequest::setMidocoInvoiceFileFormat()
     * @uses DeleteInvoiceFileFormatRequest::setMidocoInvoiceFileFormatContent()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat
     * @param \Pggns\MidocoApi\Crmsd\StructType\InvoiceFileFormatContentDTO $midocoInvoiceFileFormatContent
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat = null, ?\Pggns\MidocoApi\Crmsd\StructType\InvoiceFileFormatContentDTO $midocoInvoiceFileFormatContent = null)
    {
        $this
            ->setMidocoInvoiceFileFormat($midocoInvoiceFileFormat)
            ->setMidocoInvoiceFileFormatContent($midocoInvoiceFileFormatContent);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteInvoiceFileFormatRequest
     */
    public function setMidocoInvoiceFileFormat(?\Pggns\MidocoApi\Crmsd\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat = null): self
    {
        $this->MidocoInvoiceFileFormat = $midocoInvoiceFileFormat;
        
        return $this;
    }
    /**
     * Get MidocoInvoiceFileFormatContent value
     * @return \Pggns\MidocoApi\Crmsd\StructType\InvoiceFileFormatContentDTO|null
     */
    public function getMidocoInvoiceFileFormatContent(): ?\Pggns\MidocoApi\Crmsd\StructType\InvoiceFileFormatContentDTO
    {
        return $this->MidocoInvoiceFileFormatContent;
    }
    /**
     * Set MidocoInvoiceFileFormatContent value
     * @param \Pggns\MidocoApi\Crmsd\StructType\InvoiceFileFormatContentDTO $midocoInvoiceFileFormatContent
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteInvoiceFileFormatRequest
     */
    public function setMidocoInvoiceFileFormatContent(?\Pggns\MidocoApi\Crmsd\StructType\InvoiceFileFormatContentDTO $midocoInvoiceFileFormatContent = null): self
    {
        $this->MidocoInvoiceFileFormatContent = $midocoInvoiceFileFormatContent;
        
        return $this;
    }
}
