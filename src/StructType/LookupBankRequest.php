<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LookupBankRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LookupBankRequest extends AbstractStructBase
{
    /**
     * The MidocoBankLookup
     * Meta information extracted from the WSDL
     * - ref: MidocoBankLookup
     * @var \Pggns\MidocoApi\Crmsd\StructType\BankLookupDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\BankLookupDTO $MidocoBankLookup = null;
    /**
     * Constructor method for LookupBankRequest
     * @uses LookupBankRequest::setMidocoBankLookup()
     * @param \Pggns\MidocoApi\Crmsd\StructType\BankLookupDTO $midocoBankLookup
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\BankLookupDTO $midocoBankLookup = null)
    {
        $this
            ->setMidocoBankLookup($midocoBankLookup);
    }
    /**
     * Get MidocoBankLookup value
     * @return \Pggns\MidocoApi\Crmsd\StructType\BankLookupDTO|null
     */
    public function getMidocoBankLookup(): ?\Pggns\MidocoApi\Crmsd\StructType\BankLookupDTO
    {
        return $this->MidocoBankLookup;
    }
    /**
     * Set MidocoBankLookup value
     * @param \Pggns\MidocoApi\Crmsd\StructType\BankLookupDTO $midocoBankLookup
     * @return \Pggns\MidocoApi\Crmsd\StructType\LookupBankRequest
     */
    public function setMidocoBankLookup(?\Pggns\MidocoApi\Crmsd\StructType\BankLookupDTO $midocoBankLookup = null): self
    {
        $this->MidocoBankLookup = $midocoBankLookup;
        
        return $this;
    }
}
