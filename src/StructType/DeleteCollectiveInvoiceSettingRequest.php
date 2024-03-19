<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCollectiveInvoiceSettingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCollectiveInvoiceSettingRequest extends AbstractStructBase
{
    /**
     * The settingId
     * @var int|null
     */
    protected ?int $settingId = null;
    /**
     * Constructor method for DeleteCollectiveInvoiceSettingRequest
     * @uses DeleteCollectiveInvoiceSettingRequest::setSettingId()
     * @param int $settingId
     */
    public function __construct(?int $settingId = null)
    {
        $this
            ->setSettingId($settingId);
    }
    /**
     * Get settingId value
     * @return int|null
     */
    public function getSettingId(): ?int
    {
        return $this->settingId;
    }
    /**
     * Set settingId value
     * @param int $settingId
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCollectiveInvoiceSettingRequest
     */
    public function setSettingId(?int $settingId = null): self
    {
        // validation for constraint: int
        if (!is_null($settingId) && !(is_int($settingId) || ctype_digit($settingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settingId, true), gettype($settingId)), __LINE__);
        }
        $this->settingId = $settingId;
        
        return $this;
    }
}
