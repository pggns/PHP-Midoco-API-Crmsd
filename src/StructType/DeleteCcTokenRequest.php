<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCcTokenRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCcTokenRequest extends AbstractStructBase
{
    /**
     * The MidocoCcToken
     * Meta information extracted from the WSDL
     * - ref: MidocoCcToken
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken $MidocoCcToken = null;
    /**
     * Constructor method for DeleteCcTokenRequest
     * @uses DeleteCcTokenRequest::setMidocoCcToken()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken $midocoCcToken
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken $midocoCcToken = null)
    {
        $this
            ->setMidocoCcToken($midocoCcToken);
    }
    /**
     * Get MidocoCcToken value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken|null
     */
    public function getMidocoCcToken(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken
    {
        return $this->MidocoCcToken;
    }
    /**
     * Set MidocoCcToken value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken $midocoCcToken
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCcTokenRequest
     */
    public function setMidocoCcToken(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCcToken $midocoCcToken = null): self
    {
        $this->MidocoCcToken = $midocoCcToken;
        
        return $this;
    }
}
