<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletePersonTitleRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: get the active mandate that is assigned to a billing document
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeletePersonTitleRequest extends AbstractStructBase
{
    /**
     * The titleId
     * @var int|null
     */
    protected ?int $titleId = null;
    /**
     * Constructor method for DeletePersonTitleRequest
     * @uses DeletePersonTitleRequest::setTitleId()
     * @param int $titleId
     */
    public function __construct(?int $titleId = null)
    {
        $this
            ->setTitleId($titleId);
    }
    /**
     * Get titleId value
     * @return int|null
     */
    public function getTitleId(): ?int
    {
        return $this->titleId;
    }
    /**
     * Set titleId value
     * @param int $titleId
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeletePersonTitleRequest
     */
    public function setTitleId(?int $titleId = null): self
    {
        // validation for constraint: int
        if (!is_null($titleId) && !(is_int($titleId) || ctype_digit($titleId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($titleId, true), gettype($titleId)), __LINE__);
        }
        $this->titleId = $titleId;
        
        return $this;
    }
}
