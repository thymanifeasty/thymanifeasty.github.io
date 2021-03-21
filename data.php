<?php
$file = 'fruit.txt';

//Open the file to get existing content
$current = file_get_contents($file);

$fruit = explode("|", $current);

//Append a new person to the file
if(isset($_GET['1'])) {
    if($_GET['1'] == 0)
        $fruit[0] ++;
    else
        $fruit[1] ++;
    $current = "";
    for($i = 0; $i < count($fruit); $i++) {
        $current .= $fruit[$i];

        if ($i < (count($fruit) - 1))
            $current .= "|";
    }
}


//Write the contents back to the file
file_put_contents($file, $current)

?>

<html>
    <head>
        <script type = "text/javascript" src="https://www.google.come/isapi"></script>
            <script type = "text/javascript" src="https://www.google.come/isapi"></script>
        <script type = "text/javascript">
            google.load("visualization, "i", {packages: ["corechart]});
            google.setOnLoadCallback(drawChart);
            function drawChart () {
                var data = google.visualization.arrayToDataTable([
                    ["Fruit", "Choice of Fruit"],
                    ["Bananas", <?=$fruit[0]?>],
                    ["Oranges", <?=$fruit[1]?>]
                ]);

                var options = (
                    title: "Chosen Fruit",
                    is3D: true,
                );

                var chart = new google.visualization.PiEChart(document.getElementById("piechart_3d"));
                chart.draw(data,options);
            }
        </script>
    </head>
    <body>
        <div id = "piechart_3d" style = "width: 900px; height: 500px;"></div>
    </body>
</html>
