<?php
/**
 * Read a file.
 */
$file = fopen("sample/sample.txt", 'r');
// read file with size.
echo fread($file,filesize("sample/sample.txt")-10);
echo "<br>";
// read first line
$file = fopen("sample/sample.txt", 'r');
echo fgets($file);
echo "<br>";
// run till reach end of line
$file = fopen("sample/sample.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($file)) {
  echo fgets($file) . "<br>";
}
echo "<br>";
// Reads single character.
$file = fopen("sample/sample.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
// while(!feof($file)) {
  echo fgetc($file);
// }
fclose($file);


/**
 * write to a file.
 */
$file = fopen("sample/sample.txt", "a"); // "w" is to overwrite.
$txt = "ABCD EFGH";
// fwrite($file, $txt);
fclose($file);
$file = fopen("sample/sample.txt", "r");
echo fread($file, filesize("sample/sample.txt"));
fclose($file);
