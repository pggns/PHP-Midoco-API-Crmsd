<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSimilarAddressRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSimilarAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoSimilarAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoSimilarAddress
     * @var \Pggns\MidocoApi\Crmsd\StructType\SimilarAddressDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\SimilarAddressDTO $MidocoSimilarAddress = null;
    /**
     * Constructor method for GetSimilarAddressRequest
     * @uses GetSimilarAddressRequest::setMidocoSimilarAddress()
     * @param \Pggns\MidocoApi\Crmsd\StructType\SimilarAddressDTO $midocoSimilarAddress
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\SimilarAddressDTO $midocoSimilarAddress = null)
    {
        $this
            ->setMidocoSimilarAddress($midocoSimilarAddress);
    }
    /**
     * Get MidocoSimilarAddress value
     * @return \Pggns\MidocoApi\Crmsd\StructType\SimilarAddressDTO|null
     */
    public function getMidocoSimilarAddress(): ?\Pggns\MidocoApi\Crmsd\StructType\SimilarAddressDTO
    {
        return $this->MidocoSimilarAddress;
    }
    /**
     * Set MidocoSimilarAddress value
     * @param \Pggns\MidocoApi\Crmsd\StructType\SimilarAddressDTO $midocoSimilarAddress
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetSimilarAddressRequest
     */
    public function setMidocoSimilarAddress(?\Pggns\MidocoApi\Crmsd\StructType\SimilarAddressDTO $midocoSimilarAddress = null): self
    {
        $this->MidocoSimilarAddress = $midocoSimilarAddress;
        
        return $this;
    }
}
