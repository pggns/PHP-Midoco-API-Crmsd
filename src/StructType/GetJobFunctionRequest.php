<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetJobFunctionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetJobFunctionRequest extends AbstractStructBase
{
    /**
     * The MidocoJobFunction
     * Meta information extracted from the WSDL
     * - ref: MidocoJobFunction
     * @var \Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO $MidocoJobFunction = null;
    /**
     * Constructor method for GetJobFunctionRequest
     * @uses GetJobFunctionRequest::setMidocoJobFunction()
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetJobFunctionRequest
     */
    public function setMidocoJobFunction(?\Pggns\MidocoApi\Crmsd\StructType\JobFunctionDTO $midocoJobFunction = null): self
    {
        $this->MidocoJobFunction = $midocoJobFunction;
        
        return $this;
    }
}
