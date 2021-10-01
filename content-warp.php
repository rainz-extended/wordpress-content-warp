<?php
    /* DEFINE CONTENT ID */
    $content_id = 236;
    /* TRY TI GET CONTENT AND HANDLE ERROR PREVENT FATAL PHP ERROR */
    try {
        /* GET CONTENT BY POST ID */
        $content_data = get_post($content_id, ARRAY_A);
        $content_post_data = $content_data['post_content'];
        /* Export content to destination */
        echo $content_post_data;
    } catch ( Exception $e ) {
        /* IF NO CONTENT THIS SECTION WITH BE ACTIVATE AUTOMATIC */
        echo "post's id is not valid";
    }
?>