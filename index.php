<html>
    <head>
        <title>
            Email system
        </title>
        <link href="style/w3.css" type="text/css" rel="stylesheet">
        <link href="style/custom.css" type="text/css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    </head>
    <body>
        <button onclick="topFunction()" id="myBtn" title="Go to top" class="w3-button w3-xlarge w3-circle w3-black">^</button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction();
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>

        <div id="top">
            <div id="head">
                <a class="hom" href="index.php">The Electronic Mail</a>
                        <?php
                $a = $_GET[x];
                if ($a == 1) {
                    echo"<span>User Already exists</span>";
                }
                if ($a == 2) {
                    echo"<span>User created.Please Login</span>";
                }
                ?>
            </div>
            <div id="f1c">
                <div style="padding:10px">
                    <form id="frm1" name=frm1 action=log.php>
                        <div>
                            <label for="fn">First Name </label>
                            <input type ="text" name ="t1" id ="fn" placeholder="username" required>
                        </div>
                        <div>
                            <label for = "pwd">Password </label>
                            <input type = "password" name="t2" id="pwd" placeholder = "Password" required>
                        </div> 
                        <div  id = "btn">
                            <button type="submit" > Login </button>
                        </div> 
                    </form>
                </div>
            </div>
            <?php
            $a = $_GET [x];
            if ($a == 3) {
                echo "<font color=red ><center>*User Id/Password invalid</center></font>";
            }
            ?>
            <div id="tag">
                <a class="hom" href="#frm2">Not a Member yet?</a>
            </div>
        </div>
        <div id="frm2">
            <form name=frm2 action=sign.php>

                Sign up here<br>
                <div>
                    <label for="t1">First Name</label>
                    <input id="t1" type=text name=t1>
                </div>
                <div>
                    <label for="t2">Last Name</label>
                    <input id="t2" type=text name=t2>
                </div>
                <div>
                    <label for="t3">User Id</label>
                    <input id="t3" type=text name=t3>
                </div>
                <div>
                    <label for="t4">Password</label>
                    <input id="t4" type=password name=t4>
                </div>
                <div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Male
                    <input id="t5" type=radio name=t5 value=Male>

                    Female 
                    <input id="f" type=radio name=t5 value=Female>
                </div>
                <div>
                    <label for="t6">Enter Mobile</label>
                    <input type=text name=t6 maxlength=10>
                </div>
                <div>
                    <label for="t7">Enter Pin</label>
                    <input type=text name=t7 maxlength=6>
                </div>
                <div>
                    <input type=submit><input type=reset>                        
                </div>
            </form>
        </div>
    </body>
</html>