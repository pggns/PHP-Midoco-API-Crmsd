<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyPasswordRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: ModifyPassword sets a new customer password. The e-mail address is required.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ModifyPasswordRequest extends AbstractStructBase
{
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The oldPassword
     * @var string|null
     */
    protected ?string $oldPassword = null;
    /**
     * The newPassword
     * @var string|null
     */
    protected ?string $newPassword = null;
    /**
     * Constructor method for ModifyPasswordRequest
     * @uses ModifyPasswordRequest::setEmail()
     * @uses ModifyPasswordRequest::setOldPassword()
     * @uses ModifyPasswordRequest::setNewPassword()
     * @param string $email
     * @param string $oldPassword
     * @param string $newPassword
     */
    public function __construct(?string $email = null, ?string $oldPassword = null, ?string $newPassword = null)
    {
        $this
            ->setEmail($email)
            ->setOldPassword($oldPassword)
            ->setNewPassword($newPassword);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\ModifyPasswordRequest
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
     * Get oldPassword value
     * @return string|null
     */
    public function getOldPassword(): ?string
    {
        return $this->oldPassword;
    }
    /**
     * Set oldPassword value
     * @param string $oldPassword
     * @return \Pggns\MidocoApi\Crmsd\StructType\ModifyPasswordRequest
     */
    public function setOldPassword(?string $oldPassword = null): self
    {
        // validation for constraint: string
        if (!is_null($oldPassword) && !is_string($oldPassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldPassword, true), gettype($oldPassword)), __LINE__);
        }
        $this->oldPassword = $oldPassword;
        
        return $this;
    }
    /**
     * Get newPassword value
     * @return string|null
     */
    public function getNewPassword(): ?string
    {
        return $this->newPassword;
    }
    /**
     * Set newPassword value
     * @param string $newPassword
     * @return \Pggns\MidocoApi\Crmsd\StructType\ModifyPasswordRequest
     */
    public function setNewPassword(?string $newPassword = null): self
    {
        // validation for constraint: string
        if (!is_null($newPassword) && !is_string($newPassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newPassword, true), gettype($newPassword)), __LINE__);
        }
        $this->newPassword = $newPassword;
        
        return $this;
    }
}
