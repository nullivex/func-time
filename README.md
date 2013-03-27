func-time
=========

Date and Time functions

Usage
----
```php
$timestamp = time()-3600;
$ago = age($timestamp); //returns 1 hour

$timestamp = time()+3600
$in = future_age($timestamp); //returns 1 hour

$time = timestamp()-7200;
$hours = hours($time); //returns 2
```

Reference
----

### age($tm,$end=false)
  * $tm		Timestamp to use
  * $end	Timestamp to use as NOW otherwise defaults to time()

### future_age($tm,$end=false)
Same prototype as age() but works on a future time

### hours($tm,$inc=1)
  * $tm		The range in seconds
  * $inc	Increment eg: 2 = every half hour
Returns the number of hours to the inc power

