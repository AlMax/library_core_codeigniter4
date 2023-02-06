<?php

use CodeIgniter\Model;

abstract class CoreModel
{
    private string $type;

    public function __construct(
        $type = 'class'
    )
    {
        $this->type = $type;

        return match ($this->type) {
            'codeigniter' => new Model(),
            default => $this,
        };
    }
}