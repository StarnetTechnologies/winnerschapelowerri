<?php
$targetFolder = '/home2/starnet1/public_html/gwinners/storage/app/public';

$linkFolder = '/home2/starnet1/public_html/gwinners/storage';

symlink($targetFolder, $linkFolder);

echo 'Done!';

?>