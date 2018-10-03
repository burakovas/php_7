<?php

function getConnection(){
    static $conn = null;
    if(is_null($conn)){
        $conn = mysqli_connect(
            "185.80.130.82","php1user","php1user","php1L7"
        );
    }
    return $conn;
}

function execute($sql){
    if (!$res = mysqli_query(getConnection(), $sql)){
        var_dump(mysqli_error(getConnection()));
      } else {
        return $res;
      }
}

function queryAll($sql){
    return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
}

function queryOne($sql){
    return queryAll($sql)[0];
}

function closeConnection(){
    return mysqli_close(getConnection());
}
