<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courier+Prime&family=Press+Start+2P&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">        
<title>
            Volunteer Database
        </title>
        <style>
            tr{height:45px;}
            body{
                background-color: black;
                width:94%;
                height:100%;
                color:white;
                text-align:center;
                font-family:'Press Start 2P';
            }
            table {
                font-family:'Share Tech Mono';
                text-align:center;
                color:yellow;
                width:94%;
                align:center;
                height:60%;
                margin-left:25px;
            }
            label {color:white; font-family:'Share Tech Mono'}
        </style>
        <script type="text/javascript">
            setInterval(glitch,1000);
            function glitch(){
            var dom=document.getElementById("title");
            dom.textContent='V8LUNTE3RS';
        }
        setInterval(glitch2,2000);
        function glitch2()
        {
            var dom=document.getElementById("title");
            dom.textContent='VOLUNTEERS';
        }
            </script>
</head>
        <body>
    <h4 style="font-size:30px;" id="title">VOLUNTEERS</h4>
    <?php
        $servername="localhost";
        $username="root";
        $dbname="FEST";
        $password="";

        $conn=new mysqli($servername,$username,$password, $dbname);
        
        $sql = "SELECT * FROM `Volunteer` ORDER BY Cid";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) >= 0) {
	    echo "<table border='1'><tr><th>ID.</th><th>Volunteer Name</th><th>Department</th><th>Email</th><th>Phone</th><th>Volunteering For</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
	    $i=$row["Vid"];
        echo "<tr><td>" . $row["Vid"]. "</td><td>" . $row["Vname"]. "</td><td>" . $row["Dept"]. "</td><td>" . $row["Email"]. 
	    "</td><td>" .$row["Phno"].  "</td><td>".$row["Coming_for"]."</td></tr>";
	     $i++;
         }
        }
	    echo "</table>";
        ?><br><br><br>
        ADD VOLUNTEERS:-<br><br><br>
        <form action="http://localhost/dashboard/volunteer.php" method="POST">
            <label>Volunteer Name:<input type="text" name="Vname" style="position:
            relative; left:17px;"></label><br><br>
            <label>Branch:<input type="text" name="Dept" style="position:
            relative; left:52px;"></label><br><br>
            <label>Email:<input type="text" name="Email" style="position:
            relative; left:57px;"></label><br><br>
            <label>Phone:<input type="text" name="phno" style="position:
            relative; left:57px;"></label><br><br>
            <label>Volunteering For:<select name="event" style="position:
            relative; left:0px;"><option value="" selected hidden>Select</option>
            <option value="Code-a-thon">Code-a-thon</option>
            <option value="LiveWire">LiveWire</option>
            <option value="Optimise-Prime">Optimise-Prime</option>
            <option value="Electrical Potpouri">Electrical Potpouri</option>
            <option value="Hardware Hackathon">Hardware hackathon</option>
            <option value="Poster-Making">Poster-Making</option></select></label><br><br>
            <input type="submit" name="submit" style="font-family:'Share Tech Mono';">  <input type="reset" name="reset" style="font-family:'Share Tech Mono';">
            <br><br><br><br>
        </form>
        <?php
        if (isset($_POST["Vname"]) && isset($_POST["Dept"]) && isset($_POST["Email"]) && isset($_POST["phno"])&&isset($_POST["event"]))
        {
            $Vname="";$Dept="";$Email="";$Phno="";$event="";
        $Vname=$_POST["Vname"];
        $Dept=$_POST["Dept"];
        $Email=$_POST["Email"];
        $Phno=$_POST["phno"];
        $event=$_POST["event"];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "fest";
        
        $conn1 = new mysqli($servername, $username, $password, $dbname);
        if ($conn1->connect_error) {
        die("Connection failed: " . $conn1->connect_error);
        }
        $Cid=0;
        if($event=='Code-a-thon')
        $Cid=10;
        if($event=='LiveWire')
        $Cid=20;
        if($event=='Optimise-Prime')
        $Cid=30;
        if($event=='Electrical Potpouri')
        $Cid=40;
        if($event=='Hardware Hackathon')
        $Cid=50;
        if($event=='Poster-Making')
        $Cid=60;
        $result = mysqli_query($conn1,"SELECT MAX(Vid) AS max_vid FROM Volunteer");
        
        $row = mysqli_fetch_array($result);
        $id=(int)($row["max_vid"])+1;
        if($Vname!="" && $Dept!="" && $Email!=""&& $Phno!="" && $event!=""){
        $sql1="INSERT INTO `Volunteer` VALUES ('$id','$Vname','$Dept','$Email','$Phno','$Cid','$event')";}
        if(isset($sql1))
        {
        if ($conn1->query($sql1) === TRUE) {
            echo "Record updated successfully";
            } else {
            echo "Error: " . $sql1 . "<br>" . $conn1->error;
            }
        }
        $conn1->close();
        }
        ?>
    </body>
</html>
