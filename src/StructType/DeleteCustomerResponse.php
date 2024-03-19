<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCustomerResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: deleteCustomer --- test if customer is referenced in an order, if not delete all customer information. In case customer is referenced, throw an exception
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCustomerResponse extends AbstractStructBase
{
}
