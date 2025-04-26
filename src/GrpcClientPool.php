<?php

declare(strict_types=1);

namespace SmitBackend\GrpcNexus;

use SmitBackend\GrpcNexus\Contracts\ServiceMeshInterface;

/**
 * Class GrpcClientPool
 *
 * @package SmitBackend\GrpcNexus
 */
class GrpcClientPool implements ServiceMeshInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
