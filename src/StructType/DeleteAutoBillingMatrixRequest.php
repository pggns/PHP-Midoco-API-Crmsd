<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAutoBillingMatrixRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: returns a list of AutoBillingMatrixDTO
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteAutoBillingMatrixRequest extends AbstractStructBase
{
    /**
     * The MidocoAutoBillingMatrix
     * Meta information extracted from the WSDL
     * - ref: MidocoAutoBillingMatrix
     * @var \Pggns\MidocoApi\Crmsd\StructType\AutoBillingMatrixDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\AutoBillingMatrixDTO $MidocoAutoBillingMatrix = null;
    /**
     * Constructor method for DeleteAutoBillingMatrixRequest
     * @uses DeleteAutoBillingMatrixRequest::setMidocoAutoBillingMatrix()
     * @param \Pggns\MidocoApi\Crmsd\StructType\AutoBillingMatrixDTO $midocoAutoBillingMatrix
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\AutoBillingMatrixDTO $midocoAutoBillingMatrix = null)
    {
        $this
            ->setMidocoAutoBillingMatrix($midocoAutoBillingMatrix);
    }
    /**
     * Get MidocoAutoBillingMatrix value
     * @return \Pggns\MidocoApi\Crmsd\StructType\AutoBillingMatrixDTO|null
     */
    public function getMidocoAutoBillingMatrix(): ?\Pggns\MidocoApi\Crmsd\StructType\AutoBillingMatrixDTO
    {
        return $this->MidocoAutoBillingMatrix;
    }
    /**
     * Set MidocoAutoBillingMatrix value
     * @param \Pggns\MidocoApi\Crmsd\StructType\AutoBillingMatrixDTO $midocoAutoBillingMatrix
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteAutoBillingMatrixRequest
     */
    public function setMidocoAutoBillingMatrix(?\Pggns\MidocoApi\Crmsd\StructType\AutoBillingMatrixDTO $midocoAutoBillingMatrix = null): self
    {
        $this->MidocoAutoBillingMatrix = $midocoAutoBillingMatrix;
        
        return $this;
    }
}
