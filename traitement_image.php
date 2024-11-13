<?php
if (is_uploaded_file($_FILES["photo1"]["tmp_name"]))
{
    move_uploaded_file($_FILES["photo1"]["tmp_name"],$_FILES["photo1"]["name"]);
    echo "<img src=".$_FILES['photo1']['name']." >";
}