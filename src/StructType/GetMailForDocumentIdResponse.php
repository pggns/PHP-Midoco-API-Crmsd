<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMailForDocumentIdResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailForDocumentIdResponse extends AbstractStructBase
{
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * Constructor method for GetMailForDocumentIdResponse
     * @uses GetMailForDocumentIdResponse::setMidocoMailMessage()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $midocoMailMessage
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $midocoMailMessage = null)
    {
        $this
            ->setMidocoMailMessage($midocoMailMessage);
    }
    /**
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetMailForDocumentIdResponse
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
}
