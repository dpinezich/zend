<?php
$favoriteAnimal = "cat";
echo "with curly:<br />";
echo "My favorite animals are ${favoriteAnimal}s";
echo "<br /><hr><br />";
echo "only 2 letter on cat:<br />";
echo $favoriteAnimal[2];
echo "<br /><hr><br />";
echo "Heredoc:<br />";
$religion = 'Hebrew';
$myString = <<<END_TEXT
"'I am a $religion,' he cries - and then - 'I fear the Lord the God of Heaven who hath made the sea and the dry land!'"
END_TEXT;
echo "<pre>$myString</pre>";

echo "<br /><hr><br />";
echo "Nowdoc:<br />";
$hello = "hello";
echo <<<'EOL'
$hello this is $hello
EOL;
echo "<br /><hr><br />";
echo "strlen:<br />";
$myString = "hello";
echo strlen( $myString ) . "<br />"; // Displays 5
echo "<br /><hr><br />";
echo "searching strings:<br />";
$myString = "Hello, world!";
echo strstr( $myString, "wor" ) . "<br />";                    // Displays 'world!'
echo ( strstr( $myString, "xyz" ) ? "Yes" : "No" ) . "<br />"; // Displays 'No'
echo "<br /><hr><br />";
echo "wordcount in strings:<br />";
echo str_word_count("Dies ist ein schöner Tag");