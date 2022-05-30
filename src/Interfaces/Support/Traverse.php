<?php

namespace Src\Interfaces\Support;

use Closure;
use Src\BinaryTree\LinkedbinaryTree;

interface Traverse
{
    public function traverseTree(LinkedbinaryTree|NULL $tree);
    public function handle(LinkedbinaryTree $tree, Closure $closure);
}