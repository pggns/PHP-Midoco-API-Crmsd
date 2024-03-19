<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDebitCardResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveDebitCard --- saves a debit card given as parameter
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveDebitCardResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $MidocoCrmDebitCard = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveDebitCardResponse
     * @uses SaveDebitCardResponse::setMidocoCrmDebitCard()
     * @uses SaveDebitCardResponse::setInternalVersion()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $midocoCrmDebitCard
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setInternalVersion($internalVersion);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveDebitCardResponse
     */
    public function setMidocoCrmDebitCard(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null): self
    {
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveDebitCardResponse
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
