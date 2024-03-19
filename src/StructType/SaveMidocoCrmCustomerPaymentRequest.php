<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoCrmCustomerPaymentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoCrmCustomerPaymentRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomerPayment
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomerPayment
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCustomerPayment|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCustomerPayment $MidocoCrmCustomerPayment = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The reactivateDebitor
     * @var bool|null
     */
    protected ?bool $reactivateDebitor = null;
    /**
     * Constructor method for SaveMidocoCrmCustomerPaymentRequest
     * @uses SaveMidocoCrmCustomerPaymentRequest::setMidocoCrmCustomerPayment()
     * @uses SaveMidocoCrmCustomerPaymentRequest::setInternalVersion()
     * @uses SaveMidocoCrmCustomerPaymentRequest::setReactivateDebitor()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment
     * @param int $internalVersion
     * @param bool $reactivateDebitor
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null, ?int $internalVersion = null, ?bool $reactivateDebitor = null)
    {
        $this
            ->setMidocoCrmCustomerPayment($midocoCrmCustomerPayment)
            ->setInternalVersion($internalVersion)
            ->setReactivateDebitor($reactivateDebitor);
    }
    /**
     * Get MidocoCrmCustomerPayment value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCustomerPayment|null
     */
    public function getMidocoCrmCustomerPayment(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCustomerPayment
    {
        return $this->MidocoCrmCustomerPayment;
    }
    /**
     * Set MidocoCrmCustomerPayment value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveMidocoCrmCustomerPaymentRequest
     */
    public function setMidocoCrmCustomerPayment(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null): self
    {
        $this->MidocoCrmCustomerPayment = $midocoCrmCustomerPayment;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveMidocoCrmCustomerPaymentRequest
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
    /**
     * Get reactivateDebitor value
     * @return bool|null
     */
    public function getReactivateDebitor(): ?bool
    {
        return $this->reactivateDebitor;
    }
    /**
     * Set reactivateDebitor value
     * @param bool $reactivateDebitor
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveMidocoCrmCustomerPaymentRequest
     */
    public function setReactivateDebitor(?bool $reactivateDebitor = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reactivateDebitor) && !is_bool($reactivateDebitor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reactivateDebitor, true), gettype($reactivateDebitor)), __LINE__);
        }
        $this->reactivateDebitor = $reactivateDebitor;
        
        return $this;
    }
}
