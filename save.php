<?php

	//save code
	require 'conn.php';
 
	if(ISSET($_POST['create'])){
		$id=$_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$dob = $_POST['date_of_birth'];
		$birth = $_POST['place_of_birth'];
        $age = $_POST['age'];
		if($_POST['gender'] != null) {
			$gender = $_POST['gender'];
		}
		else{
			$gender = '';
		}
		$address = $_POST['address'];
		$email = $_POST['email'];
        $mobile = $_POST['mobile'];
 
		$sql="INSERT INTO registration (id,f_name,l_name,dob,birth,age,gender,address,email,mobile) VALUES(?,?,?,?,?,?,?,?,?,?)";
        $stmtinsert=$db->prepare($sql);
        $result=$stmtinsert->execute([$id,$firstname,$lastname,$dob,$birth,$age,$gender,$address,$email,$mobile]);
		if($result){
            echo 'Successfully saved.';
        }else{
            echo 'There were errors while saving the data.';
        }
    }

	//search
	session_start();
		if(isset($_POST['search'])){
			$id =$_POST['id'];
			$sql="SELECT * FROM registration where id='$id'";
			$stmtinsert=$db->query($sql);
			$publishers=$stmtinsert->fetchAll(PDO::FETCH_ASSOC);

			if($publishers)
			{
				foreach($publishers as $publisher)
				{
				$variable1=$publisher['id'];
				$_SESSION['id']=$variable1;
				$variable2=$publisher['f_name'];
				$_SESSION['firstname']=$variable2;
				$variable3=$publisher['l_name'];
				$_SESSION['lastname']=$variable3;
				$variable4=$publisher['dob'];
				$_SESSION['date_of_birth']=$variable4;
				$variable5=$publisher['birth'];
				$_SESSION['place_of_birth']=$variable5;
				$variable6=$publisher['age'];
				$_SESSION['age']=$variable6;
				$variable7=$publisher['gender'];
				$_SESSION['gender']=$variable7;
				$variable8=$publisher['address'];
				$_SESSION['address']=$variable8;
				header('location:index.php');
				$variable9=$publisher['email'];
				$_SESSION['email']=$variable9;
				$variable10=$publisher['mobile'];
				$_SESSION['mobile']=$variable10;
				}
			}
		}

	//delete code
	if(isset($_POST['delete'])) {
		$conn = mysqli_connect("localhost", "root", "","reg");
		$id = $_POST['id'];

		$sql = "DELETE FROM registration WHERE id =?";
		$stmtinsert=$conn->prepare($sql);
        $result=$stmtinsert->execute([$id]);

		// Delete
		if(isset($_POST['delete'])) { 
		$id = $_POST['id']; 
		$stmtinsert->execute();
		header('location:index.php');
		}
	}

	//update code
	require_once "conn.php";
	if(ISSET($_POST['update']))
	{
		if(count($_POST)>0) {
			$id=$_POST['id'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$dob = $_POST['date_of_birth'];
			$birth = $_POST['place_of_birth'];
			$age = $_POST['age'];
			if(isset($_POST['gender']) && $_POST['gender'] != null) {
				$gender = $_POST['gender'];
			}
			else{
				$gender = '';
			}
			$address = $_POST['address'];
			$email = $_POST['email'];
			$mobile = $_POST['mobile'];
	
			try{
				$sql = "UPDATE registration SET f_name=?, l_name=?, dob=?, birth=?, age=?, gender=?,address=?, email=?, mobile=? WHERE id=?";
				$stmt=$db->prepare($sql);
				$stmt->execute([$firstname,$lastname,$dob,$birth,$age,$gender,$address,$email,$mobile,$id]);
				
				echo "Records was updated successfully.";
			} catch(PDOException $e){
				die("ERROR: Could not able to execute $sql. "
											. $e->getMessage());
			}
			unset($db);
		}
	}


/*
	//search code
	$conn = mysqli_connect("localhost", "root", "","reg");
	require 'conn.php';
	if(ISSET($_POST['search']))
	{
		$id =$_POST['id'];
		$query="SELECT * FROM registration where id= '$id'";
		$query_run = mysqli_query($conn, $query);

		if(mysqli_num_rows($query_run) > 0)
		{
			foreach($query_run as $row)
			{
				?>
			
				<div class="form-group mb-3">
					<label for="">First Name :</label>
					<input type="text" value="<?=$row['f_name'];?>" class="form-control">
					<?php $_SESSION['firstname']=$row['f_name'];?>
				</div>
				<div class="form-group mb-3">
					<label for="">Last Name :</label>
					<input type="text" value="<?=$row['l_name'];?>" class="form-control">
					<?php $_SESSION['lastname']=$row['l_name'];?>
				</div>
				<div class="form-group mb-3">
					<label for="">Date of Birth :</label>
					<input type="text" value="<?=$row['dob'];?>" class="form-control">
					<?php $_SESSION['date_of_birth']=$row['dob'];?>
				</div>
				<div class="form-group mb-3">
					<label for=""> Place of Birth :</label>
					<input type="text" value="<?=$row['birth'];?>" class="form-control">
					<?php $_SESSION['place_of_birth']=$row['birth'];?>
				</div>
				<div class="form-group mb-3">
					<label for="">Age :</label>
					<input type="text" value="<?=$row['age'];?>" class="form-control">
					<?php $_SESSION['age']=$row['age'];?>
				</div>
				<div class="form-group mb-3">
					<label for="">Gender :</label>
					<input type="text" value="<?=$row['gender'];?>" class="form-control">
					<?php $_SESSION['gender']=$row['gender'];?>
				</div>
				<div class="form-group mb-3">
					<label for="">Address :</label>
					<input type="text" value="<?=$row['address'];?>" class="form-control">
					<?php $_SESSION['address']=$row['address'];?>
				</div>
				<div class="form-group mb-3">
					<label for="">Email Id :</label>
					<input type="text" value="<?=$row['email'];?>" class="form-control">
					<?php $_SESSION['email']=$row['email'];?>
				</div>
				<div class="form-group mb-3">
					<label for="">Mobile No. :</label>
					<input type="text" value="<?=$row['mobile'];?>" class="form-control">
					<?php $_SESSION['mobile']=$row['mobile'];?>
				</div>
				<?php header('location: index.php');?>
				<?php
			}
		}
		else{
			echo "No Record Found";
			redirect.response("index.php");
		}
	}*/
?>
