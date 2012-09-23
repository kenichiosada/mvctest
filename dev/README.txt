/**
 *  How to include classes by utilizing autoloader & namespace
 */

// The statement below needs to be included at least once. (ideally on entry point or boostrap file)

$autoloader = new Autoload();
$autoloader->register();

// Creating instance of a specific class.

Let's say you have a directory structure laid out like below.

root/
  lib/
    controller/
      admin/
        post.php
    model/
    view/

When working with a directory structure like this, you can use two patterns of statements to create an instance of a class. 


Pattern 1
------------------------------------ 

$admin = new Controller\Admin\Post();
                |         |     |
                |         |     |--> Actual File name.
                |         |
                |         |--> Sub directory under 'controller' dir.
                |
                |--> Directory under 'lib' dir.

On "lib/controller/admin/post.php":

- Add "namespace Controller\Admin;" at the beginning.
- Class name is "Post".


Pattern 2
------------------------------------

$admin = new Controller\Admin_Post();
                |         |     |
                |         |     |--> Actual File name.
                |         |
                |         |--> Sub directory under 'controller' dir.
                |
                |--> Directory under 'lib' dir.

On "lib/controller/admin/post.php":

- Add "namespace Controller;" at the beginning.
- Class name is "Admin_Post".

/**
 *  Creating an object of a class, which is located under different namespace from the current document. 
 */

For example, you have a directory structure like below. 

root/
  lib/
    controller/
    	post.php
    model/
    view/
    connection.php

And Post class looks like this. 

namespace Controller;
class Post {}

If you wanna create an object of Connection class, you have to include \(backslash) in front of the class name. 
ex) $connection = new \Connection();
