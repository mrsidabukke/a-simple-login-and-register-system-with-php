<?php

function register_user($nama,$pass){
         global $link;
//mencegah sql injection 
         $nama = escape($nama);
         $pass = escape($pass);


    $pass = password_hash($pass, PASSWORD_DEFAULT);    //enkripsi password (hashing)     
    $query= "INSERT INTO users (username,password) VALUES ('$nama','$pass')";

    if(mysqli_query($link,$query)){
       return true;
}else{
    echo 'gagal';
    return false;
}
}

function register_cek_nama($nama){
    global $link;
    $nama = escape($nama);
    $query = "SELECT * FROM users WHERE username = '$nama'";
    if($result = mysqli_query($link,$query)){
        if(mysqli_num_rows($result) == 0){
            return true;
        }else{
            return false;
        }
    }
}

// menguji nama di database
function login_cek_nama($nama){
    global $link;
    $nama = escape($nama);
    $query = "SELECT * FROM users WHERE username = '$nama'";
    if($result = mysqli_query($link,$query)){
        if(mysqli_num_rows($result) !=0){
            return true;
        }else{
            return false;
        }
    }
}

// untuk login
 
function cek_data($nama,$pass){
    global $link;
    // mencegah sql injection
    $nama = escape($nama);
    $pass = escape($pass);

    $query = "SELECT password FROM users WHERE username = '$nama'";
    $result = mysqli_query($link,$query);
    $hash = mysqli_fetch_assoc($result)['password'];

    if(password_verify($pass,$hash)){
       return true;
    }else{
        return false;
    }
}

function escape ($data){
    global $link;
    return mysqli_real_escape_string($link,$data);
}

//menguji status user
function cek_status($nama){
    global $link;
    $nama = escape($nama);
    $query = "SELECT role FROM users WHERE username = '$nama'";
    $result = mysqli_query($link,$query);
    $status = mysqli_fetch_assoc($result)['role'];
    return $status;

    if ($status == 1){
        return true;
}
}

?>