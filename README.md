

## inicio de proyecto

<p> se instalo laravel 11 con forify </p>

<p> se configuro Mailhog ver .env </p>

## Nuevo codigo sobre envio de correo a tomar en cuenta
<p>   Mail::raw('Mensaje de prueba de RH Management', function(Message $message){

          $message->to('teste@gmail.com')
          ->subject('Bienvenido a RH Management')
          ->from('rh@rhmanagement.com');
     });
</p>

## renombrar master to main en github
<p>git branch -m master main</p>

