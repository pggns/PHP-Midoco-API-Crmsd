<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerMandateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerMandateResponse extends AbstractStructBase
{
    /**
     * The MidocoMandate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMandate
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $MidocoMandate = null;
    /**
     * Constructor method for GetCustomerMandateResponse
     * @uses GetCustomerMandateResponse::setMidocoMandate()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate = null)
    {
        $this
            ->setMidocoMandate($midocoMandate);
    }
    /**
     * Get MidocoMandate value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate|null
     */
    public function getMidocoMandate(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate
    {
        return $this->MidocoMandate;
    }
    /**
     * Set MidocoMandate value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerMandateResponse
     */
    public function setMidocoMandate(?\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate = null): self
    {
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
    }
}
