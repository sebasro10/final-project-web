<?php

interface Crudable {

    function readRecords();

    function updateRecord($id, $values);

    function deleteRecord($id);

    function insertRecord($values);

}

?>