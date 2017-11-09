<?php

$billet = getBillet($id);
$commentaires = getCommentaires($id);
include_once(VUE . 'vueBillet.php');

