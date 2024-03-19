<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmDocumentId
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDocumentId
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CrmDocumentIdDTO $MidocoCrmDocumentId = null;
    /**
     * The getDocumentContent
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $getDocumentContent = null;
    /**
     * Constructor method for GetDocumentRequest
     * @uses GetDocumentRequest::setMidocoCrmDocumentId()
     * @uses GetDocumentRequest::setGetDocumentContent()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentIdDTO $midocoCrmDocumentId
     * @param bool $getDocumentContent
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CrmDocumentIdDTO $midocoCrmDocumentId = null, ?bool $getDocumentContent = false)
    {
        $this
            ->setMidocoCrmDocumentId($midocoCrmDocumentId)
            ->setGetDocumentContent($getDocumentContent);
    }
    /**
     * Get MidocoCrmDocumentId value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentIdDTO|null
     */
    public function getMidocoCrmDocumentId(): ?\Pggns\MidocoApi\Crmsd\StructType\CrmDocumentIdDTO
    {
        return $this->MidocoCrmDocumentId;
    }
    /**
     * Set MidocoCrmDocumentId value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmDocumentIdDTO $midocoCrmDocumentId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDocumentRequest
     */
    public function setMidocoCrmDocumentId(?\Pggns\MidocoApi\Crmsd\StructType\CrmDocumentIdDTO $midocoCrmDocumentId = null): self
    {
        $this->MidocoCrmDocumentId = $midocoCrmDocumentId;
        
        return $this;
    }
    /**
     * Get getDocumentContent value
     * @return bool|null
     */
    public function getGetDocumentContent(): ?bool
    {
        return $this->getDocumentContent;
    }
    /**
     * Set getDocumentContent value
     * @param bool $getDocumentContent
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDocumentRequest
     */
    public function setGetDocumentContent(?bool $getDocumentContent = false): self
    {
        // validation for constraint: boolean
        if (!is_null($getDocumentContent) && !is_bool($getDocumentContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($getDocumentContent, true), gettype($getDocumentContent)), __LINE__);
        }
        $this->getDocumentContent = $getDocumentContent;
        
        return $this;
    }
}
