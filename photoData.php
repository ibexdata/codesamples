<?php
/**
 * Photo EXIF Data Read
 */

 $photosPath = "/Users/username/Pictures/";
 $folderContents = scandir( $photosPath );

 // Display the files found in the photos folder
 print_r( $folderContents );

 foreach( $folderContents as $fileNumber=>$photoFilename){

    // Skip the "." and ".." folder identifiers
    if( $photoFilename == "." || $photoFilename == "..") continue;
    
    // Open the file and read the EXIF data stored within the image
    $photoData = exif_read_data( $photosPath.$photoFilename);

    // Display the raw data found in the image. Use these values for processing as needed.
    print_r( $photoData);
 }
