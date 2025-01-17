To avoid this issue and create a true copy of an object, you should use PHP's `clone` keyword:

```php
class MyClass {
    public $value = 0;
}

$obj1 = new MyClass();
$obj2 = clone $obj1; // Creates a copy
$obj2->value = 10;

echo $obj1->value; // Outputs 0, as expected
echo $obj2->value; // Outputs 10
```

The `clone` keyword creates a deep copy of the object, ensuring that modifications to one object don't affect the other.  For more complex objects with nested objects or references, you may need to implement a custom cloning method to handle deep copying correctly.