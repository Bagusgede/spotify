<?php



session_start();

require '../connection.php';
require '../class/playlistclass.php';


$classPlaylist = new PlaylistClass($pdo);

$playlist_id = $_POST['playlist_id'];
$song_id = $_POST['song_id'];

$addtoplaylist = $classPlaylist->addtoplaylist($playlist_id,$song_id);
if ($addtoplaylist){
    header("Location: ../../index.php?page=dashboard&playlist=playlist");
    
}
else {
    header("Location:../../admin/index.php??page=dashboard&playlist=playlist&error=0");
}


?>