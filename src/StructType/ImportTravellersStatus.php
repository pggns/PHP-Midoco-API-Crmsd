<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportTravellersStatus StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ImportTravellersStatus extends AbstractStructBase
{
    /**
     * The countSaved
     * @var int|null
     */
    protected ?int $countSaved = null;
    /**
     * The countNotSaved
     * @var int|null
     */
    protected ?int $countNotSaved = null;
    /**
     * Constructor method for ImportTravellersStatus
     * @uses ImportTravellersStatus::setCountSaved()
     * @uses ImportTravellersStatus::setCountNotSaved()
     * @param int $countSaved
     * @param int $countNotSaved
     */
    public function __construct(?int $countSaved = null, ?int $countNotSaved = null)
    {
        $this
            ->setCountSaved($countSaved)
            ->setCountNotSaved($countNotSaved);
    }
    /**
     * Get countSaved value
     * @return int|null
     */
    public function getCountSaved(): ?int
    {
        return $this->countSaved;
    }
    /**
     * Set countSaved value
     * @param int $countSaved
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportTravellersStatus
     */
    public function setCountSaved(?int $countSaved = null): self
    {
        // validation for constraint: int
        if (!is_null($countSaved) && !(is_int($countSaved) || ctype_digit($countSaved))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countSaved, true), gettype($countSaved)), __LINE__);
        }
        $this->countSaved = $countSaved;
        
        return $this;
    }
    /**
     * Get countNotSaved value
     * @return int|null
     */
    public function getCountNotSaved(): ?int
    {
        return $this->countNotSaved;
    }
    /**
     * Set countNotSaved value
     * @param int $countNotSaved
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportTravellersStatus
     */
    public function setCountNotSaved(?int $countNotSaved = null): self
    {
        // validation for constraint: int
        if (!is_null($countNotSaved) && !(is_int($countNotSaved) || ctype_digit($countNotSaved))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countNotSaved, true), gettype($countNotSaved)), __LINE__);
        }
        $this->countNotSaved = $countNotSaved;
        
        return $this;
    }
}
