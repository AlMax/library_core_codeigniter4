<?php

namespace CoreLibrary\Core;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;

abstract class CoreModel_codeigniter extends Model
{
    protected $table = '';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [];
    protected $useTimestamps = true;

    protected $returnType = 'object';
    protected $dateFormat = 'int'; // 'datetime', 'date', 'int'

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    protected $useSoftDeletes = false;
    protected $deletedField = 'deleted_at';

    public function __construct(
        string               $table,
        array                $allowedFields,
        string               $softDeletesField = null,
        $returnType = 'object',
        ?ConnectionInterface $db = null
    )
    {
        $this->table = $table;
        $this->allowedFields = $allowedFields;
        $this->returnType = $returnType;
        if ($softDeletesField !== null) {
            self::setSoftDeletes($softDeletesField);
        }

        parent::__construct($db);
    }

    private function setSoftDeletes(
        string $deletedField
    )
    {
        $this->useSoftDeletes = true;
        $this->deletedField = $deletedField;
    }

}