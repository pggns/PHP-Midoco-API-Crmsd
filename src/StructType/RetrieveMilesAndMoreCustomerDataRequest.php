<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveMilesAndMoreCustomerDataRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Let the backend retrieve the customer data via MConnect with the token.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RetrieveMilesAndMoreCustomerDataRequest extends AbstractStructBase
{
    /**
     * The req
     * @var string|null
     */
    protected ?string $req = null;
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The scope
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $scope = null;
    /**
     * Constructor method for RetrieveMilesAndMoreCustomerDataRequest
     * @uses RetrieveMilesAndMoreCustomerDataRequest::setReq()
     * @uses RetrieveMilesAndMoreCustomerDataRequest::setCode()
     * @uses RetrieveMilesAndMoreCustomerDataRequest::setScope()
     * @param string $req
     * @param string $code
     * @param string $scope
     */
    public function __construct(?string $req = null, ?string $code = null, ?string $scope = null)
    {
        $this
            ->setReq($req)
            ->setCode($code)
            ->setScope($scope);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\RetrieveMilesAndMoreCustomerDataRequest
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
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Crmsd\StructType\RetrieveMilesAndMoreCustomerDataRequest
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get scope value
     * @return string|null
     */
    public function getScope(): ?string
    {
        return $this->scope;
    }
    /**
     * Set scope value
     * @param string $scope
     * @return \Pggns\MidocoApi\Crmsd\StructType\RetrieveMilesAndMoreCustomerDataRequest
     */
    public function setScope(?string $scope = null): self
    {
        // validation for constraint: string
        if (!is_null($scope) && !is_string($scope)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scope, true), gettype($scope)), __LINE__);
        }
        $this->scope = $scope;
        
        return $this;
    }
}
