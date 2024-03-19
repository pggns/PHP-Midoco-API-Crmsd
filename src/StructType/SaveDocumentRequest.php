<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveDocumentRequest extends AbstractStructBase
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
     * The documentContent
     * @var string|null
     */
    protected ?string $documentContent = null;
    /**
     * Constructor method for SaveDocumentRequest
     * @uses SaveDocumentRequest::setMidocoCrmDocument()
     * @uses SaveDocumentRequest::setInternalVersion()
     * @uses SaveDocumentRequest::setDocumentContent()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO $midocoCrmDocument
     * @param int $internalVersion
     * @param string $documentContent
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CrmDocumentDTO $midocoCrmDocument = null, ?int $internalVersion = null, ?string $documentContent = null)
    {
        $this
            ->setMidocoCrmDocument($midocoCrmDocument)
            ->setInternalVersion($internalVersion)
            ->setDocumentContent($documentContent);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveDocumentRequest
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveDocumentRequest
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
     * Get documentContent value
     * @return string|null
     */
    public function getDocumentContent(): ?string
    {
        return $this->documentContent;
    }
    /**
     * Set documentContent value
     * @param string $documentContent
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveDocumentRequest
     */
    public function setDocumentContent(?string $documentContent = null): self
    {
        // validation for constraint: string
        if (!is_null($documentContent) && !is_string($documentContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentContent, true), gettype($documentContent)), __LINE__);
        }
        $this->documentContent = $documentContent;
        
        return $this;
    }
}
