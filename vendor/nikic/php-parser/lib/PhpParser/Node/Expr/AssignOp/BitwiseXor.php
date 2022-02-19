<?php

declare (strict_types=1);
namespace Jacoby\Intervention\PhpParser\Node\Expr\AssignOp;

use Jacoby\Intervention\PhpParser\Node\Expr\AssignOp;
class BitwiseXor extends AssignOp
{
    public function getType() : string
    {
        return 'Expr_AssignOp_BitwiseXor';
    }
}
