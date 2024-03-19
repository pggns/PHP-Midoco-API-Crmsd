<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAddressTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteAddressTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoAddressType
     * Meta information extracted from the WSDL
     * - ref: MidocoAddressType
     * @var \Pggns\MidocoApi\Crmsd\StructType\AddressTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\AddressTypeDTO $MidocoAddressType = null;
    /**
     * Constructor method for DeleteAddressTypeRequest
     * @uses DeleteAddressTypeRequest::setMidocoAddressType()
     * @param \Pggns\MidocoApi\Crmsd\StructType\AddressTypeDTO $midocoAddressType
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\AddressTypeDTO $midocoAddressType = null)
    {
        $this
            ->setMidocoAddressType($midocoAddressType);
    }
    /**
     * Get MidocoAddressType value
     * @return \Pggns\MidocoApi\Crmsd\StructType\AddressTypeDTO|null
     */
    public function getMidocoAddressType(): ?\Pggns\MidocoApi\Crmsd\StructType\AddressTypeDTO
    {
        return $this->MidocoAddressType;
    }
    /**
     * Set MidocoAddressType value
     * @param \Pggns\MidocoApi\Crmsd\StructType\AddressTypeDTO $midocoAddressType
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteAddressTypeRequest
     */
    public function setMidocoAddressType(?\Pggns\MidocoApi\Crmsd\StructType\AddressTypeDTO $midocoAddressType = null): self
    {
        $this->MidocoAddressType = $midocoAddressType;
        
        return $this;
    }
}
