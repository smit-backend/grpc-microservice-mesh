<?php

return [
    'enabled' => env('GRPC_MICROSERVICE_MESH_ENABLED', true),
    'timeout' => env('GRPC_MICROSERVICE_MESH_TIMEOUT', 30),
    'log_channel' => env('GRPC_MICROSERVICE_MESH_LOG', 'stack'),
];
