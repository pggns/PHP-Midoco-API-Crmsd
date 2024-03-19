<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaxconnectUrlStringRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPaxconnectUrlStringRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO
     */
    protected \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $MidocoCustomerId;
    /**
     * Constructor method for GetPaxconnectUrlStringRequest
     * @uses GetPaxconnectUrlStringRequest::setMidocoCustomerId()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     */
    public function __construct(\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO
     */
    public function getMidocoCustomerId(): \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetPaxconnectUrlStringRequest
     */
    public function setMidocoCustomerId(\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
}
