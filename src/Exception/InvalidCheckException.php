<?php

namespace Omnipay\AuthorizeNet\Exception;

use Omnipay\Common\Exception\OmnipayException;

/**
 * Invalid Check Exception
 *
 * Thrown when a check is invalid or missing required fields.
 */
class InvalidCheckException extends \Exception implements OmnipayException
{
}
