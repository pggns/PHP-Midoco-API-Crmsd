<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDictionaryNameRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteDictionaryNameRequest extends AbstractStructBase
{
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * Constructor method for DeleteDictionaryNameRequest
     * @uses DeleteDictionaryNameRequest::setForename()
     * @param string $forename
     */
    public function __construct(?string $forename = null)
    {
        $this
            ->setForename($forename);
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteDictionaryNameRequest
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
}
