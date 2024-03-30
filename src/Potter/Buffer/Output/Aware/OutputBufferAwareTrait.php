<?php

declare(strict_types=1);

namespace Potter\Buffer\Output\Aware;

use \Psr\Container\ContainerInterface, \Potter\Buffer\Output\OutputBufferInterface;

trait OutputBufferAwareTrait 
{
    final public function getOutputBuffer(): OutputBufferInterface
    {
        return $this->getContainer()->get('output_buffer');
    }
    
    final public function hasOutputBuffer(): bool
    {
        return $this->getContainer()->has('output_buffer');
    }
    
    final public function startOutputBuffer(): void
    {
        $this->getOutputBuffer()->start();
    }
    
    abstract public function getContainer(): ContainerInterface;
}