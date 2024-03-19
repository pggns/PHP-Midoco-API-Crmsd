<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BonusCardOwnerForMatching StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BonusCardOwnerForMatching extends AbstractStructBase
{
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The middleName
     * @var string|null
     */
    protected ?string $middleName = null;
    /**
     * The lastname
     * @var string|null
     */
    protected ?string $lastname = null;
    /**
     * The matchType
     * Meta information extracted from the WSDL
     * - default: FIRST_N_NAMES
     * @var string|null
     */
    protected ?string $matchType = null;
    /**
     * Constructor method for BonusCardOwnerForMatching
     * @uses BonusCardOwnerForMatching::setForename()
     * @uses BonusCardOwnerForMatching::setMiddleName()
     * @uses BonusCardOwnerForMatching::setLastname()
     * @uses BonusCardOwnerForMatching::setMatchType()
     * @param string $forename
     * @param string $middleName
     * @param string $lastname
     * @param string $matchType
     */
    public function __construct(?string $forename = null, ?string $middleName = null, ?string $lastname = null, ?string $matchType = 'FIRST_N_NAMES')
    {
        $this
            ->setForename($forename)
            ->setMiddleName($middleName)
            ->setLastname($lastname)
            ->setMatchType($matchType);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\BonusCardOwnerForMatching
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
    /**
     * Get middleName value
     * @return string|null
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }
    /**
     * Set middleName value
     * @param string $middleName
     * @return \Pggns\MidocoApi\Crmsd\StructType\BonusCardOwnerForMatching
     */
    public function setMiddleName(?string $middleName = null): self
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middleName, true), gettype($middleName)), __LINE__);
        }
        $this->middleName = $middleName;
        
        return $this;
    }
    /**
     * Get lastname value
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }
    /**
     * Set lastname value
     * @param string $lastname
     * @return \Pggns\MidocoApi\Crmsd\StructType\BonusCardOwnerForMatching
     */
    public function setLastname(?string $lastname = null): self
    {
        // validation for constraint: string
        if (!is_null($lastname) && !is_string($lastname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastname, true), gettype($lastname)), __LINE__);
        }
        $this->lastname = $lastname;
        
        return $this;
    }
    /**
     * Get matchType value
     * @return string|null
     */
    public function getMatchType(): ?string
    {
        return $this->matchType;
    }
    /**
     * Set matchType value
     * @param string $matchType
     * @return \Pggns\MidocoApi\Crmsd\StructType\BonusCardOwnerForMatching
     */
    public function setMatchType(?string $matchType = 'FIRST_N_NAMES'): self
    {
        // validation for constraint: string
        if (!is_null($matchType) && !is_string($matchType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($matchType, true), gettype($matchType)), __LINE__);
        }
        $this->matchType = $matchType;
        
        return $this;
    }
}
