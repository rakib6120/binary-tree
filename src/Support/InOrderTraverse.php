<?php
namespace Src\Support;

use Closure;
use Src\BinaryTree\LinkedbinaryTree;
use Src\Interfaces\Support\Traverse;

class InOrderTraverse implements Traverse
{
    private Closure $closure;

    public function traverseTree(LinkedbinaryTree|NULL $tree)
    {
        if ($tree === null) return;

        static::traverseTree($tree->left);
        ($this->closure)($tree->data);
        static::traverseTree($tree->right);
    }

    public function handle(LinkedbinaryTree $tree, Closure $closure)
    {
        $this->closure = $closure;
        $this->traverseTree($tree);
    }
}