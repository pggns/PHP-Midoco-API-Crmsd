<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSalutationForCultureResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getSalutationForCulture --- returns the salutation for a salutation id and culture
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSalutationForCultureResponse extends AbstractStructBase
{
    /**
     * The letter
     * @var string|null
     */
    protected ?string $letter = null;
    /**
     * The salutation
     * @var string|null
     */
    protected ?string $salutation = null;
    /**
     * Constructor method for GetSalutationForCultureResponse
     * @uses GetSalutationForCultureResponse::setLetter()
     * @uses GetSalutationForCultureResponse::setSalutation()
     * @param string $letter
     * @param string $salutation
     */
    public function __construct(?string $letter = null, ?string $salutation = null)
    {
        $this
            ->setLetter($letter)
            ->setSalutation($salutation);
    }
    /**
     * Get letter value
     * @return string|null
     */
    public function getLetter(): ?string
    {
        return $this->letter;
    }
    /**
     * Set letter value
     * @param string $letter
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetSalutationForCultureResponse
     */
    public function setLetter(?string $letter = null): self
    {
        // validation for constraint: string
        if (!is_null($letter) && !is_string($letter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($letter, true), gettype($letter)), __LINE__);
        }
        $this->letter = $letter;
        
        return $this;
    }
    /**
     * Get salutation value
     * @return string|null
     */
    public function getSalutation(): ?string
    {
        return $this->salutation;
    }
    /**
     * Set salutation value
     * @param string $salutation
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetSalutationForCultureResponse
     */
    public function setSalutation(?string $salutation = null): self
    {
        // validation for constraint: string
        if (!is_null($salutation) && !is_string($salutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutation, true), gettype($salutation)), __LINE__);
        }
        $this->salutation = $salutation;
        
        return $this;
    }
}
