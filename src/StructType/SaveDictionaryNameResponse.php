<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDictionaryNameResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveDictionaryNameResponse extends AbstractStructBase
{
    /**
     * The MidocoDictionaryName
     * Meta information extracted from the WSDL
     * - ref: MidocoDictionaryName
     * @var \Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO $MidocoDictionaryName = null;
    /**
     * Constructor method for SaveDictionaryNameResponse
     * @uses SaveDictionaryNameResponse::setMidocoDictionaryName()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO $midocoDictionaryName
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO $midocoDictionaryName = null)
    {
        $this
            ->setMidocoDictionaryName($midocoDictionaryName);
    }
    /**
     * Get MidocoDictionaryName value
     * @return \Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO|null
     */
    public function getMidocoDictionaryName(): ?\Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO
    {
        return $this->MidocoDictionaryName;
    }
    /**
     * Set MidocoDictionaryName value
     * @param \Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO $midocoDictionaryName
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveDictionaryNameResponse
     */
    public function setMidocoDictionaryName(?\Pggns\MidocoApi\Crmsd\StructType\DictionaryNameDTO $midocoDictionaryName = null): self
    {
        $this->MidocoDictionaryName = $midocoDictionaryName;
        
        return $this;
    }
}
