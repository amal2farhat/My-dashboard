<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <title>Categories Books</title>
</head>

<body>
    <form name="myForm" action="#"  method="POST" onsubmit="validateForm()">
    <div class="container">
    <?php include 'includes/navbar.php'; 
    session_start();?>
        <!-- <div class="topbar">
            <div class="logo">
                <h2>Open Library</h2>
            </div>
            <div class="search">
                <input type="text" id="search" aria-placeholder="search here">
                <label for="search"><i class="fas fa-search"></i></label>

            </div>
            <div class="imtop">
                <div style="margin-right: 5px;"> <i class="fas fa-bell"></i></div>
                <div class="user">
                    <img src="images/admin.png" />

                </div>
            </div>
        </div> -->
        <?php include 'includes/sidebar.php'; ?>
        <?php
	// session_start();
    $conn = new mysqli('localhost', 'root', '', 'library');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	// include 'includes/conn.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['categoriname'];
		
		$sql = "INSERT INTO category (namecategory) VALUES ('$name')";
		if($conn->query($sql)){
			$_SESSION['success'] ='Category added successfully';
            header("Location: categories.php");
            exit();
		}
		else{
			echo  $conn->error;
		}   
    }
    ?>
 
?>

        <!-- <div class="sidebar">

            <div class="user2">
                <img class="user2admin" src="images/admin.png" />
                <div class="admin" >
                    <div class="admin2">Admin Admin</div>
                    <div class="admin2circle">
                        <div class="status-circle"></div>
                        <div class="online">Online</div>
                    </div>
                </div>
            </div>
            <ul>
                <li>
                    <a href="dashboard.html"><img src="images/home.png" />
                        <div>Home</div>
                    </a>
                </li>
                <li>
                    <a href="book.html"><img src="images/book2.png" />
                        <div>Books </div>
                    </a>
                </li>
                <li>
                    <a href="borrowbook.html"><img src="images/borrow2.png" />
                        <div>Borrow Book</div>
                    </a>
                </li>
                <li>
                    <a href="return.html"><img src="images/return.png" />
                        <div>Return</div>
                    </a>
                </li>
                <li>
                    <a href="room.html"><img src="images/room11.png" />
                        <div>Room</div>
                    </a>
                </li>

                <li>
                    <a href="categories.html"><img src="images/categories.png" />
                        <div>Categories</div>
                    </a>
                </li>
                <li>
                    <a href="student.html"><img src="images/student.png" />
                        <div>Student</div>
                    </a>
                </li>
            
              
            </ul>
        </div> -->
        <div class="main">


            <div class="items1">
                <div class="add2">
                    <div>
                        <h1>Categories</h1>
                        <div class="addbook">
                           
                            <div> <input type="text" id="categoriname" name="categoriname" value="" required
                                    placeholder="Enter category name" /></div>
                        </div>
                      
                      
                    
                        <div class="addbook">
                            <div> <button type="submit" name="add">Add</button></div>
                         
                        </div>
                    </div>
                </div>
            </div>

       
            <div class="deleteupdate items2">
                <div class="" style="width: 60%;
                /* margin-top: 5%; */
                 margin: auto; 
                text-align:start;
              
                height: 10%;
                background-color: #F4F1EA;">
                
                       
                        <div class="addbook2">
                            <div><label name="">Category</label></div>
                            <div><label name="">Action</label></div>
                           
                       
                        </div>
                      
                       
                 
                    
                </div>


                <!--  -->
                <div class="showall2">


                    <div class="addbook3" style="
                   
                    margin:10px  auto; 
                   text-align:justify;
                   width: 60%;
                   height: 100px;
                   background-color: #ffff;">

                        <div class="rowaddbook3">History</div>
                        



                        <div class="first">
                          
                            <div>
                                <button class="firstbtn" type="button" >Edit</button>
                                                                
                                <br> <button class="secondbtn" type="button" style="">Delete</button>
                            </div>
                         
                            
                        </div>

                   
                    </div>


                  

                </div>
                    <!--  -->
                    <hr class="hr" style="">
            </div>





        </div>
    </div>
</form>
<script>
    function validateForm() {
       //location price capacity availability
  let categoriname = document.forms["myForm"]["categoriname"].value;


 


  if (categoriname == "") {
    alert("categoriname must be filled out");
    return false;
  }

 

}

        </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="chart1.js"></script>
</body>

</html>
