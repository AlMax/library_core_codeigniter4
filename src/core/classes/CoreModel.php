<?php

use CodeIgniter\Model;

abstract class CoreModel extends Model
{
    protected $table;
    protected $allowedFields;
    protected $useSoftDeletes;
    protected $useTimestamps = true;
    protected $returnType = 'array';

    public function __construct($db = null)
    {
        parent::__construct($db);
    }
}