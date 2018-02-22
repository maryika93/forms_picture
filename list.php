

<?php
$filesPath = './tests/';
$files = scandir($filesPath);

foreach ($files as $value)
{
    if ($value !='.' and $value !='..' )
    {
        echo '<li><a href="test_2.php?name='. $value.'">'.$value.'</a></li><br>';
    }
    else{}
}
?>
