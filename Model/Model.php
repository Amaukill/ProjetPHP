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
        return new PDO("mysql:host=localhost;dbname=projet;", "root", "");
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
        $st->execute();
        $model = get_called_class();
        $object = new $model();
        while ($rq = $st->fetch(PDO::FETCH_ASSOC)) {

            foreach ($rq as $key => $value) {
                $object->$key = $value;
            }

        }
        return $object;
    }

    function Save()
    {
        $table = strtolower(get_called_class());
        $db = $this->connexion();
        $pk = $this->id;
        if ($pk == null) {
            $st = $db->prepare("insert into $table values ()");
            $st->execute();
            $this->id = $db->lastInsertId();
        }
        foreach ($this->fields as $field) {
            if($_POST[$field] != null){
            $st = $db->prepare("update $table set $field=:value where id=:id");
            $value=$_POST[$field];
            $st->bindValue("value", $value);
            $st->bindValue("id", $this->id);
            $st->execute();
            }
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
    function FindByCategorie($id){
        $db = $this->connexion();
        $table = strtolower(get_called_class());
        $st = $db->prepare("Select * from $table where categorie_id=:id " );
        $st->bindValue("id", $id);
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
}
