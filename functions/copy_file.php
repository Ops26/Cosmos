<?php
if($_POST['action'] == 'call_this') {
  $file = '../php/project/template.php';
       $newfile = '../php/project/w_rename.php';
       if (!copy($file, $newfile)) {
           echo "failed to copy $file...\n";
       }
       else{
         echo "The operation was successful";
       }

    $file = '../php/project/dashboard/single-project.php';
          $newfile = '../php/project/dashboard/w_rename.php';
            if (!copy($file, $newfile)) {
                echo "failed to copy $file...\n";
            }

  mkdir("../php/project/files/w-rename");

  $file = '../php/project/files/template/data.txt';
        $newfile = '../php/project/files/w-rename/data.txt';
          if (!copy($file, $newfile)) {
              echo "failed to copy $file...\n";
          }
          $file = '../php/project/files/template/name.txt';
                $newfile = '../php/project/files/w-rename/name.txt';
                  if (!copy($file, $newfile)) {
                      echo "failed to copy $file...\n";
                  }
                  $file = '../php/project/files/template/text.txt';
                        $newfile = '../php/project/files/w-rename/text.txt';
                          if (!copy($file, $newfile)) {
                              echo "failed to copy $file...\n";
                          }

            $file = '../php/project/files/template/title.txt';
                                $newfile = '../php/project/files/w-rename/title.txt';
                                  if (!copy($file, $newfile)) {
                                      echo "failed to copy $file...\n";
                                  }

}
?>
