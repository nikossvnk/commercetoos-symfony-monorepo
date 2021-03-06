<?php

/**
 * @author @jayS-de <jens.schulze@commercetools.de>
 */

namespace Commercetools\Symfony\CtpBundle\Logger;

use Psr\Log\LoggerInterface;

class Logger implements LoggerInterface
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function emergency($message, array $context = array())
    {
        return $this->logger->emergency($message, $context);
    }

    public function alert($message, array $context = array())
    {
        return $this->logger->alert($message, $context);
    }

    public function critical($message, array $context = array())
    {
        return $this->logger->critical($message, $context);
    }

    public function error($message, array $context = array())
    {
        return $this->logger->error($message, $context);
    }

    public function warning($message, array $context = array())
    {
        return $this->logger->warning($message, $context);
    }

    public function notice($message, array $context = array())
    {
        return $this->logger->notice($message, $context);
    }

    public function info($message, array $context = array())
    {
        return $this->logger->info($message, $context);
    }

    public function debug($message, array $context = array())
    {
        return $this->logger->debug($message, $context);
    }

    public function log($level, $message, array $context = array())
    {
        return $this->logger->log($level, $message, $context);
    }
}
