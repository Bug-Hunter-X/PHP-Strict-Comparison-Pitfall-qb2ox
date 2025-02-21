function foo($a, $b) {
  if ($a == $b) {
    return true;
  }
  return false;
}

//This will now correctly compare the values without regard to type.
$result = foo(0, '0');
var_dump($result); // Output: bool(true)

//The solution uses the loose comparison operator (==). This operator compares the values of two operands without checking their types.  This makes it suitable for situations where you only care about value equality, regardless of type.