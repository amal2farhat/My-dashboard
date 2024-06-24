<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <title>Book</title>
</head>

<body>
    <form name="myForm" action="#" onsubmit="validateForm()">
    <div class="container">
        <?php include 'includes/navbar.php'; ?>
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
                <div class="add">
                    <div>
                        <h1>ADD NEW BOOK</h1>
                        <div class="addbook">
                            <div> <input type="text" id="title" name="title" value="" required
                                    placeholder="Enter book title" /></div>
                            <div> <input type="number" id="isbn" name="isbn" value="" required
                                    placeholder="Enter book isbn" /></div>
                        </div>
                        <div class="addbook">
                            <div> <input type="text" id="author" name="author" value="" required
                                    placeholder="Enter book author" /></div>
                            <div> <input type="text" id="status" name="status" value="" required
                                    placeholder="Enter book status" /></div>
                        </div>
                        <div class="addbook">
                            <div> <input type="number" id="price" name="price" value="" required
                                    placeholder="Enter book price" /></div>
                            <div> <input type="text" id="stockLevel" name="stockLevel" value="" required
                                    placeholder="Enter book stockLevel" /></div>
                        </div>
                        <div class="addbook">
                            <div> <input type="file" id="fileUpload" /></div>
                            <div>   
                                 <select name="categorie" >
                                <option value="categories" selected="selected">categories</option>
                               
                                 <option value="other" > other</option>
                              </select>
                                </div>
                        </div>
                        <div class="addbook">
                            <div> <button type="submit">Add Book</button></div>
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="deleteupdate items2">
                <div class="showall">
                
                       
                        <div class="addbook2">
                            <div><label name="">Image</label></div>
                            <div><label name="">Title</label></div>
                            <div><label name="">Author</label></div>
                            <div><label name="">Price</label></div>
                            <div><label name="">ISBN</label></div>
                            <div><label name="">Status</label></div>
                            <div><label name="">Categories</label></div>
                            <div><label name="">StockLevel</label></div>
                            <div><label name="">Action</label></div>
                        </div>
                      
                       
                 
                    
                </div>
                <div class="showall2">
                
                       
                    <div class="addbook3">
                        
                        <div class="rowaddbook3"  ><img src="images/lovelybook.jpg" > </div>
                        <div class="rowaddbook3" ><label name="">Lovely Bones</label></div>
                        <div class="rowaddbook3"><label name="">Alice Sebold</label></div>
                        <div class="rowaddbook3"> <label name="">25$</label></div>
                        <div class="rowaddbook3"><label name="">9781600248429</label></div>
                        <div class="rowaddbook3" ><label name="">Borrwed</label></div>
                        <div class="rowaddbook3" ><label name="">History</label></div>
                        <div class="rowaddbook3"><label name="">800</label></div>

                        
                        <div class="first">
                          
                            <div>
                                <button class="firstbtn" type="button" >Edit</button>
                                                                
                                <br> <button class="secondbtn" type="button" >Delete</button>
                            </div>
                         
                            
                        </div>
                        
                  
                       
                    </div>
                  
                   
             <hr>
            
                
            </div>

            </div>





        </div>
    </div>
</form>
<script>
    function validateForm() {
  let title = document.forms["myForm"]["title"].value;
  let isbn = document.forms["myForm"]["isbn"].value;
  let author = document.forms["myForm"]["author"].value;
  let status = document.forms["myForm"]["status"].value;
  let price = document.forms["myForm"]["price"].value;
  let stockLevel = document.forms["myForm"]["stockLevel"].value;
  if (title == "") {
    alert("title must be filled out");
    return false;
  }
  if (isbn == "") {
    alert("ISBN must be filled out");
    return false;
  }
  if (author == "") {
    alert("author must be filled out");
    return false;
  }
  if (status == "") {
    alert("status must be filled out");
    return false;
  }
  if (price == "") {
    alert("price must be filled out");
    return false;
  }
  if (stockLevel == "") {
    alert("stockLevel must be filled out");
    return false;
  }
  //// status price stockLevel
}
</script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="chart1.js"></script>
</body>

</html>
