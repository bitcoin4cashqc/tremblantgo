<?php
// Your MySQL database hostname.
define('db_host','localhost');
// Your MySQL database username.
define('db_user','root');
// Your MySQL database password.
define('db_pass','');
// Your MySQL database name.
define('db_name','tremblantgo');
// Your MySQL database charset.
define('db_charset','utf8');
// The secret key used for hashing purposes. Change this to a random unique string.
define('secret_key','uiby8g&^8f6785F5$d%$e54%^f7t8H8H*9g&^9g56D%$s%$s4d$#s@#3@s%Edc^Rv&Yb*U9M(ik09L0-oL0LOL(j*g^%D43s#@A3A#');
// The base URL of the PHP login system (e.g. https://example.com/phplogin/). Must include a trailing slash.
define('base_url','http://127.0.0.1/');
/* Registration */
// If enabled, the user will be redirected to the homepage automatically upon registration.
define('auto_login_after_register',false);
// If enabled, the account will require email activation before the user can login.
define('account_activation',true);
// If enabled, the user will require admin approval before the user can login.
define('account_approval',false);
/* Mail */
// If enabled, mail will be sent upon registration with the activation link, etc.
define('mail_enabled',true);
// Send mail from which address?
define('mail_from','noreply@tremblantgo.ca');
// The name of your website/business.
define('mail_name','TremblantGo.ca');
// If enabled, you will receive email notifications when a new user registers.
define('notifications_enabled',false);
// The email address to send notification emails to.
define('notification_email','notifications@example.com');
// Is SMTP server?
define('SMTP',false);
// SMTP Hostname
define('smtp_host','smtp.example.com');
// SMTP Port number
define('smtp_port',465);
// SMTP Username
define('smtp_user','user@example.com');
// SMTP Password
define('smtp_pass','secret');
?>