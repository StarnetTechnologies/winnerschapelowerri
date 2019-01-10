<?php
$targetFolder = '/home/y71ul2b2argw/public_html/winners/winners-beta/storage/app/public';

$linkFolder = '/home/y71ul2b2argw/public_html/winners/winners-beta/public/storage';

symlink($targetFolder, $linkFolder);

echo 'Symblink created!';

?>