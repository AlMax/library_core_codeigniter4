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

        switch ($this->type) {
            case 'codeigniter':
                return new Model();
        }

        return $this;
    }
}