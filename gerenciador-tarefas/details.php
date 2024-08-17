<?php
 
 session_start();

$data = $_SESSION['tasks'][$_GET['key']];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Gerenciador de Tarefas</title>
<body>
    
<div class="details-container">
    <div class="header">
        <h1><?php echo $data['task_name'] ?></h1>
    </div>
    <div class="row">
        <div class="details">
            <dl>
                <dt>Descrição da Tarefa:</dt>
                <dd><?php echo $data['task_description'] ?></dd>        
                <dt>Data da Tarefa:</dt>
                <dd><?php echo $data['task_date'] ?></dd>
        
            </dl>
        </div>


        <div class="image">
            <img src="uploads/<?php echo $data[0]['task_image']?>" alt="imagem tarefa">
        </div>
    </div>
    <div class="footer">
        <p>Desenvolvido por @wesley_santto2</p>
    </div>
</div>

</body>
</html>
