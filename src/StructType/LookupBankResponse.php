<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LookupBankResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: lookupBank --- looks up for a bank according to the BankLookup parameter. Returns a bank number
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LookupBankResponse extends AbstractStructBase
{
    /**
     * The MidocoBankNumber
     * Meta information extracted from the WSDL
     * - ref: MidocoBankNumber
     * @var \Pggns\MidocoApi\Crmsd\StructType\BankNumberDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\BankNumberDTO $MidocoBankNumber = null;
    /**
     * Constructor method for LookupBankResponse
     * @uses LookupBankResponse::setMidocoBankNumber()
     * @param \Pggns\MidocoApi\Crmsd\StructType\BankNumberDTO $midocoBankNumber
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\BankNumberDTO $midocoBankNumber = null)
    {
        $this
            ->setMidocoBankNumber($midocoBankNumber);
    }
    /**
     * Get MidocoBankNumber value
     * @return \Pggns\MidocoApi\Crmsd\StructType\BankNumberDTO|null
     */
    public function getMidocoBankNumber(): ?\Pggns\MidocoApi\Crmsd\StructType\BankNumberDTO
    {
        return $this->MidocoBankNumber;
    }
    /**
     * Set MidocoBankNumber value
     * @param \Pggns\MidocoApi\Crmsd\StructType\BankNumberDTO $midocoBankNumber
     * @return \Pggns\MidocoApi\Crmsd\StructType\LookupBankResponse
     */
    public function setMidocoBankNumber(?\Pggns\MidocoApi\Crmsd\StructType\BankNumberDTO $midocoBankNumber = null): self
    {
        $this->MidocoBankNumber = $midocoBankNumber;
        
        return $this;
    }
}
