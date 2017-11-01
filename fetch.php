<?php
//connect to database
$db = mysqli_connect("localhost", "TechGuy", "jobvinny", "search");
$output = '';
$sql = "SELECT * From Cars WHERE Car_Name LIKE '%" . $_POST["search"] . "%' ";
$result = mysqli_query($db, $sql);
if(mysqli_num_rows($result) > 0){
    $output .= '<h4 align="center">Search Result</h4>';
    $output .= '<div class="table-responsive">
                <table class="table table bordered"
                <tr>
                    <th>Car Name</th>
                    <th>Model</th>
                </tr>';
    while($row = mysqli_fetch_array($result))
    {
        $output .= '
            <tr>
                <td>'.$row["Car_Name"].'</td>
                <td>'.$row["Model"].'</td>
                ';
    }
    echo $output;
}
else{
    echo 'Data Not Found';
}
?>