# Laravel-Mailer-Class
A simple Laravel mailer class

You can use this as you wish, just a simple class to help cleanup code and send mail.

The best way to use is either type-hint from your method:

````
public function store(AppMailer $mailer)
{
  // Do some stuff
  // pass the user object through, do whatever you want here
  
  // Send email
  $mail->sendEmailConfirmationTo($user);
  return back(); // Whatever you like
}
````