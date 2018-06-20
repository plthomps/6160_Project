<!DOCTYPE html>
<html>
<head>
    <title>Place An Order</title>
</head>
<body>
    <p>You've made it.</p>
    <?php
        try{
            $db = new PDO("mysql:host=db-master.c2rtzjxij2h6.us-east-2.rds.amazonaws.com", "6160_team_member", "team6160_pwnew3452");
            $stmt = $db->prepare("select * from person");
            $stmt->execute();
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                printf("%s %s %s\n", $row["PersonID"], $row["FName"], $row["LName"]);
            }
        }
    ?>
</body>
</html>