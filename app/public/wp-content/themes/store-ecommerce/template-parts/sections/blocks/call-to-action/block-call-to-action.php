<?php

$title = get_field( 'title' );
$description = get_field( 'description' );
$button = get_field( 'button' );
$image = get_field( 'image' );


echo '<div class="call-item">';
echo '<div class="call-text">';
	if( !empty( $title ) )
		echo '<h3 class="call-title">' . $title . '</h3>';
	if( !empty( $description ) )
		echo '<div class="portfolio-description">' . $description . '</div>';
?>
<a role="button" class="link" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"> <?php echo $button['title']; ?> </a>
</div> <!-- Closing div for call-text -->

<!-- Adding image and closing div tag -->
<?php 
    if( !empty( $image ) )
    echo wp_get_attachment_image( $image['ID'], 'thumbnail', null, array( 'class' => 'image' ) );
echo '</div>'
?>