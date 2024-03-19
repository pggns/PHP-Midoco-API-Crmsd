<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAddressTypeDescriptionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAddressTypeDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoAddressTypeDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoAddressTypeDescription
     * @var \Pggns\MidocoApi\Crmsd\StructType\AddressTypeDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\AddressTypeDescriptionDTO $MidocoAddressTypeDescription = null;
    /**
     * Constructor method for SaveAddressTypeDescriptionRequest
     * @uses SaveAddressTypeDescriptionRequest::setMidocoAddressTypeDescription()
     * @param \Pggns\MidocoApi\Crmsd\StructType\AddressTypeDescriptionDTO $midocoAddressTypeDescription
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\AddressTypeDescriptionDTO $midocoAddressTypeDescription = null)
    {
        $this
            ->setMidocoAddressTypeDescription($midocoAddressTypeDescription);
    }
    /**
     * Get MidocoAddressTypeDescription value
     * @return \Pggns\MidocoApi\Crmsd\StructType\AddressTypeDescriptionDTO|null
     */
    public function getMidocoAddressTypeDescription(): ?\Pggns\MidocoApi\Crmsd\StructType\AddressTypeDescriptionDTO
    {
        return $this->MidocoAddressTypeDescription;
    }
    /**
     * Set MidocoAddressTypeDescription value
     * @param \Pggns\MidocoApi\Crmsd\StructType\AddressTypeDescriptionDTO $midocoAddressTypeDescription
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveAddressTypeDescriptionRequest
     */
    public function setMidocoAddressTypeDescription(?\Pggns\MidocoApi\Crmsd\StructType\AddressTypeDescriptionDTO $midocoAddressTypeDescription = null): self
    {
        $this->MidocoAddressTypeDescription = $midocoAddressTypeDescription;
        
        return $this;
    }
}
