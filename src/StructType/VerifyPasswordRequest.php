<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyPasswordRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: VerifyPassword checks if the customer password is valid. The e-mail address is required.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VerifyPasswordRequest extends AbstractStructBase
{
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * Constructor method for VerifyPasswordRequest
     * @uses VerifyPasswordRequest::setEmail()
     * @uses VerifyPasswordRequest::setPassword()
     * @param string $email
     * @param string $password
     */
    public function __construct(?string $email = null, ?string $password = null)
    {
        $this
            ->setEmail($email)
            ->setPassword($password);
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Pggns\MidocoApi\Crmsd\StructType\VerifyPasswordRequest
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Pggns\MidocoApi\Crmsd\StructType\VerifyPasswordRequest
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
}
