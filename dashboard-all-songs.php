<div class="uk-container uk-background-secondary" style="padding:20px; ">
    <h1 style="color:white; font-family:'Poppins', sans-serif;">All Songs!</h1>

    <hr style="color:white;">

    <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
        <?php 
            $i = 1;
            if ($newsong):
                foreach ($newsong as $data):
        ?>
        <div>
            <div class=" uk-card uk-card-default  ">
                <div class="uk-card-media-top ">


                    <div class="uk-position-center">
                    </div>
                    <div class="uk-inline">
                        <img src="<?php echo  "assets/cover/".$data->cover; ?>" width="100%" alt="">
                        <div class="iya">
                            <a class="uk-position-center  " style="left: 50%; top: 50%"
                                uk-icon="icon:play-circle; ratio: 2;" href="#modal-sections-<?= $i ?>" uk-toggle>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body uk-padding-small ">
                    <h3 class="uk-card-title" align="center"><?php echo  $data->name; ?></h3>
                    <p align="center"><?php echo  $data->artist; ?></p>

                </div>
            </div>
        </div>

        <div id="modal-sections-<?= $i ?>" uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <div class="uk-modal-header">

                </div>
                <div class="uk-modal-body">
                    <div class="uk-card-media-top"><img src="<?php echo  "assets/cover/".$data->cover; ?>" width="100%"
                            alt="">
                    </div>
                    <p align="center"><audio src="<?php echo  "assets/songs/".$data->file; ?>" controls></audio>
                    </p>
                    <h2 class="uk-modal-title" align="center"><?php echo  $data->artist; ?> -
                        <?php echo  $data->name; ?></h2>
                </div>
                <div class="uk-modal-footer uk-text-right">
                    <a href="#modal-daftar-<?= $i ?>" class="uk-width-1-1 uk-width-1-1@m uk-button uk-button-primary"
                        uk-toggle>Add
                        To
                        Playlist</a>
                    <br><br>
                    <a href="#modal-playlist-<?= $i ?>" class="uk-width-1-1 uk-width-1-1@m uk-button uk-button-primary"
                        uk-toggle>Create
                        Playlist</a>

                </div>
                <div id="modal-playlist-<?= $i ?>" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                        <button class="uk-modal-close-default" type="button" uk-close></button>

                        <form action="include/action/add-playlist.php" method="post">
                            <h1 align="center">Create Playlist</h1>
                            <input type="hidden" value="<?php echo $data->id; ?>" name="song_id">
                            <input type="text" class="uk-input" placeholder="Name Of Playlist...." name="playlist">
                            <br><br><br>
                            <button type="submit" class=" uk-width-1-1 uk-button uk-button-primary" name="submit">Create
                                Playlist</button>
                        </form>

                    </div>
                </div>
                <div id="modal-playlist-<?= $i ?>" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                        <button class="uk-modal-close-default" type="button" uk-close></button>
                        <form action="include/action/add-to-playlist.php" method="post">
                          <p>Select Category</p>
                            <input type="hidden" value="<?php echo $data->id; ?>" name="song_id">
                          <select name="playlist_id"placeholder="Select Category"class="uk-select">
                          <?php 
                                $i = 1;
                                if ($newplaylist):
                                    foreach ($newplaylist as $data):
                            ?>
                                <option value="<?php echo $data->id; ?><?php echo $data->name; ?>"></option>

                            <?php
                                    endforeach;
                                endif;
                            ?>
                            </select>
                            <br><br>
                            <button type="submit" class=" uk-width-1-1 uk-button uk-button-primary" name="submit">Create
                                Playlist</button>
                        </form>

                    </div>
                </div>



            </div>
        </div>
        <?php 
                    $i++;
                endforeach;
            endif;
        ?>
    </div>
</div>