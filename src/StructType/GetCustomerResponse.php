<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCustomer --- a complete DTO is returned, an error is thrown, if customer is not found, assigned entries should be queried in a way that assigned customers are found and entries where this customer is assigned to
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * Constructor method for GetCustomerResponse
     * @uses GetCustomerResponse::setMidocoCrmCustomer()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $midocoCrmCustomer
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $midocoCrmCustomer = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerResponse
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
}
