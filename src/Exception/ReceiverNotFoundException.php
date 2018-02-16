<?php

namespace Bernard\Exception;

use Bernard\Exception;

/**
 * Is thrown when a Router tries to map a Envelope to a receiver and
 * cannot be done.
 */
class ReceiverNotFoundException extends \RuntimeException implements Exception
{
}
