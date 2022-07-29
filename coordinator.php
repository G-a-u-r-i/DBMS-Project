<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courier+Prime&family=Press+Start+2P&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">        
<title>
            Coordinator Database
        </title>
        <style>
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
            dom.textContent='C0-0RDINAT0R5';
        }
        setInterval(glitch2,2000);
        function glitch2()
        {
            var dom=document.getElementById("title");
            dom.textContent='CO-ORDINATORS';
        }
            </script>
</head>
        <body>
    <h4 style="font-size:30px;" id="title">CO_ORDINATORS</h4>
    <?php
        $servername="localhost";
        $username="root";
        $dbname="FEST";
        $password="";

        $conn=new mysqli($servername,$username,$password, $dbname);
        
        $sql = "SELECT * FROM `Coordinator`";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) >= 0) {
	    echo "<table border='1'><tr><th>Serial No.</th><th>Coordinator Name</th><th>Contact</th><th>Faculty-incharge</th><th>Volunteer-Incharge</th><th>
        Manages</th><th>Available Volunteers</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
	    $i=$row["C_id"];
        echo "<tr><td>" . $row["C_id"]. "</td><td>" . $row["Cname"]. "</td><td>" . $row["Contactno"]. "</td><td>" . $row["Faculty_incharge"]. 
	    "</td><td>" .$row["Volunteer_incharge"].  "</td><td>".$row["Manages"]."</td><td>".$row["Available_Volunteers"]."</td></tr>";
	     $i++;
         }
        }
	    echo "</table>";
        ?><br><br><br>
        UPDATE TABLE HERE:-<br><br><br>
        <form action="http://localhost/dashboard/coordinator.php" method="post">
            <label>Select Event:<select name="event" style="position:
            relative; left:15px;"><option value="" selected hidden >Select</option>
            <option value="Code-a-thon">Code-a-thon</option>
            <option value="LiveWire">LiveWire</option>
            <option value="Optimise-Prime">Optimise-Prime</option>
            <option value="Electrical Potpouri">Electrical Potpouri</option>
            <option value="Hardware Hackathon">Hardware hackathon</option>
            <option value="Poster-Making">Poster-Making</option></select><br><br>
            <label>Co-ordinator Name:<input type="text" name="Cname" style="position:relative;left:3px"></label><br><br>
            <label>Contact:<input type="text" name="Contact" style="position:relative;left:47px"></label><br><br>
            <label>Volunteer-Incharge:<input type="text" name="Volunteer_incharge" style="position:relative;left:00px"><br><br><br></label>
            <input type="submit" name="submit" style="font-family:'Share Tech Mono';">  <input type="reset" name="reset" style="font-family:'Share Tech Mono';">
            <br><br><br><br>
        </form>
        <?php
        if (isset($_POST["event"]) && isset($_POST["Cname"]) && isset($_POST["Contact"]) && isset($_POST["Volunteer_incharge"])){
        $event=$_POST["event"];
        $Cname=$_POST["Cname"];
        $Contact=$_POST["Contact"];
        $Volunteer=$_POST["Volunteer_incharge"];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "fest";

        $conn1 = new mysqli($servername, $username, $password, $dbname);
        if ($conn1->connect_error) {
        die("Connection failed: " . $conn1->connect_error);
        }
        if($event=="Code-a-thon")
        {
            $sql1 = "UPDATE `Coordinator` SET Cname='$Cname',Contactno='$Contact',Volunteer_incharge=
            '$Volunteer' WHERE C_id=10";
        }
        if($event=="LiveWire")
        {
            $sql1 = "UPDATE `Coordinator` SET Cname='$Cname',Contactno='$Contact',Volunteer_incharge=
            '$Volunteer' WHERE C_id=20";
        }
        if($event=="Optimise-Prime")
        {
            $sql1 = "UPDATE `Coordinator` SET Cname='$Cname',Contactno='$Contact',Volunteer_incharge=
            '$Volunteer' WHERE C_id=30";
        }
        if($event=="Electrical Potpouri")
        {
            $sql1 = "UPDATE `Coordinator` SET Cname='$Cname',Contactno='$Contact',Volunteer_incharge=
            '$Volunteer' WHERE C_id=40";
        }
        if($event=="Hardware Hackathon")
        {
            $sql1 = "UPDATE `Coordinator` SET Cname='$Cname',Contactno='$Contact',Volunteer_incharge=
            '$Volunteer' WHERE C_id=50";
        }
        if($event=="Poster-Making")
        {
            $sql1 = "UPDATE `Coordinator` SET Cname='$Cname',Contactno='$Contact',Volunteer_incharge=
            '$Volunteer' WHERE C_id=60";
        }
        if(isset($sql1))
        {
        if ($conn1->query($sql1) === TRUE) {
            echo "Record updated successfully";
            } else {
            echo "Error: " . $sql1 . "<br>" . $conn1->error;
            }
            $conn1->close();
        }
    }
        ?>
        </body>
</html>
