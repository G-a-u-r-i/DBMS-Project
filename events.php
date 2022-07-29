<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courier+Prime&family=Press+Start+2P&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">        
<title>
            Events Database
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
        </style>
        <script type="text/javascript">
            setInterval(glitch,1000);
            function glitch(){
            var dom=document.getElementById("eventcard");
            dom.textContent='E8ENTS';
        }
        setInterval(glitch2,2000);
        function glitch2()
        {
            var dom=document.getElementById("eventcard");
            dom.textContent='EVENTS';
        }
            </script>
    </head>
    <body>
        <h4 id="eventcard" onload="glitch();" style="font-size:20px; line-height:2em; font-size:2em;">EVENTS</h4>
        <?php
        $servername="localhost";
        $username="root";
        $dbname="FEST";
        $password="";

        $conn=new mysqli($servername,$username,$password, $dbname);
        
        $sql = "SELECT * FROM `Events_table`";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
	    echo "<table border='1'><tr><th>Serial No.</th><th>Name</th><th>Club</th><th>Date</th><th>Incharge</th><th>Fees</th>
	    <th>Venue</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
	    $i=$row["E_id"];
        echo "<tr><td>" . $row["E_id"]. "</td><td>" . $row["Ename"]. "</td><td>" . $row["Club"]. "</td><td>" . $row["Dat"]. 
	    "</td><td>" .$row["Faculty_incharge"].  "</td><td>" .$row["Fees"]. "</td><td>" .$row["Venue"]. "</td>";
	     $i++;
         }
        }
	    echo "</table>";
        ?>
    </body>
</html>
