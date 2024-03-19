<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContactMediaRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetContactMediaRequest extends AbstractStructBase
{
    /**
     * The mediaId
     * @var string|null
     */
    protected ?string $mediaId = null;
    /**
     * The visibleAlsoForOrder
     * @var bool|null
     */
    protected ?bool $visibleAlsoForOrder = null;
    /**
     * Constructor method for GetContactMediaRequest
     * @uses GetContactMediaRequest::setMediaId()
     * @uses GetContactMediaRequest::setVisibleAlsoForOrder()
     * @param string $mediaId
     * @param bool $visibleAlsoForOrder
     */
    public function __construct(?string $mediaId = null, ?bool $visibleAlsoForOrder = null)
    {
        $this
            ->setMediaId($mediaId)
            ->setVisibleAlsoForOrder($visibleAlsoForOrder);
    }
    /**
     * Get mediaId value
     * @return string|null
     */
    public function getMediaId(): ?string
    {
        return $this->mediaId;
    }
    /**
     * Set mediaId value
     * @param string $mediaId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetContactMediaRequest
     */
    public function setMediaId(?string $mediaId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediaId) && !is_string($mediaId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediaId, true), gettype($mediaId)), __LINE__);
        }
        $this->mediaId = $mediaId;
        
        return $this;
    }
    /**
     * Get visibleAlsoForOrder value
     * @return bool|null
     */
    public function getVisibleAlsoForOrder(): ?bool
    {
        return $this->visibleAlsoForOrder;
    }
    /**
     * Set visibleAlsoForOrder value
     * @param bool $visibleAlsoForOrder
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetContactMediaRequest
     */
    public function setVisibleAlsoForOrder(?bool $visibleAlsoForOrder = null): self
    {
        // validation for constraint: boolean
        if (!is_null($visibleAlsoForOrder) && !is_bool($visibleAlsoForOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($visibleAlsoForOrder, true), gettype($visibleAlsoForOrder)), __LINE__);
        }
        $this->visibleAlsoForOrder = $visibleAlsoForOrder;
        
        return $this;
    }
}
