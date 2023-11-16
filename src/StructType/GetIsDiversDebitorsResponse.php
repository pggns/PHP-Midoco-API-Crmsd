<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIsDiversDebitorsResponse StructType
 * @subpackage Structs
 */
class GetIsDiversDebitorsResponse extends AbstractStructBase
{
    /**
     * The MidocoDebitor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDebitor
     * @var \Pggns\MidocoApi\Crmsd\StructType\DebitorDTO[]
     */
    protected array $MidocoDebitor = [];
    /**
     * Constructor method for GetIsDiversDebitorsResponse
     * @uses GetIsDiversDebitorsResponse::setMidocoDebitor()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DebitorDTO[] $midocoDebitor
     */
    public function __construct(array $midocoDebitor = [])
    {
        $this
            ->setMidocoDebitor($midocoDebitor);
    }
    /**
     * Get MidocoDebitor value
     * @return \Pggns\MidocoApi\Crmsd\StructType\DebitorDTO[]
     */
    public function getMidocoDebitor(): array
    {
        return $this->MidocoDebitor;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDebitor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDebitor method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDebitorForArrayConstraintsFromSetMidocoDebitor(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getIsDiversDebitorsResponseMidocoDebitorItem) {
            // validation for constraint: itemType
            if (!$getIsDiversDebitorsResponseMidocoDebitorItem instanceof \Pggns\MidocoApi\Crmsd\StructType\DebitorDTO) {
                $invalidValues[] = is_object($getIsDiversDebitorsResponseMidocoDebitorItem) ? get_class($getIsDiversDebitorsResponseMidocoDebitorItem) : sprintf('%s(%s)', gettype($getIsDiversDebitorsResponseMidocoDebitorItem), var_export($getIsDiversDebitorsResponseMidocoDebitorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDebitor property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\DebitorDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\DebitorDTO[] $midocoDebitor
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetIsDiversDebitorsResponse
     */
    public function setMidocoDebitor(array $midocoDebitor = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDebitorArrayErrorMessage = self::validateMidocoDebitorForArrayConstraintsFromSetMidocoDebitor($midocoDebitor))) {
            throw new InvalidArgumentException($midocoDebitorArrayErrorMessage, __LINE__);
        }
        $this->MidocoDebitor = $midocoDebitor;
        
        return $this;
    }
    /**
     * Add item to MidocoDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\DebitorDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetIsDiversDebitorsResponse
     */
    public function addToMidocoDebitor(\Pggns\MidocoApi\Crmsd\StructType\DebitorDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\DebitorDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDebitor property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\DebitorDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDebitor[] = $item;
        
        return $this;
    }
}
