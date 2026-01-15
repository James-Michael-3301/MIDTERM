

<?php
$char = "holy angel university Numba 1";
$count = "JAMES ALMARIEGO";
$replace = "&PHANTOM&MERCENARY&";
$other = 3301.5
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles.css">
  <title>Module 5 - Functions</title>
</head>
<body>

  <table border=2>
    <h2>Changing the Case of Characters</h2>
      <tbody>
        <tr>
          <td>Lowercase</td>
          <td><?= strtolower($char) ?></td>
        </tr>
        <tr>
          <td>Uppercase</td>
          <td><?= strtoupper($char) ?></td>
        </tr>
        <tr>
          <td>Capitalize</td>
          <td><?= ucwords($char) ?></td>
        </tr>
      </tbody>
    </table>

    <table border=2>
      <h2>Counting Characters and Words</h2>
      <tbody>
        <tr>
          <td>Number of Characters</td>
          <td><?= strlen($count) ?></td>
        </tr>
        <tr>
          <td>Number of Words</td>
          <td><?= str_word_count($count) ?></td>
        </tr>
      </tbody>
    </table>

    <table border=2>
      <h2>Removing and Replacing Characters</h2>
      <tbody>
        <tr>
          <td>Remove whitespaces from left</td>
          <td><?= ltrim($replace, "&") ?></td>
        </tr>
        <tr>
          <td>Remove whitespaces from right</td>
          <td><?= rtrim($replace, "&") ?></td>
        </tr>
        <tr>
          <td>Remove whitespace from left and right.</td>
          <td><?= trim($replace, "&") ?></td>
        </tr>
        <tr>
          <td>String replace</td>
          <td><?= str_replace("PHANTOM", "HEAVEN", $replace) ?></td>
        </tr>
        <tr>
          <td>String ireplace</td>
          <td><?= str_ireplace("phantom", "HEAVEN", $replace) ?></td>
        </tr>
        <tr>
          <td>String Repeat</td>
          <td><?= str_repeat($replace, 2) ?></td>
        </tr>
      </tbody>
    </table>

    <table border=2>
      <h2>Other Built-in Functions</h2>
      <tbody>
        <tr>
          <td>Rounds up to a whole number.</td>
          <td><?= $other ?></td>
          <td><?= round($other) ?></td>
        </tr>
        <tr>
          <td>Rounds to 3 decimal places.</td>
          <td>3301.5432156</td>
          <td><?= round(3301.5432156, 3) ?></td>
        </tr>
        <tr>
          <td>Rounds halves up to the nearest whole number.</td>
          <td><?= $other ?></td>
          <td><?= round($other, 0, PHP_ROUND_HALF_UP) ?></td>
        </tr>
        <tr>
          <td>Rounds halves down to the nearest whole number.</td>
          <td><?= $other ?></td>
          <td><?= round($other, 0, PHP_ROUND_HALF_DOWN) ?></td>
        </tr>
        <tr>
          <td>Chooses a random number between the min and max given.</td>
          <td>1-10</td>
          <td><?= mt_rand(1, 10) ?></td>
        </tr>
        <tr>
          <td>Checks if the value given is an integer or float.</td>
          <td><?= $other ?></td>
          <td><?= is_numeric($other) ?></td>
        </tr>
        <tr>
          <td>Returns the square root of the number given.</td>
          <td>24</td>
          <td><?= sqrt(64) ?></td>
        </tr>
        <tr>
          <td>Returns the base to the exponent power.</td>
          <td>2^8</td>
          <td><?= pow(2,8) ?></td>
        </tr>
        <tr>
          <td>Specifies the format of the number given.</td>
          <td>98765.43219</td>
          <td><?= number_format (98765.43219, 3, ',', ' ') ?></td>
        </tr>
      </tbody>
    </table>
</body>
</html>

