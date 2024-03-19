<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateMilesAndMoreConnectLinkRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Validates the request parameters used to link a Miles and More account to a Customer
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidateMilesAndMoreConnectLinkRequest extends AbstractStructBase
{
    /**
     * The req
     * @var string|null
     */
    protected ?string $req = null;
    /**
     * Constructor method for ValidateMilesAndMoreConnectLinkRequest
     * @uses ValidateMilesAndMoreConnectLinkRequest::setReq()
     * @param string $req
     */
    public function __construct(?string $req = null)
    {
        $this
            ->setReq($req);
    }
    /**
     * Get req value
     * @return string|null
     */
    public function getReq(): ?string
    {
        return $this->req;
    }
    /**
     * Set req value
     * @param string $req
     * @return \Pggns\MidocoApi\Crmsd\StructType\ValidateMilesAndMoreConnectLinkRequest
     */
    public function setReq(?string $req = null): self
    {
        // validation for constraint: string
        if (!is_null($req) && !is_string($req)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($req, true), gettype($req)), __LINE__);
        }
        $this->req = $req;
        
        return $this;
    }
}
