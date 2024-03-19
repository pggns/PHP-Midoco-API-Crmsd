<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSalutationRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSalutationRequest extends AbstractStructBase
{
    /**
     * The MidocoSalutation
     * Meta information extracted from the WSDL
     * - ref: MidocoSalutation
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoSalutation|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoSalutation $MidocoSalutation = null;
    /**
     * Constructor method for SaveSalutationRequest
     * @uses SaveSalutationRequest::setMidocoSalutation()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoSalutation $midocoSalutation
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoSalutation $midocoSalutation = null)
    {
        $this
            ->setMidocoSalutation($midocoSalutation);
    }
    /**
     * Get MidocoSalutation value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoSalutation|null
     */
    public function getMidocoSalutation(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoSalutation
    {
        return $this->MidocoSalutation;
    }
    /**
     * Set MidocoSalutation value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoSalutation $midocoSalutation
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveSalutationRequest
     */
    public function setMidocoSalutation(?\Pggns\MidocoApi\Crmsd\StructType\MidocoSalutation $midocoSalutation = null): self
    {
        $this->MidocoSalutation = $midocoSalutation;
        
        return $this;
    }
}
