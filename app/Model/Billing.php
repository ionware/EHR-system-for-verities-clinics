<?php

namespace ehr\Model;

use sys\Database\QueryBuilder;

class Billing extends QueryBuilder
{


    protected $table = "billings";

    public function __construct(\PDO $pdo, $mrn){

        $this->pdo = $pdo;
        $this->mrn = $mrn;
        return $this;

    }
}