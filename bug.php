In PHP, a common yet subtle error arises when dealing with object references and assignments.  Consider this scenario:

```php
class MyClass {
    public $value = 0;
}

$obj1 = new MyClass();
$obj2 = $obj1; // Assignment, not copying
$obj2->value = 10;

echo $obj1->value; // Outputs 10, unexpected by many
```

Because PHP uses pass-by-value for objects, `$obj2 = $obj1` does *not* create a copy of `$obj1`. Instead, `$obj2` becomes another reference to the *same* object in memory. Modifying `$obj2->value` also changes `$obj1->value`.