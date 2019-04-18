# Dictionary of Coding Concepts

### abstract

- Classes

    A class that may or may not have abstract methods in it. An abstract class can't be instantiated but children classes can be created off it

- Methods

    A method declared without an implementation

### "composer dumb-autoload"

For composer, it needs to be entered into the terminal after the creation of a new class.

It allows the new class and composer to work together

### declare()

PHP.net defines **declare()** as:

> used to set execution directives for a block of code.

**declare()** takes 1 of 3 available directives and applies that behavior to the block of code below it.

The 3 directives it can take are *ticks*, *encoding* or *strict_types*

### extends

Creates a child of another class

The child class has the attributes and methods of its parent class with some of its own too

### final

When added to a class it means it cannot be extended

### Objects

**Objects** are the nouns of programs. They hold properties, attributes and methods and each applies differently to every instance of the object you make

### public

Allows the class or method to be accessible from anywhere

### private

Restricts the class or method so that it can only be accessed from that class

### Statics

**Statics** are the verbs of programs. They don't have their own instances but instead have methods that can be applied to multiple classes

### Unit Testing

- The act of writing code that will test to see if a part of code is usable. 

- There are many ways to name unit tests, for example unit tests usually test a small component of code while integration tests are used for features or large parts of code

### Use

- This tells the code to run under certain parameters and it may be used to tell the entire file to run in a certain way or for a function to call upon a class in a certain way

>Ex: use PHPUnit\Framework\TestCase; tells the file to extend PHPunit and use test 

### Function

- A string of code that is able to do a certain task. 

- In this case the programmer is able to state if the function is able to be seen, what the function is named, if it returns anything, and what the function actually does.

### Class

- An object that can be created by the programmer which is just a container for all the methods, functions, variables and more.
  
### New

- This is how PHP declares if there is a new instance of an object.

> For example: there may be a class called Ball, but if one would want to instantiate the class they would have to declare a new variable and state that it would be an instance of ball with the properties that the Ball class has

### $variable

- this is how a variable is declared in PHP

### $this

- used for when talking to or creating a new instance of a variable. This is not the same as making a variable.

### method_exists()

- checks if a method exists.








