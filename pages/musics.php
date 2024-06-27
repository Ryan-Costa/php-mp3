<a href="?page=albums">Voltar para os álbuns</a>

<h1>Músicas por álbum <?=$_GET['album']?></h1>


<a href="?page=new_music&album=<?=$_GET['album']?>" class="btn btn-success">Cadastrar nova música</a>
<hr>
<?php
    $album = $_GET['album'];
    $musics = getMusics($album);

    foreach($musics as $music):
?>

<div class="col-12">
    <audio src="<?=$music?>" controls></audio>
</div>

<?php
    endforeach;
?>
