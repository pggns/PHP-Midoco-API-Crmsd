<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSalutationNameRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSalutationNameRequest extends AbstractStructBase
{
    /**
     * The MidocoSalutationName
     * Meta information extracted from the WSDL
     * - ref: MidocoSalutationName
     * @var \Pggns\MidocoApi\Crmsd\StructType\SalutationNameDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\SalutationNameDTO $MidocoSalutationName = null;
    /**
     * Constructor method for DeleteSalutationNameRequest
     * @uses DeleteSalutationNameRequest::setMidocoSalutationName()
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteSalutationNameRequest
     */
    public function setMidocoSalutationName(?\Pggns\MidocoApi\Crmsd\StructType\SalutationNameDTO $midocoSalutationName = null): self
    {
        $this->MidocoSalutationName = $midocoSalutationName;
        
        return $this;
    }
}
