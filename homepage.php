<?php
    session_start();
    include_once("dbconnect.php");
    $result = mysqli_query($conn, "SELECT * FROM tbl_273046_user");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home Page after Login</title>
        <link href="calendar_themes/peach.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/c27971eb1d.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <style>
        .top_element {
            background-color: plum;
            float: left;
            clear: none;
            min-height: 120px;
            width: 100%;
            box-sizing: border-box;
            padding: 20px;
        }

        .top_element img {
            margin-right: 20px;
            display: block;
        }

        /* Navigation bar for Main Page until Settings tabs */
        .navbar {
            background-color: #9A14EC;
            color: #FFFFFF;
            text-align: center;
            float: left;
            clear: none;
            min-height: 50px;
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
        }

        /* Style tab links */
        .tablink {
            background-color: rgb(140, 126, 224);
            color: white;
            float: left;
            border: 1px solid;
            border-color: black;
            outline: none;
            cursor: pointer;
            padding: 15px 6px;
            font-size: 17px;
            width: 33.3%;
        }
        
        .tablinkmainpage {
            background-color: rgb(78, 51, 230);
            color: white;
            float: left;
            border: 1px solid;
            border-color: black;
            outline: none;
            cursor: pointer;
            padding: 15px 6px;
            font-size: 17px;
            width: 33.3%;
        }
        .tablinkmainpage:hover {
            background-color: darkmagenta;
        }
        
        .tablinkpersonaldiary {
            background-color: rgb(243, 193, 244);
            color: black;
            float: left;
            border: 1px solid;
            border-color: black;
            outline: none;
            cursor: pointer;
            padding: 15px 6px;
            font-size: 17px;
            width: 33.3%;
        }
        .tablinkpersonaldiary:hover {
            background-color: darkmagenta;
            color: white;
        }

        .tablinkmanageacc {
            background-color: rgb(140, 126, 224);
            color: white;
            float: left;
            border: 1px solid;
            border-color: black;
            outline: none;
            cursor: pointer;
            padding: 15px 6px;
            font-size: 17px;
            width: 33.3%;
        }
        .tablinkmanageacc:hover {
            background-color: darkmagenta;
            color: white;
        }
        
        .tablinkcalendar {
            background-color: rgb(183, 184, 249);
            color: black;
            float: left;
            border: 1px solid;
            border-color: black;
            outline: none;
            cursor: pointer;
            padding: 15px 6px;
            font-size: 17px;
            width: 33.3%;
        }
        .tablinkcalendar:hover {
            background-color: darkmagenta;
            color: white;
        }

        .tablinknotes {
            background-color: darkmagenta;
            color: white;
            float: left;
            border: 1px solid;
            border-color: black;
            outline: none;
            cursor: pointer;
            padding: 15px 6px;
            font-size: 17px;
            width: 33.3%;
        }
        .tablinknotes:hover {
            background-color: darkmagenta;
            color: white;
        }

        /* Style the main tab content */
        .tabcontent {
            color: white;
            display: none;
            /*padding: 320px 50px;*/
            height: 18.6cm;
        }

        /* Elements floats for Main Menu tab content */
        .float-container {  
            padding: 0px;
        }

        /* Navigation bar for subtabs */
        .navbar_2 {
            background-color: #9A14EC;
            color: #FFFFFF;
            text-align: center;
            float: left;
            clear: none;
            width: 100%;
            box-sizing: border-box;
            padding: 3px;
        }

        /* Tab content for Calendar and Notes subtabs 
        .floatchild {
            float: left;
            bottom: 3px;
            background-color: antiquewhite;
            text-align: center;
            width:32.1cm; height:11.8cm;
        } */

        /* Colours for each tab content background */
        #MainTab1 {background-color: rgb(140, 126, 224)}
        #MainTab2 {background-color: rgb(140, 126, 224)}
        #MainTab3 {background-color:rgb(140, 126, 224)}
        #CalendarTab {background-color: antiquewhite;}
        #NotesTab {background-color: antiquewhite;}

        /* Attributes for Personal Diary subtab */
        .container_diary {
            width: 100%;
            max-width: 1000px;
            height: 450px;
            margin: 0 auto;
            display: flex;
            flex-direction:column;
            background-color: #FFC9FF;
            padding: 25px 15px;
            font-size: 20px;
            font-family: sans-serif;
            display: flex;
            color: black;
            overflow: scroll;
            overflow-x: hidden;
        }
        
        textarea {
            resize:none;
            width: 100%;
            height: 200%;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            background-color: #FFC9FF;
        }
        
        .textareadiary {
            resize:none;
            width: 100%;
            height: 200%;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            background-color: yellow;
        }

        .textareadiary:disabled {
            color: red;
        }

        .line-wrap:last-of-type {
            margin-bottom: 0;
        }

        .title_wrap_diary{
            margin-bottom: 20px;
        }

        .title {
            border: none;
            border-bottom: 1px solid black;
            max-width: 350px;
            font-size: 20px;
            background-color: transparent;
        }

        .btn_diary {
            max-width: 100px; height: 2cm;
            background-color: rgb(71, 68, 215);
            border: none;
            margin-top: 20px;
            color: white;
            text-align: center;
            display: inline-block;
            font-size: 15px;
            cursor: pointer;
            position: relative;
            top: -95%;
            left: 90%;
            
        }

        .edit-btn_diary{
            background-color: green;
        }

        /* Button for search bar in Manage Account */
        .button {
          border: 1px solid black;
          color: white;
          text-align: center;
          display: inline-block;
          font-size: 18px;
          cursor: pointer;
        }
        

        .button_signup {width: 3cm; height: 0.8cm;
                        background-color: red;}

        .button_addprofile {
            width: 5cm; height: 0.8cm;
            margin-right: 30%;
            margin-top: 2%;
            background-color: rgb(71, 68, 215);
            
        }

        .abcdef {
            border: 2px solid green;
            width: 20cm; height: 1cm;
            margin-left: 32%;
        }
        
        .abcdef2 {
            margin-top: -3.25%;
        }
        
        /* Table for Manage Account content */
        table{
            background-color:thistle;
            margin-top: 220px;
            margin-left: auto;
            margin-right: auto;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        /* Popup that shall appear after clicking the "Add Profile" button */
        .container_addprofile {
            opacity: 0; pointer-events: none;
            position: absolute;
            left: 25%;
            margin-top: 225px;
            width:20cm; height:8cm;
            max-width: 100%; max-height: 100%;
            background-color:rgb(255, 234, 234);
            color:black;
            border: 2px solid black;
            text-align:center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;
        }

        .container_addprofile.show{
            opacity: 1;
            pointer-events: auto;
        }

        form {
            padding-top: 20px;
            text-align: center;
            font-size: 25px;
        }

        input{
            width: 400px;
            height: 25px;
            font-size: 20px;
        }

        /* Container for Settings tab content */
        .container_settings {
            position: absolute;
            left: 22.5%;
            top: 5.5cm;
            width:22cm; height:12cm;
            background-color:white;
            color:black;
            border: 1px solid black;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 24px;
            margin-top: 20px;
        }

        /* Colour boxes in Settings tab content */
        .boxcolor {
            width: 1.5cm; height:1.5cm;
            border: 0.5px solid;
            position: absolute;
            top: 3cm;
        }

        :root {
            --main-color: rgb(71, 68, 215);
        }

        .container_settings span {
            float: right;
            font-size: 35px;
            cursor: pointer;
        }

    </style>
    
    <body style="background-color: #FFC9FF;">

        <div class="top_element">
            <a href="homepage.php">
                <img src="pics/epss logo.PNG" width="200" height="75" style="float: left;">
            </a>
            
            <h2 style="font-family:Segoe UI;">EPlanner Scheduling System</h2>
            
            <?php
                if($_SESSION["username"]) {
            ?>
                    Welcome to EPSS, Mr <?php echo $_SESSION["username"]; ?>! <a href="logout.php" title="Click here to logout" style="font-family:Segoe UI;">Logout</a>
            <?php
                }
                else echo "<script>location.href='firstpage.html'</script>";
            ?>
            
        </div>

        <div class="navbar">
            <!-- id="defaultOpen" use to open a tab automatically -->
            <button class="tablinkmainpage"  onclick="openPage('MainTab1', this, 'rgb(71, 68, 215)')" id="defaultOpen">Main Page</button>
            <button class="tablinkpersonaldiary" onclick="openPage('MainTab2', this, 'rgb(71, 68, 215)')">Personal Diary</button>
            <button class="tablinkmanageacc" onclick="openPage('MainTab3', this, 'rgb(71, 68, 215)')">Manage Account</button>
        </div>
        

        <!-- Main Menu Tab -->
        <div id="MainTab1" class="tabcontent" style="text-align:center;">

            <!-- Subtabs -->
            <div class="navbar_2">
                <button class="tablinkcalendar" style="width: 50%" onclick="window.location.href='calendar_function.html';">
                    Calendar
                </button>
                            
                <button class="tablinknotes" style="width: 50%" onclick="window.location.href='smallnotes_page.html';">
                    Notes
                </button>
            </div>  
                  
            <!-- Space under subtabs -->  
            <div id="CalendarTab" class="floatchild" style="width:100%"></div> 
            
            <div id="NotesTab" class="floatchild" style="width:100%"></div>
                
        </div>

            
        <!-- Personal Diary Tab -->
        <div id="MainTab2" class="tabcontent" style="text-align:center;">

            <div class="container_diary">
                <div class="title_wrap_diary">
                    <span>Title: </span>
                    <input type="text" class="title" />
                </div>
                
                <div class="textareadiary">
                    <textarea></textarea>
                </div>
    
                <button class="btn_diary">
                    Save
                </button>
            </div>

        </div>


        <!-- Manage Account Tab -->
        <div id="MainTab3" class="tabcontent" style="text-align:center;">
            
            <!-- Search bar dan add profile -->
            <div class="abcdef">
                <button class="button button_addprofile" id="open_popup" onclick="pop()">Add Profile</button>
                <!--
                <form>
                    <input class="input_search_manage_account" type="text" name="search" placeholder="Search account" style="text-align:center;">
                    <button class="button button_signup" type="submit">Search</button>    
                    
                    <table>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                        </tr>
                    </table>
                </form>
                -->
            </div>    

            <!-- Popup for add profile -->
            <div class="container_addprofile" id="container_addprofile">
                <form action="register_addprofile.php" method="post">
                    Create a new profile<br><br>
                    Username: <input type="text" name="username" placeholder="Enter your username" required><br><br>
                    Email: &ensp; &ensp; <input type="email" name="reg_email" placeholder="Enter your email" required><br><br>
                    Password: <input type="password" name="reg_password" placeholder="Enter your password" required><br><br>

                    <button class="button" style="background-color:rgb(71, 68, 215); width:4cm; height:0.8cm;" type="submit">
                        Save
                    </button>
                
                    <button class="button" id="close_popup" style="background-color:red; width:4cm; height:0.8cm;" type="submit">
                        Cancel
                    </button>
                </form>
            </div>
            
            <?php 
            if (mysqli_num_rows($result) > 0){
            ?>
            <table border="1" cellspacing="7" cellpadding="5" width="750" height="100">
                <tr bgcolor="4744d7" style="color:white">    <!-- Row 1 -->
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th colspan="2">Actions</th>
                </tr>
                    <?php
                    $i=0;
                    while($row=mysqli_fetch_array($result)) {
                    ?>
                <tr style="color:black">
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["reg_email"]; ?></td>
                    <td><?php echo $row["reg_password"]; ?></td>
                    <td bgcolor="green">
                        <a href="editprofile.php?reg_email=<?php echo $row['reg_email']; ?>" style="color:white">Edit</a>
                    </td>
                    <td bgcolor="red">
                        <a href="deleteprofile.php?reg_email=<?php echo $row['reg_email']; ?>" style="color:white">Delete</a>
                    </td>
                </tr>
                    <?php
                    $i++;
                    }
                    ?>
            </table>
            <?php 
            }
            else{
                echo "No result found";
            }
            ?>
            
        </div>


        <!-- JS for main tabs -->
        <script>
            // function activated when user clicks the NORMAL TAB button
            function openPage(pageName,elmnt,color) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablink");
                for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
                }
                document.getElementById(pageName).style.display = "block";
                //elmnt.style.backgroundColor = color;
            }

            // function activated when user clicks the CALENDAR AND NOTES SUBTABS button
            function openSubtabContent(pageName,elmnt,color) {
                var j, floatchild, tablinks;
                floatchild = document.getElementsByClassName("floatchild");
                for (j = 0; j < floatchild.length; j++) {
                floatchild[j].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablink");
                for (j = 0; j < tablinks.length; j++) {
                tablinks[j].style.backgroundColor = "";
                }
                document.getElementById(pageName).style.display = "block";
                elmnt.style.backgroundColor = color;
            }
                
            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
        </script>

        <!-- JS for Personal Diary section -->
        <script>
            const lines = document.querySelectorAll("textarea");
            const button = document.getElementsByClassName("btn_diary")[0];
            let save = true;

            const saveEdit = ()=> {
                if(save){
                    button.innerHTML = 'Edit';
                    save = false;
                }
                else {
                    button.innerHTML = 'Save';
                    save = true;
                }

                button.classList.toggle("edit-btn_diary");
                lineControls();
            }    

            const lineControls = ()=> {
                lines.forEach(line => {
                    if (!save){
                        line.setAttribute("disabled", true);
                    }
                    else {
                        line.removeAttribute("disabled");
                    }
                });
            }
            
            button.addEventListener("click", saveEdit);

            window.addEventListener("resize", setLinesMaxWidth);
        </script>

        <!-- JS for popup Add Profile --> 
        <script> 
            const open_popup = document.getElementById("open_popup");
            const container_addprofile = document.getElementById("container_addprofile");
            const close_popup = document.getElementById("close_popup");

            open_popup.addEventListener('click', () => {
                container_addprofile.classList.add('show');
            });

            close_popup.addEventListener('click', () => {
                container_addprofile.classList.remove('show');
            });
        </script>
        
        <!-- JS for changing theme colour --> 
        <script>
            const colortheme = document.getElementsByClassName('boxcolor');

            let j;
            for(j=0; j < colortheme.length; j++) {
                colortheme[j].addEventListener('click', changetheme)
            }

            function changetheme() {
                let color = this.getAttribute('data-color');
                document.documentElement.style.setProperty('--color', color);
            }

        </script>
        
        
    </body>
    
</html>