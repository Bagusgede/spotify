<?php 

require '../connection.php';
require '../class/playlistsclass.php';

$classDelete = new PlaylistsClass($pdo);

$id = $_GET["id"];

 $deletesongs = $classDelete->deletePlaylist($id);
    if ($deletesongs){
        header("Location: ../../index.php?page=dashboard&playlist=playlist");
 }
 else{
  echo "
  <script>
   alert('Cannot Delete Playlist');
   document.location.href = '../../index.php?page=dashboard&playlist=playlist&error=0';
  </script>
 
 ";
 }

    
?>