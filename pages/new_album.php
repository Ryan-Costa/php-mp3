<a href="?page=albums">Voltar para os álbuns</a>
<h1>Cadastrar Novo Álbum</h1>

<form action="#" method="POST" enctype="multipart/form-data">
    <div class="form-group mt-4">
        <input type="text" name="name" placeholder="Nome:" class="form-control">
    </div>
    <div class="form-group my-4">
        <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $album = $_POST['name'];
        $path = "albums/{$album}";

        if (!is_dir($path)) {
            mkdir($path);
        }

        $file = $_FILES['image'];
        $fileInfo = explode('.', $file['name']);

        $extension = $fileInfo[1];
        $nameImage = $album . '.' . $extension;

        if(move_uploaded_file($file['tmp_name'], $path.'/'.$nameImage)) {
            header('Location: ?page=albums');
        } else {
            echo 'Falha no upload';
        }
    }
?>