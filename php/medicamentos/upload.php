<?php
if(isset($_POST['hidden'])){
    $error = '';
    $total_line = '';
    session_start();

    if($_FILES['file']['name'] != ''){
        // So permite csv
        $allowed_extension = array('csv');
        $file_array = explode(".", $_FILES["file"]["name"]);
        // extensao do ficheiro inserido
        $extension = end($file_array);

        if(in_array($extension, $allowed_extension)){
            $new_file_name = rand() . '.' . $extension;
            $_SESSION['csv_file_name'] = $new_file_name;
            move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/php/medicamentos/file/' . $new_file_name);
            $file_content = file($_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/php/medicamentos/file/' . $new_file_name, FILE_SKIP_EMPTY_LINES);
            $total_line = count($file_content);
        }else{
            $error = 'Por favor escolha um ficheiro CSV';
        }
    }else{
        $error = 'Por favor selecione ficheiro';
    }

    if($error != ''){
        $output = array(
            'erro' => $error
        );
    }else{
        $output = array(
            'success' => true,
            'fileName' => $_FILES["file"]["name"],
            'total_line' => ($total_line - 1)
        );
    }
    echo json_encode($output);
}
?>
