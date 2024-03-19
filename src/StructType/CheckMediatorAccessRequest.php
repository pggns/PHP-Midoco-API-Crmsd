<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckMediatorAccessRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckMediatorAccessRequest extends AbstractStructBase
{
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The passwd
     * @var string|null
     */
    protected ?string $passwd = null;
    /**
     * Constructor method for CheckMediatorAccessRequest
     * @uses CheckMediatorAccessRequest::setMediatorId()
     * @uses CheckMediatorAccessRequest::setPasswd()
     * @param string $mediatorId
     * @param string $passwd
     */
    public function __construct(?string $mediatorId = null, ?string $passwd = null)
    {
        $this
            ->setMediatorId($mediatorId)
            ->setPasswd($passwd);
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Crmsd\StructType\CheckMediatorAccessRequest
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get passwd value
     * @return string|null
     */
    public function getPasswd(): ?string
    {
        return $this->passwd;
    }
    /**
     * Set passwd value
     * @param string $passwd
     * @return \Pggns\MidocoApi\Crmsd\StructType\CheckMediatorAccessRequest
     */
    public function setPasswd(?string $passwd = null): self
    {
        // validation for constraint: string
        if (!is_null($passwd) && !is_string($passwd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passwd, true), gettype($passwd)), __LINE__);
        }
        $this->passwd = $passwd;
        
        return $this;
    }
}
