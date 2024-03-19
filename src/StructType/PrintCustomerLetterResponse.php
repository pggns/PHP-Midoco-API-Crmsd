<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintCustomerLetterResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintCustomerLetterResponse extends AbstractStructBase
{
    /**
     * The PrintjobId
     * @var int|null
     */
    protected ?int $PrintjobId = null;
    /**
     * Constructor method for PrintCustomerLetterResponse
     * @uses PrintCustomerLetterResponse::setPrintjobId()
     * @param int $printjobId
     */
    public function __construct(?int $printjobId = null)
    {
        $this
            ->setPrintjobId($printjobId);
    }
    /**
     * Get PrintjobId value
     * @return int|null
     */
    public function getPrintjobId(): ?int
    {
        return $this->PrintjobId;
    }
    /**
     * Set PrintjobId value
     * @param int $printjobId
     * @return \Pggns\MidocoApi\Crmsd\StructType\PrintCustomerLetterResponse
     */
    public function setPrintjobId(?int $printjobId = null): self
    {
        // validation for constraint: int
        if (!is_null($printjobId) && !(is_int($printjobId) || ctype_digit($printjobId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printjobId, true), gettype($printjobId)), __LINE__);
        }
        $this->PrintjobId = $printjobId;
        
        return $this;
    }
}
