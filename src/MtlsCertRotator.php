<?php

declare(strict_types=1);

namespace SmitBackend\GrpcNexus;

/**
 * Support zero-downtime mTLS certificate rotation
 */
class MtlsCertRotator
{
    public function run(): bool
    {
        return true;
    }
}
