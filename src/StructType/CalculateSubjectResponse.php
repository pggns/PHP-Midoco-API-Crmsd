<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateSubjectResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculateSubjectResponse extends AbstractStructBase
{
    /**
     * The berechnetesSubject
     * @var string|null
     */
    protected ?string $berechnetesSubject = null;
    /**
     * Constructor method for CalculateSubjectResponse
     * @uses CalculateSubjectResponse::setBerechnetesSubject()
     * @param string $berechnetesSubject
     */
    public function __construct(?string $berechnetesSubject = null)
    {
        $this
            ->setBerechnetesSubject($berechnetesSubject);
    }
    /**
     * Get berechnetesSubject value
     * @return string|null
     */
    public function getBerechnetesSubject(): ?string
    {
        return $this->berechnetesSubject;
    }
    /**
     * Set berechnetesSubject value
     * @param string $berechnetesSubject
     * @return \Pggns\MidocoApi\Crmsd\StructType\CalculateSubjectResponse
     */
    public function setBerechnetesSubject(?string $berechnetesSubject = null): self
    {
        // validation for constraint: string
        if (!is_null($berechnetesSubject) && !is_string($berechnetesSubject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($berechnetesSubject, true), gettype($berechnetesSubject)), __LINE__);
        }
        $this->berechnetesSubject = $berechnetesSubject;
        
        return $this;
    }
}
