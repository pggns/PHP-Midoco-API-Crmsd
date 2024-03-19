<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateDebitCardRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidateDebitCardRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $MidocoCrmDebitCard = null;
    /**
     * Constructor method for ValidateDebitCardRequest
     * @uses ValidateDebitCardRequest::setMidocoCrmDebitCard()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $midocoCrmDebitCard
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null)
    {
        $this
            ->setMidocoCrmDebitCard($midocoCrmDebitCard);
    }
    /**
     * Get MidocoCrmDebitCard value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard|null
     */
    public function getMidocoCrmDebitCard(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard
    {
        return $this->MidocoCrmDebitCard;
    }
    /**
     * Set MidocoCrmDebitCard value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $midocoCrmDebitCard
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateDebitCardRequest
     */
    public function setMidocoCrmDebitCard(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null): self
    {
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
        return $this;
    }
}
