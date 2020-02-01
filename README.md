# Email Notification Library using phpMailer

This library has the function of sending e-mail using the phpmailer library. Doing this in an uncomplicated way is essential for any system.

To install the library, run the following command:

```sh
composer require isaque21/notification
```

To make use of the library, simply request or automatically load the composer, invoke a class and make a method call:

```sh
<?php

require __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$email = new Email(2, "mail.host.com", "your@email.com", "your-pass", "secure smtp (tls / ssl)", "port (587)", "from@email.com", "From name");

$email->sendEmail("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note that the entire configuration of sending email is using the magic builder method! Once, you invoked the constructor method within your application, your system is capable of causing shots.

### Developers
* [Isaque Alcantara] - Developer of this library!
* [phpMailer] - Lib to send email

License
----

MIT

** Make good use of it! **

[//]: #
[Isaque Alcantara]: <mailto: isaque21@gmail.com>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>