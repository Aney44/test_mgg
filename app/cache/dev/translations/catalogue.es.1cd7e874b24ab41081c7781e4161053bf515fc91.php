<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'fos_user.username.already_used' => 'El nombre de usuario ya está en uso',
    'fos_user.username.blank' => 'Por favor, ingrese un nombre de usuario',
    'fos_user.username.short' => '[-Inf,Inf]El nombre de usuario es demasiado corto',
    'fos_user.username.long' => '[-Inf,Inf]El nombre de usuario es demasiado largo',
    'fos_user.email.already_used' => 'La dirección de correo ya está en uso',
    'fos_user.email.blank' => 'Por favor, ingrese una dirección de correo',
    'fos_user.email.short' => '[-Inf,Inf]La dirección de correo es demasiado corta',
    'fos_user.email.long' => '[-Inf,Inf]La dirección de correo es demasiado larga',
    'fos_user.email.invalid' => 'La dirección de correo no es válida',
    'fos_user.password.blank' => 'Por favor, ingrese una contraseña',
    'fos_user.password.short' => '[-Inf,Inf]La contraseña es demasiado corta',
    'fos_user.password.mismatch' => 'La contraseña ingresada no coincide',
    'fos_user.new_password.blank' => 'Por favor, ingrese una nueva contraseña',
    'fos_user.new_password.short' => '[-Inf,Inf]La nueva contraseña es demasiado corta',
    'fos_user.current_password.invalid' => 'La contraseña ingresada no es válida',
    'fos_user.group.blank' => 'Por favor, ingrese un nombre',
    'fos_user.group.short' => '[-Inf,Inf]El nombre es demasiado corto',
    'fos_user.group.long' => '[-Inf,Inf]El nombre es demasiado largo',
    'post.blank_summary' => 'No es posible dejar el resumen del artículo vacío.',
    'post.too_short_content' => 'El contenido del artículo es demasiado corto ({{ limit }} caracteres como mínimo)',
    'comment.blank' => 'No es posible dejar el contenido del comentario vacío.',
    'comment.too_short' => 'El comentario es demasiado corto ({{ limit }} caracteres como mínimo)',
    'comment.too_long' => 'El comentario es demasiado largo ({{ limit }} caracteres como máximo)',
    'comment.is_spam' => 'El contenido del comentario se considera spam.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Nombre de usuario o Contraseña inválido',
    'group.edit.submit' => 'Actualizar grupo',
    'group.show.name' => 'Nombre de grupo',
    'group.new.submit' => 'Crear grupo',
    'group.flash.updated' => 'El grupo ha sido actualizado',
    'group.flash.created' => 'El grupo ha sido creado',
    'group.flash.deleted' => 'El grupo ha sido borrado',
    'security.login.username' => 'Nombre de usuario:',
    'security.login.password' => 'Contraseña:',
    'security.login.remember_me' => 'Recordar',
    'security.login.submit' => 'Entrar',
    'profile.show.username' => 'Nombre de usuario',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizar usuario',
    'profile.flash.updated' => 'El perfil ha sido actualizado',
    'change_password.submit' => 'Cambiar contraseña',
    'change_password.flash.success' => 'La contraseña se ha cambiado con éxito',
    'registration.check_email' => 'Se ha enviado un email a %email%. Contiene un enlace de activación que debes presionar para activar tu cuenta.',
    'registration.confirmed' => 'Felicidades %username%, tu cuenta está ahora confirmada.',
    'registration.back' => 'Volver a la página original.',
    'registration.submit' => 'Registrar',
    'registration.flash.user_created' => 'El usuario se ha creado satisfactoriamente',
    'registration.email.subject' => 'Bienvenido %username%!',
    'registration.email.message' => 'Hola %username%!

Para completar la validación de tu cuenta - por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'resetting.password_already_requested' => 'La contraseña para este usuario ya ha sido solicitada dentro de las 24 horas.',
    'resetting.check_email' => 'Un email ha sido enviado a %email%. Contiene un enlace de activación que debes presionar para restablecer tu contraseña.',
    'resetting.request.invalid_username' => 'El usuario o dirección de correo "%username%" no existe.',
    'resetting.request.username' => 'Nombre de usuario:',
    'resetting.request.submit' => 'Restablecer contraseña',
    'resetting.reset.submit' => 'Cambiar contraseña',
    'resetting.flash.success' => 'La contraseña se ha cambiado con éxito',
    'resetting.email.subject' => 'Bienvenido %username%!',
    'resetting.email.message' => 'Hola %username%!

Para restablecer tu contraseña - por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'layout.logout' => 'Salir',
    'layout.login' => 'Entrar',
    'layout.register' => 'Registrar',
    'layout.logged_in_as' => 'Identificado como %username%',
    'form.group_name' => 'Nombre de grupo:',
    'form.username' => 'Nombre de usuario:',
    'form.email' => 'Email:',
    'form.current_password' => 'Contraseña actual:',
    'form.password' => 'Contraseña:',
    'form.password_confirmation' => 'Repita la contraseña:',
    'form.new_password' => 'Nueva contraseña:',
    'form.new_password_confirmation' => 'Repita la contraseña:',
  ),
  'messages' => 
  array (
    'note' => 'NOTA',
    'tip' => 'TRUCO',
    'not_available' => 'No disponible',
    'mit_license' => 'Licencia MIT',
    'title.homepage' => 'Bienvenido/a a la aplicación <strong>Symfony Demo</strong>',
    'title.source_code' => 'Código fuente utilizado para mostrar esta página',
    'title.controller_code' => 'Código del controlador',
    'title.twig_template_code' => 'Código de la plantilla Twig',
    'title.login_help' => 'Prueba cualquiera de los siguientes usuarios',
    'title.login' => 'Acceso seguro',
    'title.post_list' => 'Listado de artículos',
    'title.edit_post' => 'Editar artículo #%id%',
    'title.add_comment' => 'Añadir un comentario',
    'title.comment_error' => 'Se ha producido un error al publicar tu comentario',
    'action.show' => 'Ver',
    'action.show_code' => 'Ver código',
    'action.edit' => 'Editar',
    'action.edit_post' => 'Editar artículo',
    'action.save' => 'Guardar cambios',
    'action.delete_post' => 'Borrar artículo',
    'action.create_post' => 'Crear un nuevo artículo',
    'label.create_post' => 'Crear artículo',
    'action.back_to_list' => 'Volver al listado de artículos',
    'action.publish_comment' => 'Publicar comentario',
    'action.sign_in' => 'Iniciar sesión',
    'action.browse_app' => 'Acceder a la aplicación',
    'action.browse_admin' => 'Acceder al backend',
    'label.title' => 'Título',
    'label.author' => 'Autor',
    'label.author_email' => 'Email del autor',
    'label.username' => 'Nombre de usuario',
    'label.password' => 'Contraseña',
    'label.role' => 'Rol',
    'label.content' => 'Contenido',
    'label.summary' => 'Resumen',
    'label.published_at' => 'Publicado el',
    'label.actions' => 'Acciones',
    'title.post_new' => 'Nuevo artículo',
    'action.edit_contents' => 'Editar contenidos',
    'menu.post_list' => 'Listado de artículos',
    'menu.back_to_blog' => 'Volver al blog',
    'menu.homepage' => 'Inicio',
    'menu.admin' => 'Backend',
    'menu.logout' => 'Desconectarse',
    'post.to_publish_a_comment' => 'para publicar un comentario',
    'post.num_comments' => '%count% comentario|%count% comentarios',
    'post.commented_on' => 'comentado el',
    'post.no_comments' => 'Se el primero en añadir un comentario en este artículo.',
    'help.app_description' => 'Esta <strong>aplicación demo</strong> ha sido programada con el framework Symfony para mostrar la forma recomendada de programar aplicaciones Symfony.',
    'help.show_code' => 'Pulsa este botón para ver el código fuente del <strong>controlador</strong> y de la <strong>plantilla</strong> utilizados para crear esta página.',
    'help.browse_app' => 'Acceder a la <strong>parte pública</strong> de la aplicación de demostración.',
    'help.browse_admin' => 'Acceder a la <strong>parte de administración</strong> de la aplicación de demostración.',
    'help.login_users' => 'Prueba a acceder con estos usuarios',
    'help.role_user' => 'usuario normal',
    'help.role_admin' => 'administrador',
    'help.reload_fixtures' => 'Si ninguno de estos usuarios funciona, carga de nuevo los datos de la aplicación ejecutando el siguiente comando en tu consola:',
    'help.add_user' => 'Si quieres crear nuevos usuarios, ejecuta este otro comando:',
    'help.more_information' => 'Para más información, consulta la <a href="http://symfony.com/doc">documentación de Symfony</a>.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'fos_user.username.already_used' => 'The username is already used',
    'fos_user.username.blank' => 'Please enter a username',
    'fos_user.username.short' => '[-Inf,Inf]The username is too short',
    'fos_user.username.long' => '[-Inf,Inf]The username is too long',
    'fos_user.email.already_used' => 'The email is already used',
    'fos_user.email.blank' => 'Please enter an email',
    'fos_user.email.short' => '[-Inf,Inf]The email is too short',
    'fos_user.email.long' => '[-Inf,Inf]The email is too long',
    'fos_user.email.invalid' => 'The email is not valid',
    'fos_user.password.blank' => 'Please enter a password',
    'fos_user.password.short' => '[-Inf,Inf]The password is too short',
    'fos_user.password.mismatch' => 'The entered passwords don\'t match',
    'fos_user.new_password.blank' => 'Please enter a new password',
    'fos_user.new_password.short' => '[-Inf,Inf]The new password is too short',
    'fos_user.current_password.invalid' => 'The entered password is invalid',
    'fos_user.group.blank' => 'Please enter a name',
    'fos_user.group.short' => '[-Inf,Inf]The name is too short',
    'fos_user.group.long' => '[-Inf,Inf]The name is too long',
    'post.blank_summary' => 'Give your post a summary!',
    'post.too_short_content' => 'Post content is too short ({{ limit }} characters minimum)',
    'comment.blank' => 'Please don\'t leave your comment blank!',
    'comment.too_short' => 'Comment is too short ({{ limit }} characters minimum)',
    'comment.too_long' => 'Comment is too long ({{ limit }} characters maximum)',
    'comment.is_spam' => 'The content of this comment is considered spam.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Invalid username or password',
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated',
    'group.flash.created' => 'The group has been created',
    'group.flash.deleted' => 'The group has been deleted',
    'security.login.username' => 'Username:',
    'security.login.password' => 'Password:',
    'security.login.remember_me' => 'Remember me',
    'security.login.submit' => 'Login',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Update',
    'profile.flash.updated' => 'The profile has been updated',
    'change_password.submit' => 'Change password',
    'change_password.flash.success' => 'The password has been changed',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.',
    'registration.confirmed' => 'Congrats %username%, your account is now activated.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Register',
    'registration.flash.user_created' => 'The user has been created successfully',
    'registration.email.subject' => 'Welcome %username%!',
    'registration.email.message' => 'Hello %username%!

To finish activating your account - please visit %confirmationUrl%

Regards,
the Team.
',
    'resetting.password_already_requested' => 'The password for this user has already been requested within the last 24 hours.',
    'resetting.check_email' => 'An email has been sent to %email%. It contains a link you must click to reset your password.',
    'resetting.request.invalid_username' => 'The username or email address "%username%" does not exist.',
    'resetting.request.username' => 'Username or email address:',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Logout',
    'layout.login' => 'Login',
    'layout.register' => 'Register',
    'layout.logged_in_as' => 'Logged in as %username%',
    'form.group_name' => 'Group name:',
    'form.username' => 'Username:',
    'form.email' => 'Email:',
    'form.current_password' => 'Current password:',
    'form.password' => 'Password:',
    'form.password_confirmation' => 'Repeat password:',
    'form.new_password' => 'New password:',
    'form.new_password_confirmation' => 'Repeat new password:',
  ),
  'messages' => 
  array (
    'note' => 'NOTE',
    'tip' => 'TIP',
    'not_available' => 'Not available',
    'mit_license' => 'MIT License',
    'title.homepage' => 'Welcome to the <strong>Symfony Demo</strong> application',
    'title.source_code' => 'Source code used to render this page',
    'title.controller_code' => 'Controller code',
    'title.twig_template_code' => 'Twig template code',
    'title.login' => 'Secure Sign in',
    'title.post_list' => 'Post List',
    'title.edit_post' => 'Edit post #%id%',
    'title.add_comment' => 'Add a comment',
    'title.comment_error' => 'There was an error publishing your comment',
    'action.show' => 'Show',
    'action.show_code' => 'Show code',
    'action.edit' => 'Edit',
    'action.edit_post' => 'Edit post',
    'action.save' => 'Save changes',
    'action.delete_post' => 'Delete post',
    'action.create_post' => 'Create a new post',
    'label.create_post' => 'Create post',
    'action.back_to_list' => 'Back to the post list',
    'action.publish_comment' => 'Publish comment',
    'action.sign_in' => 'Sign in',
    'action.browse_app' => 'Browse application',
    'action.browse_admin' => 'Browse backend',
    'label.title' => 'Title',
    'label.author' => 'Author',
    'label.author_email' => 'Author email',
    'label.username' => 'Username',
    'label.password' => 'Password',
    'label.role' => 'Role',
    'label.content' => 'Content',
    'label.summary' => 'Summary',
    'label.published_at' => 'Published at',
    'label.actions' => 'Actions',
    'title.post_new' => 'Post creation',
    'action.edit_contents' => 'Edit contents',
    'menu.post_list' => 'Post list',
    'menu.back_to_blog' => 'Back to blog',
    'menu.homepage' => 'Homepage',
    'menu.admin' => 'Backend',
    'menu.logout' => 'Logout',
    'post.to_publish_a_comment' => 'to publish a comment',
    'post.num_comments' => '%count% comment|%count% comments',
    'post.commented_on' => 'commented on',
    'post.no_comments' => 'Be the first to comment on this post.',
    'help.app_description' => 'This is a <strong>demo application</strong> built in the Symfony Framework to illustrate the recommended way of developing Symfony applications.',
    'help.show_code' => 'Click on this button to show the source code of the <strong>Controller</strong> and <strong>template</strong> used to render this page.',
    'help.browse_app' => 'Browse the <strong>public section</strong> of the demo application.',
    'help.browse_admin' => 'Browse the <strong>admin backend</strong> of the demo application.',
    'help.login_users' => 'Try either of the following users',
    'help.role_user' => 'regular user',
    'help.role_admin' => 'administrator',
    'help.reload_fixtures' => 'If these users don\'t work, reload application fixtures by running this command from the terminal:',
    'help.add_user' => 'If you want to create new users, run this other command:',
    'help.more_information' => 'For more information, check out the <a href="http://symfony.com/doc">Symfony doc</a>.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;