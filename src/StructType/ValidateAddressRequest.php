<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateAddressRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidateAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoValidateAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoValidateAddress
     * @var \Pggns\MidocoApi\Crmsd\StructType\ValidateAddressDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\ValidateAddressDTO $MidocoValidateAddress = null;
    /**
     * Constructor method for ValidateAddressRequest
     * @uses ValidateAddressRequest::setMidocoValidateAddress()
     * @param \Pggns\MidocoApi\Crmsd\StructType\ValidateAddressDTO $midocoValidateAddress
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\ValidateAddressDTO $midocoValidateAddress = null)
    {
        $this
            ->setMidocoValidateAddress($midocoValidateAddress);
    }
    /**
     * Get MidocoValidateAddress value
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateAddressDTO|null
     */
    public function getMidocoValidateAddress(): ?\Pggns\MidocoApi\Crmsd\StructType\ValidateAddressDTO
    {
        return $this->MidocoValidateAddress;
    }
    /**
     * Set MidocoValidateAddress value
     * @param \Pggns\MidocoApi\Crmsd\StructType\ValidateAddressDTO $midocoValidateAddress
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateAddressRequest
     */
    public function setMidocoValidateAddress(?\Pggns\MidocoApi\Crmsd\StructType\ValidateAddressDTO $midocoValidateAddress = null): self
    {
        $this->MidocoValidateAddress = $midocoValidateAddress;
        
        return $this;
    }
}
