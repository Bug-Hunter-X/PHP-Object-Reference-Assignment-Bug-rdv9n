# PHP Object Reference Assignment Bug

This repository demonstrates a common and often unexpected behavior in PHP related to object assignment.  When you assign one object to another, you're not creating a copy; you're creating a second reference to the same object in memory.  This can lead to unexpected behavior if you're not aware of this mechanism. 

The `bug.php` file shows the problematic code, while `bugSolution.php` offers a corrected approach.  Please refer to the files for detailed code examples and explanations.