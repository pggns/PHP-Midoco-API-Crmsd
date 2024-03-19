<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmPrintTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCrmPrintTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmPrintType
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmPrintType
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmPrintType|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmPrintType $MidocoCrmPrintType = null;
    /**
     * Constructor method for SaveCrmPrintTypeRequest
     * @uses SaveCrmPrintTypeRequest::setMidocoCrmPrintType()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmPrintType $midocoCrmPrintType
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmPrintType $midocoCrmPrintType = null)
    {
        $this
            ->setMidocoCrmPrintType($midocoCrmPrintType);
    }
    /**
     * Get MidocoCrmPrintType value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmPrintType|null
     */
    public function getMidocoCrmPrintType(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmPrintType
    {
        return $this->MidocoCrmPrintType;
    }
    /**
     * Set MidocoCrmPrintType value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmPrintType $midocoCrmPrintType
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCrmPrintTypeRequest
     */
    public function setMidocoCrmPrintType(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmPrintType $midocoCrmPrintType = null): self
    {
        $this->MidocoCrmPrintType = $midocoCrmPrintType;
        
        return $this;
    }
}
