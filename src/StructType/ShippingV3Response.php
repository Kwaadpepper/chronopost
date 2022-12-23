<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV3Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV3Response
 * @subpackage Structs
 */
class ShippingV3Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultExpeditionValue|null
     */
    protected ?\StructType\ResultExpeditionValue $return = null;
    /**
     * Constructor method for shippingV3Response
     * @uses ShippingV3Response::setReturn()
     * @param \StructType\ResultExpeditionValue $return
     */
    public function __construct(?\StructType\ResultExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultExpeditionValue|null
     */
    public function getReturn(): ?\StructType\ResultExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultExpeditionValue $return
     * @return \StructType\ShippingV3Response
     */
    public function setReturn(?\StructType\ResultExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
