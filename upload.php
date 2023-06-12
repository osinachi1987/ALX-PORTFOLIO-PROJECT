<?php

        $FileName=$_FILE['fuPdf']['name'];
        $TmpName=$_FILES['fuPdf']['tmp_name'];

        move_uploaded_file($TmpName,$FileName);

        echo("PDF Uploaded Successfully");

?>