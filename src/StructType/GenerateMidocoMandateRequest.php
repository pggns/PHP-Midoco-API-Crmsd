<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateMidocoMandateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GenerateMidocoMandateRequest extends AbstractStructBase
{
    /**
     * The MidocoMandate
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoMandate
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate
     */
    protected \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $MidocoMandate;
    /**
     * Constructor method for GenerateMidocoMandateRequest
     * @uses GenerateMidocoMandateRequest::setMidocoMandate()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate
     */
    public function __construct(\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate)
    {
        $this
            ->setMidocoMandate($midocoMandate);
    }
    /**
     * Get MidocoMandate value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate
     */
    public function getMidocoMandate(): \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate
    {
        return $this->MidocoMandate;
    }
    /**
     * Set MidocoMandate value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate
     * @return \Pggns\MidocoApi\Crmsd\StructType\GenerateMidocoMandateRequest
     */
    public function setMidocoMandate(\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate): self
    {
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
    }
}
