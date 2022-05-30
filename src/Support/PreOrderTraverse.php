<?php
namespace Src\Support;

use Closure;
use Src\BinaryTree\LinkedbinaryTree;
use Src\Interfaces\Support\Traverse;

class PreOrderTraverse implements Traverse
{
    private Closure $closure;

    public function traverseTree(LinkedbinaryTree|NULL $tree)
    {
        if ($tree === null) return;

        ($this->closure)($tree->data);
        static::traverseTree($tree->left);
        static::traverseTree($tree->right);
    }

    public function handle(LinkedbinaryTree $tree, Closure $closure)
    {
        $this->closure = $closure;
        $this->traverseTree($tree);
    }
}