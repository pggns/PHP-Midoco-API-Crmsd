<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InitMidocoMandateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class InitMidocoMandateResponse extends AbstractStructBase
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
     * The isCompanyCustomer
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $isCompanyCustomer;
    /**
     * Constructor method for InitMidocoMandateResponse
     * @uses InitMidocoMandateResponse::setMidocoMandate()
     * @uses InitMidocoMandateResponse::setIsCompanyCustomer()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate
     * @param bool $isCompanyCustomer
     */
    public function __construct(\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate, bool $isCompanyCustomer)
    {
        $this
            ->setMidocoMandate($midocoMandate)
            ->setIsCompanyCustomer($isCompanyCustomer);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\InitMidocoMandateResponse
     */
    public function setMidocoMandate(\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate): self
    {
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
    }
    /**
     * Get isCompanyCustomer value
     * @return bool
     */
    public function getIsCompanyCustomer(): bool
    {
        return $this->isCompanyCustomer;
    }
    /**
     * Set isCompanyCustomer value
     * @param bool $isCompanyCustomer
     * @return \Pggns\MidocoApi\Crmsd\StructType\InitMidocoMandateResponse
     */
    public function setIsCompanyCustomer(bool $isCompanyCustomer): self
    {
        // validation for constraint: boolean
        if (!is_null($isCompanyCustomer) && !is_bool($isCompanyCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCompanyCustomer, true), gettype($isCompanyCustomer)), __LINE__);
        }
        $this->isCompanyCustomer = $isCompanyCustomer;
        
        return $this;
    }
}
