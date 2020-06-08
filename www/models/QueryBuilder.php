<?php

class QueryBuilder {

    protected = $connection;
    protected = $query;
    protected = $parameters;
    protected = $alias;

    public function __construct(BDDInterface $connection = NULL)
    {
        
    }

    public function select(string $value = '*'): QueryBuilder
    {

    }

    public function from(string $table, string $alias): QueryBuilder
    {

    }

    public function where(string $conditions): QueryBuilder
    {

    }

    public function setParameter(string $key, string $value): QueryBuilder
    {

    }

    public function join(string $table, string $aliasTarget, string $fieldSource = 'id', string $fieldTarget = 'id'): QueryBuilder
    {

    }

    public function leftjoin(string $table, string $aliasTarget, string $fieldSource = 'id', string $fieldTarget = 'id'): QueryBuilder
    {

    }

    public function addToQuery(string $query): QueryBuilder
    {

    }

    public function getQuery(): ResultInterface
    {

    }

}