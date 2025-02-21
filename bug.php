function foo($a, $b) {
  if ($a === $b) {
    return true;
  }
  return false;
}

//This will cause a bug because of the strict comparison.
$result = foo(0, '0');
var_dump($result); // Output: bool(false)

//The bug is caused by using the strict comparison operator (===). The strict comparison operator checks if two operands are equal in both value and type. In this case, 0 is an integer and '0' is a string. Although their values are equal, their types are different, so the strict comparison returns false.

//To fix this, you should use the loose comparison operator (==) which does not check for type.
function foo($a, $b) {
  if ($a == $b) {
    return true;
  }
  return false;
}

$result = foo(0, '0');
var_dump($result); // Output: bool(true)