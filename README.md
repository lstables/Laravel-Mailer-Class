## Laravel Mailer Class

A simple Laravel mailer class

You can use this as you wish, just a simple class to help cleanup code and send mail.

The best way to use is either type-hint from your method:

````
public function store(AppMailer $mailer)
{
  // Do some stuff
  // pass the user object through, do whatever you want here
  
  // Send email
  $mailer->sendEmailConfirmationTo($user);
  return back(); // Whatever you like
}
````

or via your constructor method like so and I store in ````app/Mailers````

````
use App\Mailers\AppMailer;

 /**
 * @var AppMailer
 */
private $mailer;

/**
 * constructor.
 * @param AppMailer $mailer
 */
public function __construct(AppMailer $mailer)
{
    $this->mailer = $mailer;
}

````

Then just refer to ````$this->mailer->sendEmailConfirmationTo()```` or whever methods you have within the mailer class.
