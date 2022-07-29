<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courier+Prime&family=Press+Start+2P&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">        
<title>
            Winners Database
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
                margin-left:25px;
            }
            tr {height:40px;}
            label {color:white; font-family:'Share Tech Mono'}
        </style>
        <script type="text/javascript">
            setInterval(glitch,1000);
            function glitch(){
            var dom=document.getElementById("eventcard");
            dom.textContent='W1NNERS';
        }
        setInterval(glitch2,2000);
        function glitch2()
        {
            var dom=document.getElementById("eventcard");
            dom.textContent='WINNERS';
        }
            </script>
    </head>
    <body>
    <h4 id="eventcard" onload="glitch();" style="font-size:20px; line-height:2em; font-size:2em;">WINNERS</h4>
    <?php
        $servername="localhost";
        $username="root";
        $dbname="FEST";
        $password="";

        $conn=new mysqli($servername,$username,$password, $dbname);
        
        $sql = "SELECT DISTINCT * FROM `Winning_Teams`";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) >= 0) {
	    echo "<table border='1'><tr><th>Serial No.</th><th>Member 1</th><th>Member 2</th><th>Member 3</th><th>Email</th><th>Phone</th>
	    <th>Score</th><th>Event Won</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
	    $i=$row["E_id"];
        echo "<tr><td>" . $row["E_id"]. "</td><td>" . $row["Mem1"]. "</td><td>" . $row["Mem2"]. "</td><td>" . $row["Mem3"]. 
	    "</td><td>" .$row["Email"].  "</td><td>" .$row["Phone"]. "</td><td>" .$row["Score"]. "</td><td>" .$row["Won"]."</td></tr>";
	     $i++;
         }
        }
	    echo "</table>";
        ?>
        <br><br><br>
    ADD WINNERS HERE:-<br><br><br>
    <form action="http://localhost/dashboard/winners.php" method="post">
        <label>Team mate 1:<input type="text" name="Mem1" style="position:relative;left:0px;"></label><br><br>
        <label>Team mate 2:<input type="text" name="Mem2" style="position:relative;left:0px;"></label><br><br>
        <label>Team mate 3:<input type="text" name="Mem3" style="position:relative;left:0px;"></label><br><br>
        <label>      Email:<input type="text" name="Email" style="position:relative;left:26px;"></label><br><br>
        <label>    Contact:<input type="text" name="Phone" style="position:relative;left:17px;"></label><br><br>
        <label>Final Score:<input type="text" name="Score" style="position:relative;left:0px;"></label><br><br>
        <label>  Event Won:<select name="Won" style="position:relative;left:0px;"><option value="" selected hidden>Select</option>
        <option value="Code-a-thon">Code-a-thon</option>
        <option value="LiveWire">LiveWire</option>
        <option value="Optimise-Prime">Optimise-Prime</option>
        <option value="Electrical Potpouri">Electrical Potpouri</option>
        <option value="Hardware Hackathon">Hardware Hackathon</option>
        <option value="Poster-Making">Poster-Making</option></select>
    </label><br><br>
    <input type="submit" style="font-family:'Share Tech Mono';">  <input type="reset" style="font-family:'Share Tech Mono';"><br><br>
    </form>
    <?php
    if(isset($_POST["Mem1"]) && isset($_POST["Mem2"]) && isset($_POST["Mem3"]) && isset($_POST["Email"])
    && isset($_POST["Phone"]) && isset($_POST["Score"]) && isset($_POST["Won"]))
    {
    $Mem1=$_POST["Mem1"];
    $Mem2=$_POST["Mem2"];
    $Mem3=$_POST["Mem3"];
    $Email=$_POST["Email"];
    $Phone=$_POST["Phone"];
    $Score=$_POST["Score"];
    $Won=$_POST["Won"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fest";

    $conn1 = new mysqli($servername, $username, $password, $dbname);

    if ($conn1->connect_error) {
     die("Connection failed: " . $conn1->connect_error);
    }
    $id=0;
    if($Won=='Code-a-thon')
    $id=1;
    if($Won=='LiveWire')
    $id=2;
    if($Won=='Optimise-Prime')
    $id=3;
    if($Won=='Electrical Potpouri')
    $id=4;
    if($Won=='Hardware Hackathon')
    $id=5;
    if($Won=='Poster-Making')
    $id=6;
    if($id>=1){
    $sql1 = "INSERT INTO `Winning_Teams` VALUES ('$id','$Mem1','$Mem2','$Mem3','$Email','$Phone','$Score','$Won')";

    if ($conn1->query($sql1) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql1 . "<br>" . $conn1->error;
    }
    }
    $conn1->close();
    }
    ?>
</body>
</html>
