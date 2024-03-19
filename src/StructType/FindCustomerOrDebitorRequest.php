<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindCustomerOrDebitorRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindCustomerOrDebitorRequest extends AbstractStructBase
{
    /**
     * The searchCode
     * @var string|null
     */
    protected ?string $searchCode = null;
    /**
     * Constructor method for FindCustomerOrDebitorRequest
     * @uses FindCustomerOrDebitorRequest::setSearchCode()
     * @param string $searchCode
     */
    public function __construct(?string $searchCode = null)
    {
        $this
            ->setSearchCode($searchCode);
    }
    /**
     * Get searchCode value
     * @return string|null
     */
    public function getSearchCode(): ?string
    {
        return $this->searchCode;
    }
    /**
     * Set searchCode value
     * @param string $searchCode
     * @return \Pggns\MidocoApi\Crmsd\StructType\FindCustomerOrDebitorRequest
     */
    public function setSearchCode(?string $searchCode = null): self
    {
        // validation for constraint: string
        if (!is_null($searchCode) && !is_string($searchCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchCode, true), gettype($searchCode)), __LINE__);
        }
        $this->searchCode = $searchCode;
        
        return $this;
    }
}
