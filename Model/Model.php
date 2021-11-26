<?php

abstract class Model
{
    function __set($attr, $Value)
    {
        $this->$attr->$Value;
    }

    function __get($attr)
    {
        return $this->$attr;
    }

    function connexion()
    {
        return new PDO("mysql:host=localhost;dbname=test;", "root", "");
    }

    function All()
    {
        $db = $this->connexion();
        $table = strtolower(get_called_class());
        $st = $db->prepare("Select * from $table");
        $array = [];
        $st->execute();
        while ($rq = $st->fetch(PDO::FETCH_ASSOC)) {

            $model = get_called_class();
            $object = new $model();
            foreach ($rq as $key => $value) {
                $object->$key = $value;
            }
            $array[] = $object;
        }
        return $array;
    }

    function FindId($id)
    {
        $db = $this->connexion();
        $table = strtolower(get_called_class());
        $st = $db->prepare("Select * from $table where id=:id");
        $st->bindValue(":id", $id);
        $array = [];
        $st->execute();
        while ($rq = $st->fetch(PDO::FETCH_ASSOC)) {
            $array[] = $rq;
        }
        return $array;
    }

    function Save()
    {
        $table = strtolower(get_called_class());
        $db = $this->connexion();
        $pk = $this->id;
        if ($pk == null) {
            $st = $db->prepare("insert into $table default values returning id");
            $st->execute();
            $row = $st->fetch(pdo::FETCH_ASSOC);
            $this->id = $row["id"];
        }
        foreach ($this->fields as $field) {
            $st = $db->prepare("update $table set $field = :value where id=:id");
            $st->bindValue("Value", $field);
            $st->bindValue("id", $this->id);
            $st->execute();
        }
    }

    function Delete($id)
    {
        $table = strtolower(get_called_class());
        $db = $this->connexion();
        $st = $db->prepare("delete from $table where id=:id");
        $st->bindValue("id", $id);
        $st->execute();
    }

}
