<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bank StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Bank extends AbstractStructBase
{
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The blz
     * @var int|null
     */
    protected ?int $blz = null;
    /**
     * Constructor method for Bank
     * @uses Bank::setName()
     * @uses Bank::setBlz()
     * @param string $name
     * @param int $blz
     */
    public function __construct(?string $name = null, ?int $blz = null)
    {
        $this
            ->setName($name)
            ->setBlz($blz);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Crmsd\StructType\Bank
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get blz value
     * @return int|null
     */
    public function getBlz(): ?int
    {
        return $this->blz;
    }
    /**
     * Set blz value
     * @param int $blz
     * @return \Pggns\MidocoApi\Crmsd\StructType\Bank
     */
    public function setBlz(?int $blz = null): self
    {
        // validation for constraint: int
        if (!is_null($blz) && !(is_int($blz) || ctype_digit($blz))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($blz, true), gettype($blz)), __LINE__);
        }
        $this->blz = $blz;
        
        return $this;
    }
}
