<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveConsentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveConsentRequest extends AbstractStructBase
{
    /**
     * The MidocoConsent
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoConsent
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoConsent
     */
    protected \Pggns\MidocoApi\Crmsd\StructType\MidocoConsent $MidocoConsent;
    /**
     * Constructor method for SaveConsentRequest
     * @uses SaveConsentRequest::setMidocoConsent()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoConsent $midocoConsent
     */
    public function __construct(\Pggns\MidocoApi\Crmsd\StructType\MidocoConsent $midocoConsent)
    {
        $this
            ->setMidocoConsent($midocoConsent);
    }
    /**
     * Get MidocoConsent value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoConsent
     */
    public function getMidocoConsent(): \Pggns\MidocoApi\Crmsd\StructType\MidocoConsent
    {
        return $this->MidocoConsent;
    }
    /**
     * Set MidocoConsent value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoConsent $midocoConsent
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveConsentRequest
     */
    public function setMidocoConsent(\Pggns\MidocoApi\Crmsd\StructType\MidocoConsent $midocoConsent): self
    {
        $this->MidocoConsent = $midocoConsent;
        
        return $this;
    }
}
