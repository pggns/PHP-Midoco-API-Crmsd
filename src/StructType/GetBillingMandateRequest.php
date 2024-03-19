<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingMandateRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: get the active mandate that is assigned to a billing document
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBillingMandateRequest extends AbstractStructBase
{
    /**
     * The documentId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $documentId;
    /**
     * Constructor method for GetBillingMandateRequest
     * @uses GetBillingMandateRequest::setDocumentId()
     * @param string $documentId
     */
    public function __construct(string $documentId)
    {
        $this
            ->setDocumentId($documentId);
    }
    /**
     * Get documentId value
     * @return string
     */
    public function getDocumentId(): string
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param string $documentId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetBillingMandateRequest
     */
    public function setDocumentId(string $documentId): self
    {
        // validation for constraint: string
        if (!is_null($documentId) && !is_string($documentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
}
