<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDocument
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO $MidocoCrmDocument = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for DeleteDocumentRequest
     * @uses DeleteDocumentRequest::setMidocoCrmDocument()
     * @uses DeleteDocumentRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO $midocoCrmDocument
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO $midocoCrmDocument = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCrmDocument($midocoCrmDocument)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoCrmDocument value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO|null
     */
    public function getMidocoCrmDocument(): ?\Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO
    {
        return $this->MidocoCrmDocument;
    }
    /**
     * Set MidocoCrmDocument value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO $midocoCrmDocument
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteDocumentRequest
     */
    public function setMidocoCrmDocument(?\Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO $midocoCrmDocument = null): self
    {
        $this->MidocoCrmDocument = $midocoCrmDocument;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteDocumentRequest
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
