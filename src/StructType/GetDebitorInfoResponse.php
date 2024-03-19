<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDebitorInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDebitorInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerInfo
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo $MidocoCustomerInfo = null;
    /**
     * Constructor method for GetDebitorInfoResponse
     * @uses GetDebitorInfoResponse::setMidocoCustomerInfo()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo $midocoCustomerInfo
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo $midocoCustomerInfo = null)
    {
        $this
            ->setMidocoCustomerInfo($midocoCustomerInfo);
    }
    /**
     * Get MidocoCustomerInfo value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo|null
     */
    public function getMidocoCustomerInfo(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo
    {
        return $this->MidocoCustomerInfo;
    }
    /**
     * Set MidocoCustomerInfo value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo $midocoCustomerInfo
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitorInfoResponse
     */
    public function setMidocoCustomerInfo(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerInfo $midocoCustomerInfo = null): self
    {
        $this->MidocoCustomerInfo = $midocoCustomerInfo;
        
        return $this;
    }
}
