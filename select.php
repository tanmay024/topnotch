<?php

 
 $query = "SELECT * FROM details";

 
 if ( !( $database = mysql_connect( "localhost",
 "root", "" ) ) )
 die( "Could not connect to database" );

 
 if ( !mysql_select_db( "vacation", $database ) )
 die( "Could not open demo database" );

 if ( !( $result = mysql_query( $query, $database ) ) ) {
 print( "Could not execute query! <br />" );
 die( mysql_error() );
 }
 ?>

 <h3 style = "color: blue">
 Search Results</h3>

 <table border = "1" cellpadding = "3" cellspacing = "2"
 style = "background-color: #ADD8E6">

 <?php

 
 for ( $counter = 0;
 $row = mysql_fetch_row( $result );
 $counter++ ){

 
 print( "<tr>" );

 foreach ( $row as $key => $value )
 print( "<td>$value</td>" );

 print( "</tr>" );
 }

 mysql_close( $database );
 ?>
 </table>

 <br />Your search yielded <strong>
 <?php print( "$counter" ) ?> results.<br /><br /></strong>

 <h5>Please email comments to
<a href = "mailto:tanmaysharma024@gmail.com">
Technocrat, Inc.
 </a>
 </h5>

 </body>
 </html>