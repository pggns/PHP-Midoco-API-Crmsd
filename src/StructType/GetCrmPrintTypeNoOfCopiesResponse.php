<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmPrintTypeNoOfCopiesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrmPrintTypeNoOfCopiesResponse extends AbstractStructBase
{
    /**
     * The noOfCopies
     * @var int|null
     */
    protected ?int $noOfCopies = null;
    /**
     * Constructor method for GetCrmPrintTypeNoOfCopiesResponse
     * @uses GetCrmPrintTypeNoOfCopiesResponse::setNoOfCopies()
     * @param int $noOfCopies
     */
    public function __construct(?int $noOfCopies = null)
    {
        $this
            ->setNoOfCopies($noOfCopies);
    }
    /**
     * Get noOfCopies value
     * @return int|null
     */
    public function getNoOfCopies(): ?int
    {
        return $this->noOfCopies;
    }
    /**
     * Set noOfCopies value
     * @param int $noOfCopies
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmPrintTypeNoOfCopiesResponse
     */
    public function setNoOfCopies(?int $noOfCopies = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfCopies) && !(is_int($noOfCopies) || ctype_digit($noOfCopies))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfCopies, true), gettype($noOfCopies)), __LINE__);
        }
        $this->noOfCopies = $noOfCopies;
        
        return $this;
    }
}
