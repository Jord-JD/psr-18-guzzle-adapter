<?php

namespace JordJD\Psr18GuzzleAdapter\Exceptions;

use Psr\Http\Client\ClientExceptionInterface;
use Throwable;

class ClientException extends \Exception implements ClientExceptionInterface
{
}