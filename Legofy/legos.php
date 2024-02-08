<?php
require 'vendor/autoload.php';

// The multiplier for the amount of legos on your image, or "legolution" :)
$resolutionMultiplier = 10;

// When set to true it will only use lego colors that exists in real world.
$useLegoPalette = false;

$legofy = new \RicardoFiorani\Legofy\Legofy();

// $source can be any acceptable parameter for intervention/image
// Please see http://image.intervention.io/api/make
$source = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYF1P90ZSX-J7pS1oR3uMpFI7sfjZri2W9SA&usqp=CAU';

/**
 *@var Intervention\Image\Image 
 */
$output = $legofy->convertToLego($source, $resolutionMultiplier, $useLegoPalette);

// Please see http://image.intervention.io/use/basics and http://image.intervention.io/use/http
echo $output->response();