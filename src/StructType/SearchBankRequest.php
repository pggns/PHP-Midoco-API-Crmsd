<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBankRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchBankRequest extends AbstractStructBase
{
    /**
     * The MidocoBankSearch
     * Meta information extracted from the WSDL
     * - ref: MidocoBankSearch
     * @var \Pggns\MidocoApi\Crmsd\StructType\BankSearchDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\BankSearchDTO $MidocoBankSearch = null;
    /**
     * Constructor method for SearchBankRequest
     * @uses SearchBankRequest::setMidocoBankSearch()
     * @param \Pggns\MidocoApi\Crmsd\StructType\BankSearchDTO $midocoBankSearch
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\BankSearchDTO $midocoBankSearch = null)
    {
        $this
            ->setMidocoBankSearch($midocoBankSearch);
    }
    /**
     * Get MidocoBankSearch value
     * @return \Pggns\MidocoApi\Crmsd\StructType\BankSearchDTO|null
     */
    public function getMidocoBankSearch(): ?\Pggns\MidocoApi\Crmsd\StructType\BankSearchDTO
    {
        return $this->MidocoBankSearch;
    }
    /**
     * Set MidocoBankSearch value
     * @param \Pggns\MidocoApi\Crmsd\StructType\BankSearchDTO $midocoBankSearch
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchBankRequest
     */
    public function setMidocoBankSearch(?\Pggns\MidocoApi\Crmsd\StructType\BankSearchDTO $midocoBankSearch = null): self
    {
        $this->MidocoBankSearch = $midocoBankSearch;
        
        return $this;
    }
}
