<?php

declare(strict_types=1);

namespace SmitBackend\GrpcNexus\Contracts;

/**
 * Interface ServiceMeshInterface
 *
 * @package SmitBackend\GrpcNexus
 */
interface ServiceMeshInterface
{
    public function execute(array $payload = []): mixed;
}
