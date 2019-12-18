<html>
  <head>
    <title>PHP test palindrom</title>
  </head>
  <body>
    <?php

$text = 'Sum summud mud шалаш парус топот хрен';

function isPal($text){
        $text_1 = preg_replace( "'\s'", "", strtolower( $text ) );
        $text_2 = iconv("windows-1251", "utf-8", strrev(iconv("utf-8", "windows-1251", $text_1)));
        if ( $text_1 == $text_2 ) return true; else return false;
}

function Palindrom($text){
        if ( !isPal( $text ) ) {
                $words = explode( " ", $text );
                $max = "";

                for ($i = 0; $i < count($words); $i++) 
                if ( isPal( $words[$i] ) && strlen( $words[$i] ) > strlen( $max ) ) $max = $words[$i];
                if ( $max ) return $max; else return $text[0];
        } else return $text;
}

echo Palindrom($text);

?>
  </body>
</html>
