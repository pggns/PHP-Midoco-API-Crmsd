<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveJobFunctionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveJobFunctionRequest extends AbstractStructBase
{
    /**
     * The MidocoJobFunction
     * Meta information extracted from the WSDL
     * - ref: MidocoJobFunction
     * @var \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO $MidocoJobFunction = null;
    /**
     * Constructor method for SaveJobFunctionRequest
     * @uses SaveJobFunctionRequest::setMidocoJobFunction()
     * @param \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO $midocoJobFunction
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO $midocoJobFunction = null)
    {
        $this
            ->setMidocoJobFunction($midocoJobFunction);
    }
    /**
     * Get MidocoJobFunction value
     * @return \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO|null
     */
    public function getMidocoJobFunction(): ?\Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO
    {
        return $this->MidocoJobFunction;
    }
    /**
     * Set MidocoJobFunction value
     * @param \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO $midocoJobFunction
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveJobFunctionRequest
     */
    public function setMidocoJobFunction(?\Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO $midocoJobFunction = null): self
    {
        $this->MidocoJobFunction = $midocoJobFunction;
        
        return $this;
    }
}
