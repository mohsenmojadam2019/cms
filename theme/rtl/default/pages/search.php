<?php

	foreach( $check_forms as $search_record ){
		
		echo '<p><a href="./?m=product&id='.$search_record['id'].'">'.$search_record['title'].'</a><br/>
		'.$pageData->chop_str( $search_record['body'] ).'
		</p>';
		
	}

?>