<?php

$heading_1 = get_field( 'heading_1' );
$heading_2 = get_field( 'heading_2' );
$heading_3 = get_field( 'heading_3' );
$description_1 = get_field( 'description_1' );
$description_2 = get_field( 'description_2' );
$description_3 = get_field( 'description_3' );




echo '<div class="accordion">';
	if( !empty( $heading_1 ) )
		echo '<h3 class="heading">' . $heading_1 . '</h3>';
	if( !empty( $description_1 ) )
		echo '<div class="description">' . $description_1 . '</div>';
    if( !empty( $heading_2 ) )
		echo '<h3 class="heading">' . $heading_2 . '</h3>';
	if( !empty( $description_2 ) )
        echo '<div class="description">' . $description_2 . '</div>';
    if( !empty( $heading_3 ) )
		echo '<h3 class="heading">' . $heading_3 . '</h3>';
	if( !empty( $description_3 ) )
		echo '<div class="description">' . $description_3 . '</div>';
echo '</div>';
?>

<script>
    var heading = document.getElementsByClassName("heading");
    var i;

    for (i = 0; i < heading.length; i++) {
        heading[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }
</script>

