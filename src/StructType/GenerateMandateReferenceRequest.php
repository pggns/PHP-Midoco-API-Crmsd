<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateMandateReferenceRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GenerateMandateReferenceRequest extends AbstractStructBase
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
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $MidocoCrmDebitCard = null;
    /**
     * The customerType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $customerType = null;
    /**
     * Constructor method for GenerateMandateReferenceRequest
     * @uses GenerateMandateReferenceRequest::setMidocoMandate()
     * @uses GenerateMandateReferenceRequest::setMidocoCrmDebitCard()
     * @uses GenerateMandateReferenceRequest::setCustomerType()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $midocoCrmDebitCard
     * @param string $customerType
     */
    public function __construct(\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate, ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null, ?string $customerType = null)
    {
        $this
            ->setMidocoMandate($midocoMandate)
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setCustomerType($customerType);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GenerateMandateReferenceRequest
     */
    public function setMidocoMandate(\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate): self
    {
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GenerateMandateReferenceRequest
     */
    public function setMidocoCrmDebitCard(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null): self
    {
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
        return $this;
    }
    /**
     * Get customerType value
     * @return string|null
     */
    public function getCustomerType(): ?string
    {
        return $this->customerType;
    }
    /**
     * Set customerType value
     * @param string $customerType
     * @return \Pggns\MidocoApi\Crmsd\StructType\GenerateMandateReferenceRequest
     */
    public function setCustomerType(?string $customerType = null): self
    {
        // validation for constraint: string
        if (!is_null($customerType) && !is_string($customerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerType, true), gettype($customerType)), __LINE__);
        }
        $this->customerType = $customerType;
        
        return $this;
    }
}
