<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAddressRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmAddress
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $MidocoCrmAddress = null;
    /**
     * Constructor method for DeleteAddressRequest
     * @uses DeleteAddressRequest::setMidocoCrmAddress()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $midocoCrmAddress
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $midocoCrmAddress = null)
    {
        $this
            ->setMidocoCrmAddress($midocoCrmAddress);
    }
    /**
     * Get MidocoCrmAddress value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress|null
     */
    public function getMidocoCrmAddress(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress
    {
        return $this->MidocoCrmAddress;
    }
    /**
     * Set MidocoCrmAddress value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $midocoCrmAddress
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteAddressRequest
     */
    public function setMidocoCrmAddress(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $midocoCrmAddress = null): self
    {
        $this->MidocoCrmAddress = $midocoCrmAddress;
        
        return $this;
    }
}
