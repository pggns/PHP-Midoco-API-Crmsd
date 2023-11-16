<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerAssignableDebitorsResponse StructType
 * @subpackage Structs
 */
class GetCustomerAssignableDebitorsResponse extends AbstractStructBase
{
    /**
     * The MidocoDebitor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    protected array $MidocoDebitor = [];
    /**
     * Constructor method for GetCustomerAssignableDebitorsResponse
     * @uses GetCustomerAssignableDebitorsResponse::setMidocoDebitor()
     * @param mixed[] $midocoDebitor
     */
    public function __construct(array $midocoDebitor = [])
    {
        $this
            ->setMidocoDebitor($midocoDebitor);
    }
    /**
     * Get MidocoDebitor value
     * @return mixed[]
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
        foreach ($values as $getCustomerAssignableDebitorsResponseMidocoDebitorItem) {
            // validation for constraint: itemType
            if (false) {
                $invalidValues[] = is_object($getCustomerAssignableDebitorsResponseMidocoDebitorItem) ? get_class($getCustomerAssignableDebitorsResponseMidocoDebitorItem) : sprintf('%s(%s)', gettype($getCustomerAssignableDebitorsResponseMidocoDebitorItem), var_export($getCustomerAssignableDebitorsResponseMidocoDebitorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDebitor property can only contain items of type mixed, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDebitor value
     * @throws InvalidArgumentException
     * @param mixed[] $midocoDebitor
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerAssignableDebitorsResponse
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
     * @param mixed $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerAssignableDebitorsResponse
     */
    public function addToMidocoDebitor(mixed $item): self
    {
        // validation for constraint: itemType
        if (false) {
            throw new InvalidArgumentException(sprintf('The MidocoDebitor property can only contain items of type mixed, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDebitor[] = $item;
        
        return $this;
    }
}
