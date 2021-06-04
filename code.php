<?php
session_start();
include('dbcon.php');

if(isset($_POST['upd_user_btn']))
{
    $displayname = $_POST['display_name'];
    $email = $_POST['email'];
    
    $uid = $_POST['user_id'];
    $properties = [
    'displayName' => $displayname,
    'email' => $email,
];
    $updatedUser = $auth->updateUser($uid, $properties);

    if($updatedUser)
    {
        $_SESSION['status'] = "User Updated Succesfully";
        header('Location: userlist.php');
        exit();
    }
    else
    {
        $_SESSION['status'] = "User Not Updated";
        header('Location: userlist.php');
        exit();
    }

}



if(isset($_POST['reg_btn']))
{
    $fullname = $_POST['full_name'];
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userProperties = [
        'email' => $email,
        'emailVerified' => false,
        
        'password' => $password,
        'displayName' => $fullname,
    ];
    
    $createdUser = $auth->createUser($userProperties);  

    if($createdUser)
    {
        $_SESSION['status'] = "The User added Succesfully";
        header('Location: register.php');
        exit();
    }
    else
    {
        $_SESSION['status'] = "The User not Registered";
        header('Location: register.php');
        exit();
    }

}

    

if(isset($_POST['delete_btn']))
{
    $del_id = $_POST['delete_btn'];
    $ref_table = 'contacts/'.$del_id;
    $deletequery_result = $database->getReference($ref_table)->remove();

    if($deletequery_result)
    {
        $_SESSION['status'] = "Contact Deleted Successfully";
        header('Location:index.php');
    }
    else
    {
        $_SESSION['status'] = "Contact Not Deleted";
        header('Location:index.php');
    }

}

if(isset($_POST['update_contact']))
{
    $key = $_POST['key'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $updateData = [
        'fname'=>$first_name, 
        'lname'=>$last_name,    
        'email'=>$email,    
        'phone'=>$phone,
        'address'=>$address,       
    ];
    $ref_table = 'contacts/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {
        $_SESSION['status'] = "Contact Updated Successfully";
        header('Location:index.php');
    }
    else
    {
        $_SESSION['status'] = "Contact Not Updated";
        header('Location:index.php');
    }
}

if (isset($_POST['save_contact']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $postData = [
        'fname'=>$first_name, 
        'lname'=>$last_name,    
        'email'=>$email,    
        'phone'=>$phone,
        'address'=>$address,       
    ];

    $ref_table = "contacts";
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if($postRef_result)
    {
        $_SESSION['status'] = "Contact Added Successfully";
        header('Location:index.php');
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location:index.php');
    }


}

?>