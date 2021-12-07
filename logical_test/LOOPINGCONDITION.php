<?php
$no = 1;
for ($no = 1; $no <= 50; $no++) {
  if ($no % 3 == 0) {
    echo "Foo";
    echo "<br>";
  } else if ($no % 5 == 0) {
    echo "Bar";
    echo "<br>";
  } elseif ($no % 3 == 0 && $no % 5 == 0) {
    echo "FooBar";
    echo "<br>";
  } else {
    echo "$no";
    echo "<br>";
  }
}
