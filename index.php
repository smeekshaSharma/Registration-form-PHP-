<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/style.css">
    <title>Hello, world!</title>
</head>
<script>
    function checked_funtion(){
        let variable = document.getValueByName('gender');
        
            console.log(variable.value);
    }

</script>
<body>
    <!-- navbar -->
    <div class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="word.png">

            <br><br><br>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <br><br>
    <br>
    <form method="post" action="save.php">
        <div class="reg1">
            <div class="reg-form">
                <h1>Registration Form</h1>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Employee Id :</label>
                    </div><br>
                    <div class="col-auto">
                        <input type="text" name="id" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" value=<?php
                                                        if(isset($_SESSION['id'])){
                                                        echo $_SESSION['id'];
                                                    }
                                                    
                                                    ?>>
                    </div>
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">First Name :</label>
                    </div><br>
                    <div class="col-auto">
                        <input type="text" name="firstname" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" value=<?php
                                                        if(isset($_SESSION['firstname'])){
                                                        echo $_SESSION['firstname'];
                                                    }
                                                    
                                                    ?>>
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Last Name :</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="lastname" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" value=<?php
                                                        if(isset($_SESSION['lastname'])){
                                                        echo $_SESSION['lastname'];
                                                    }
                                                    
                                                    ?>>
                    </div>
                    <br>
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Date Of Birth :</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="date_of_birth" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" value=<?php
                                                        if(isset($_SESSION['date_of_birth'])){
                                                        echo $_SESSION['date_of_birth'];
                                                    }
                                                    
                                                    ?>>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Place Of Birth :</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="place_of_birth" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" value=<?php
                                                        if(isset($_SESSION['place_of_birth'])){
                                                        echo $_SESSION['place_of_birth'];
                                                    }
                                                   
                                                    ?>>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Age :</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" name="age" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" value=<?php
                                                        if(isset($_SESSION['age'])){
                                                        echo $_SESSION['age'];
                                                    }
                                                    
                                                    ?>>
                        </div>
                    </div>
                    <div> <label for="inputPassword6" class="col-form-label">Gender :</label>
                        <?php
                        if(isset($_SESSION['gender'])){
                            if($_SESSION['gender'] == 'male') {
                                $malechk = 'checked';
                                $femalechk = '';
                            }
                            else {
                                $malechk = '';
                                $femalechk = 'checked';
                            }
                        }
                        else{
                            $malechk = '';
                            $femalechk = '';
                        }
                        
                        ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineCheckbox1" <?php echo $malechk; ?>>
                            <label class="form-check-label" for="inlineCheckbox1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineCheckbox2" <?php echo $femalechk; ?> > 
                            <label class="form-check-label" for="inlineCheckbox2">Female</label> 
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Address :</label>
                    </div><br>
                    <div class="col-auto">
                        <input type="text" name="address" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" value=<?php
                                                        if(isset($_SESSION['address'])){
                                                        echo $_SESSION['address'];
                                                    }
                                                    
                                                    ?>>
                    </div>
                </div>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Email id :</label>
                    </div><br>
                    <div class="col-auto">
                        <input type="text" name="email" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" value=<?php
                                                        if(isset($_SESSION['email'])){
                                                        echo $_SESSION['email'];
                                                    }
                                                    
                                                    ?>>
                    </div>
                </div>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Mobile No :</label>
                    </div><br>
                    <div class="col-auto">
                        <input type="text" name="mobile" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" value=<?php
                                                        if(isset($_SESSION['mobile'])){
                                                        echo $_SESSION['mobile'];
                                                    }
                                                    session_destroy();
                                                    ?>>
                    </div>
                </div>
                    <div class="col-md-8">
                    <button type="submit" name="create" class="btn btn-primary">Save</button>
                    <button type="submit" name="search" class="btn btn-primary">Search</button>
                    <button type="submit" name="delete" class="btn btn-primary">Delete</button>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </div>

                </div>
            </div>
        </div>
    </form>
    </div>
    </nav>
    <!-- navbar ends -->





    <!--  -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</body>

</html>