<?php

include('database.php');

if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  if($password !== $confirm_password)
  {
    $_SESSION['message'] = 'Passwords do not match';
    $_SESSION['message_type'] = 'warning';
    header('Location: ../register.php');
      return;
  } 
  $hashed_password = md5($password);

  //Check if the Email already exists
  $query = "SELECT * FROM users WHERE email = '" . $email . "'";
  $result = mysqli_query($conn, $query);
  $count = $result->num_rows;
  if($count >= 1 ){
    $_SESSION['message'] = 'A user with that Email already exists';
    $_SESSION['message_type'] = 'warning';
    header('Location: ../register.php');
    return;
  }

  //Insert the user into the database
  $query = "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$hashed_password')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    if (!mysqli_query($conn, $query)) {
   
      $_SESSION['message'] = "Failed to sign up";
      $_SESSION['message_type'] = 'warning';
      header('Location: ../register.php');
      return;
  }



  }else{

    //authenticate the user 
   $query = "SELECT * FROM users WHERE email = '" . $email . "'";
  $result = mysqli_query($conn, $query);
  $count = $result->num_rows;
  if($count > 0){
      $row = $result->fetch_row();
      $id = $row[0];
      $email = $row[1];
      $name = $row[2];
 

      $user_data = [];
      $user_data["name"] = $name;
      $user_data["email"] = $email;
      $user_data["id"] = $id;

      //Convert the User Data to string so it can be stored in the cookies
      $user_data_string = json_encode($user_data);


      //Set up the cookies
      //setcookie("user", $user_data_string, time() + (86400 * 30), "/");
      $_SESSION["user"] = $user_data_string;
      
      //redirect the user to the dashboard
      header('Location: ../index.php');

  }

  
  }



}else{
    echo("Not Set");
}

?>
