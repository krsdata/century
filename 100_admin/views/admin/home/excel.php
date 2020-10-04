<html>
<body>
<div id="wrapper">

<?php



$row = 1;
if (($handle = fopen("csv/points.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}


$tt=array("1");

for($i=0;$i<10;$i++)
{
$tt[$i]=$i.",".($i+1).",".($i+2);
}


$list = array
(
$tt[0],
$tt[1],
$tt[2],
$tt[3]
);
$file = fopen("csv/sample_text.csv","w");
foreach ($list as $line)
{
 fputcsv($file,explode(',',$line));
}
fclose($file);


?>

</div>
</body>
</html>