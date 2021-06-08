<?php 
session_start();
        if(isset($_POST['a_user'])){
				//connection
                  include("condb.php");
				//รับค่า user & password
                  $a_user = $_POST['a_user'];
                  $a_pass = $_POST['a_pass'];
				//query
                  $sql="SELECT * FROM tbl_admin Where a_user='".$a_user."' and a_pass='".$a_pass."' ";

                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["a_id"] = $row["a_id"];
                      $_SESSION["a_user"] = $row["a_user"];
                      $_SESSION["Userlevel"] = $row["Userlevel"];

                      if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: customerdata.php");

                      }

                      //if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                      // Header("Location: user_page.php");

                      //}

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{
            echo ("ไม่ถูกต้อง");

             Header("Location: form.php"); //user & password incorrect back to login again

        }
?>