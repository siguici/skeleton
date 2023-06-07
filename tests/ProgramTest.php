<?php

declare(strict_types=1);

namespace Vive\Skeleton\Test\Unit;

use Vive\Skeleton\Program;

it('should output "Hello World!"', function () {
    ob_start();
    Program::main();
    expect(ob_get_clean())->toEqual('Hello World!');
});
