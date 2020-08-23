<?php

namespace Kathamo\Config;

use Kathamo\Services\TaskService;
use Kathamo\Services\TaskServiceImpl;

/**
 * Dependency injection configuration file
 */

use function DI\create;


return [
    TaskService::class => create(TaskServiceImpl::class),
];
