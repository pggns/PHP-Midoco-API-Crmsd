<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintMidocoMandateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintMidocoMandateResponse extends AbstractStructBase
{
    /**
     * The PrintJobId
     * @var int|null
     */
    protected ?int $PrintJobId = null;
    /**
     * Constructor method for PrintMidocoMandateResponse
     * @uses PrintMidocoMandateResponse::setPrintJobId()
     * @param int $printJobId
     */
    public function __construct(?int $printJobId = null)
    {
        $this
            ->setPrintJobId($printJobId);
    }
    /**
     * Get PrintJobId value
     * @return int|null
     */
    public function getPrintJobId(): ?int
    {
        return $this->PrintJobId;
    }
    /**
     * Set PrintJobId value
     * @param int $printJobId
     * @return \Pggns\MidocoApi\Crmsd\StructType\PrintMidocoMandateResponse
     */
    public function setPrintJobId(?int $printJobId = null): self
    {
        // validation for constraint: int
        if (!is_null($printJobId) && !(is_int($printJobId) || ctype_digit($printJobId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printJobId, true), gettype($printJobId)), __LINE__);
        }
        $this->PrintJobId = $printJobId;
        
        return $this;
    }
}
