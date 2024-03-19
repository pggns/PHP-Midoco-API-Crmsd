<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSalutationNameRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSalutationNameRequest extends AbstractStructBase
{
    /**
     * The MidocoSalutationName
     * Meta information extracted from the WSDL
     * - ref: MidocoSalutationName
     * @var \Pggns\MidocoApi\Crmsd\StructType\SalutationNameDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\SalutationNameDTO $MidocoSalutationName = null;
    /**
     * Constructor method for SaveSalutationNameRequest
     * @uses SaveSalutationNameRequest::setMidocoSalutationName()
     * @param \Pggns\MidocoApi\Crmsd\StructType\SalutationNameDTO $midocoSalutationName
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\SalutationNameDTO $midocoSalutationName = null)
    {
        $this
            ->setMidocoSalutationName($midocoSalutationName);
    }
    /**
     * Get MidocoSalutationName value
     * @return \Pggns\MidocoApi\Crmsd\StructType\SalutationNameDTO|null
     */
    public function getMidocoSalutationName(): ?\Pggns\MidocoApi\Crmsd\StructType\SalutationNameDTO
    {
        return $this->MidocoSalutationName;
    }
    /**
     * Set MidocoSalutationName value
     * @param \Pggns\MidocoApi\Crmsd\StructType\SalutationNameDTO $midocoSalutationName
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveSalutationNameRequest
     */
    public function setMidocoSalutationName(?\Pggns\MidocoApi\Crmsd\StructType\SalutationNameDTO $midocoSalutationName = null): self
    {
        $this->MidocoSalutationName = $midocoSalutationName;
        
        return $this;
    }
}
