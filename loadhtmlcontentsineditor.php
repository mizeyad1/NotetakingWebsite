<?php
$doc = new DomDocument();
$doc->loadHTMLFile('quilleditor.html');
$thediv = $doc->getElementById('text_written');
echo $thediv->textContent;
?>
