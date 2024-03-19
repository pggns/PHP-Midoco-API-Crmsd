<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSubjectDefRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSubjectDefRequest extends AbstractStructBase
{
    /**
     * The MidocoSubjectDef
     * Meta information extracted from the WSDL
     * - ref: MidocoSubjectDef
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef $MidocoSubjectDef = null;
    /**
     * Constructor method for DeleteSubjectDefRequest
     * @uses DeleteSubjectDefRequest::setMidocoSubjectDef()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef $midocoSubjectDef
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef $midocoSubjectDef = null)
    {
        $this
            ->setMidocoSubjectDef($midocoSubjectDef);
    }
    /**
     * Get MidocoSubjectDef value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef|null
     */
    public function getMidocoSubjectDef(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef
    {
        return $this->MidocoSubjectDef;
    }
    /**
     * Set MidocoSubjectDef value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef $midocoSubjectDef
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteSubjectDefRequest
     */
    public function setMidocoSubjectDef(?\Pggns\MidocoApi\Crmsd\StructType\MidocoSubjectDef $midocoSubjectDef = null): self
    {
        $this->MidocoSubjectDef = $midocoSubjectDef;
        
        return $this;
    }
}
