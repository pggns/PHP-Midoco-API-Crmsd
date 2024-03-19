<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteVirtualCcCardAccountRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteVirtualCcCardAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoVirtualCcCardAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoVirtualCcCardAccount
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount $MidocoVirtualCcCardAccount = null;
    /**
     * Constructor method for DeleteVirtualCcCardAccountRequest
     * @uses DeleteVirtualCcCardAccountRequest::setMidocoVirtualCcCardAccount()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount $midocoVirtualCcCardAccount
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount $midocoVirtualCcCardAccount = null)
    {
        $this
            ->setMidocoVirtualCcCardAccount($midocoVirtualCcCardAccount);
    }
    /**
     * Get MidocoVirtualCcCardAccount value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount|null
     */
    public function getMidocoVirtualCcCardAccount(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount
    {
        return $this->MidocoVirtualCcCardAccount;
    }
    /**
     * Set MidocoVirtualCcCardAccount value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount $midocoVirtualCcCardAccount
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteVirtualCcCardAccountRequest
     */
    public function setMidocoVirtualCcCardAccount(?\Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount $midocoVirtualCcCardAccount = null): self
    {
        $this->MidocoVirtualCcCardAccount = $midocoVirtualCcCardAccount;
        
        return $this;
    }
}
