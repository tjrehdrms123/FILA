<!-- DB 연결 -->
<?php 
    $host = 'localhost';
    $id = 'root';
    $pw = 'apmsetup';
    $db = 'fila';
    $db_conn = mysqli_connect($host,$id,$pw,$db);
        
    $sql = "SELECT user_num , user_name , user_item , user_color FROM fila_total";
    $result = mysqli_query($db_conn, $sql);

    if( !$db_conn ){
        echo "hi";
    }else{
        while($row = mysqli_fetch_array($result) ){
            print_r($row);
            echo '<br>';
        }
    }

?>

<?php 
    mysqli_close($db_conn);
?>


<!-- 

INSERT INTO fila_total(user_num, user_name, user_pw, user_item , user_color)

VALUES(3, 'dong', 1212, 'fila_dress' , 'black')

-->