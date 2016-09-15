<?php

 
 $query = "INSERT INTO details(Name, Email, Country, Hotel, Message, Check-in, Check-out) VALUES ('$_POST[name]','$_POST[em]','$_POST[cou]','$_POST[hot]','$_POST[msg]','$_POST[ci]','$_POST[co]')";

 
 if ( !( $database = mysql_connect( "localhost",
 "root", "" ) ) )
 die( "Could not connect to database" );

 
 if ( !mysql_select_db( "vacation", $database ) )
 die( "Could not open vacation database" );

 
 if ( !( $result = mysql_query( $query, $database ) ) ) {
 print( "Could not execute query! <br />" );
 die( mysql_error() );
 }
else
 print("success");
 ?>

 </body>
 </html>