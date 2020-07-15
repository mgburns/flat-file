<?php
?>
<div class="view-index view">
    <h1 class="view-index__title">Albums<h1>
    <ul class="view-index__list">
    <?php
    $albums = get_albums($albums_path);

    foreach ($albums as $album) :
        $album_path = str_replace('.', '', $album);
        $album_path = str_replace('/', '', $album_path);
        $album_title = extract_album_title($album_path, $file_date_format, $date_output_format);
        $album_date = extract_album_date($album_path, $file_date_format, $date_output_format);
        ?>

        <li class="view-index__item">
            <a class="view-index__item-link" href="?a=<?php echo $album_path;?>">
                <span class="view-index__album-title"><?php echo $album_title; ?></span>
                <span class="view-index__album-date"><?php echo $album_date; ?></span>
            </a>
        </li>

    <?php endforeach; ?>
    </ul>
</div>
