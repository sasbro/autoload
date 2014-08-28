PHP - Class Autoloader
----------------------

> #### Setup the Autoloader  

```php

	require_once 'lib/autoloader.class.php';  
	spl_autoload_register(array(  
    	'Autoloader',  
    	'load'  
	));  
```

> #### Customize  

Customize the path to your classes relative from the autoloader.class  
Just leave ``` $path ``` empty (``` $path = '';``` , ``` $path = false;```), if your classes stored in the same folder as the autoloader class.

**File:**	*autoloader.class.php*  
```php

	private static $extension = '.class.php';  
	private static $path = '/class';
```  

> #### Usage  

Just initialize your Class without *include* or *require*  
```php

	$class_x = new ClassX();
```

> #### Result

If the class has been found and implemented, you´re done.  
If not, you will see an error message.  
```php

	Code: 10
	Error: The initialised Class is not available!
	File: \autoloader\lib\autoloader.class.php
	Line: 19
	Trace: #0 [internal function]: Autoloader::load('ClassXx') #1 \autoloader\index.php(8): spl_autoload_call('ClassXx') #2 {main}
```

