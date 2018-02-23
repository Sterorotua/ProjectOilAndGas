<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ro', array (
  'validators' => 
  array (
    'This value should be false.' => 'Această valoare ar trebui să fie falsă (false).',
    'This value should be true.' => 'Această valoare ar trebui să fie adevărată (true).',
    'This value should be of type {{ type }}.' => 'Această valoare ar trebui să fie de tipul {{ type }}.',
    'This value should be blank.' => 'Această valoare ar trebui sa fie goală.',
    'The value you selected is not a valid choice.' => 'Valoarea selectată nu este o opțiune validă.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Trebuie să selectați cel puțin {{ limit }} opțiune.|Trebuie să selectați cel puțin {{ limit }} opțiuni.|Trebuie să selectați cel puțin {{ limit }} de opțiuni',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Trebuie să selectați cel mult {{ limit }} opțiune.|Trebuie să selectați cel mult {{ limit }} opțiuni.|Trebuie să selectați cel mult {{ limit }} de opțiuni.',
    'One or more of the given values is invalid.' => 'Una sau mai multe dintre valorile furnizate sunt invalide.',
    'This field was not expected.' => 'Acest câmp nu era de aşteptat.',
    'This field is missing.' => 'Acest câmp este lipsă.',
    'This value is not a valid date.' => 'Această valoare nu reprezintă o dată validă.',
    'This value is not a valid datetime.' => 'Această valoare nu reprezintă o dată și oră validă.',
    'This value is not a valid email address.' => 'Această valoare nu reprezintă o adresă de e-mail validă.',
    'The file could not be found.' => 'Fișierul nu a putut fi găsit.',
    'The file is not readable.' => 'Fișierul nu poate fi citit.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fișierul este prea mare ({{ size }} {{ suffix }}). Dimensiunea maximă permisă este {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Tipul fișierului este invalid ({{ type }}). Tipurile permise de fișiere sunt ({{ types }}).',
    'This value should be {{ limit }} or less.' => 'Această valoare ar trebui să fie cel mult {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Această valoare este prea lungă. Ar trebui să aibă maxim {{ limit }} caracter.|Această valoare este prea lungă. Ar trebui să aibă maxim {{ limit }} caractere.|Această valoare este prea lungă. Ar trebui să aibă maxim {{ limit }} de caractere.',
    'This value should be {{ limit }} or more.' => 'Această valoare ar trebui să fie cel puțin {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Această valoare este prea scurtă. Ar trebui să aibă minim {{ limit }} caracter.|Această valoare este prea scurtă. Ar trebui să aibă minim {{ limit }} caractere.|Această valoare este prea scurtă. Ar trebui să aibă minim {{ limit }} de caractere.',
    'This value should not be blank.' => 'Această valoare nu ar trebui să fie goală.',
    'This value should not be null.' => 'Această valoare nu ar trebui să fie nulă (null).',
    'This value should be null.' => 'Această valoare ar trebui să fie nulă (null).',
    'This value is not valid.' => 'Această valoare nu este validă.',
    'This value is not a valid time.' => 'Această valoare nu reprezintă o oră validă.',
    'This value is not a valid URL.' => 'Această valoare nu reprezintă un URL (link) valid.',
    'The two values should be equal.' => 'Cele două valori ar trebui să fie egale.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fișierul este prea mare. Mărimea maximă permisă este {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fișierul este prea mare.',
    'The file could not be uploaded.' => 'Fișierul nu a putut fi încărcat.',
    'This value should be a valid number.' => 'Această valoare nu reprezintă un număr valid.',
    'This file is not a valid image.' => 'Acest fișier nu este o imagine validă.',
    'This is not a valid IP address.' => 'Această valoare nu este o adresă IP validă.',
    'This value is not a valid language.' => 'Această valoare nu reprezintă o limbă corectă.',
    'This value is not a valid locale.' => 'Această valoare nu reprezintă un dialect (o limbă) corect.',
    'This value is not a valid country.' => 'Această valoare nu este o țară validă.',
    'This value is already used.' => 'Această valoare este folosită deja.',
    'The size of the image could not be detected.' => 'Mărimea imaginii nu a putut fi detectată.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Lățimea imaginii este prea mare ({{ width }}px). Lățimea maximă permisă este de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Lățimea imaginii este prea mică ({{ width }}px). Lățimea minimă permisă este de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Înălțimea imaginii este prea mare ({{ height }}px). Înălțimea maximă permisă este de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Înălțimea imaginii este prea mică ({{ height }}px). Înălțimea minimă permisă este de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Această valoare trebuie să fie parola curentă a utilizatorului.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Această valoare trebuie să conțină exact {{ limit }} caracter.|Această valoare trebuie să conțină exact {{ limit }} caractere.|Această valoare trebuie să conțină exact {{ limit }} de caractere.',
    'The file was only partially uploaded.' => 'Fișierul a fost încărcat parțial.',
    'No file was uploaded.' => 'Nu a fost încărcat nici un fișier.',
    'No temporary folder was configured in php.ini.' => 'Nu este configurat nici un director temporar in php.ini.',
    'Cannot write temporary file to disk.' => 'Nu a fost posibilă scrierea fișierului temporar pe disk.',
    'A PHP extension caused the upload to fail.' => 'O extensie PHP a prevenit încărcarea cu succes a fișierului.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Această colecție trebuie să conțină cel puțin {{ limit }} element.|Această colecție trebuie să conțină cel puțin {{ limit }} elemente.|Această colecție trebuie să conțină cel puțin {{ limit }} de elemente.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Această colecție trebuie să conțină cel mult {{ limit }} element.|Această colecție trebuie să conțină cel mult {{ limit }} elemente.|Această colecție trebuie să conțină cel mult {{ limit }} de elemente.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Această colecție trebuie să conțină {{ limit }} element.|Această colecție trebuie să conțină {{ limit }} elemente.|Această colecție trebuie să conțină {{ limit }} de elemente.',
    'Invalid card number.' => 'Numărul card invalid.',
    'Unsupported card type or invalid card number.' => 'Tipul sau numărul cardului nu sunt valide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Acesta nu este un cod IBAN (International Bank Account Number) valid.',
    'This value is not a valid ISBN-10.' => 'Această valoare nu este un cod ISBN-10 valid.',
    'This value is not a valid ISBN-13.' => 'Această valoare nu este un cod ISBN-13 valid.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Această valoare nu este un cod ISBN-10 sau ISBN-13 valid.',
    'This value is not a valid ISSN.' => 'Această valoare nu este un cod ISSN valid.',
    'This value is not a valid currency.' => 'Această valoare nu este o monedă validă.',
    'This value should be equal to {{ compared_value }}.' => 'Această valoare trebuie să fie egală cu {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Această valoare trebuie să fie mai mare de {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Această valoare trebuie să fie mai mare sau egală cu {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Această valoare trebuie identică cu {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Această valoare trebuie să fie mai mică de {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Această valoare trebuie să fie mai mică sau egală cu {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Această valoare nu trebuie să fie egală cu {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Această valoare nu trebuie să fie identică cu {{ compared_value_type }} {{ compared_value }}.',
    'This form should not contain extra fields.' => 'Aceast formular nu ar trebui să conțină câmpuri suplimentare.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Fișierul încărcat a fost prea mare. Vă rugăm sa încărcați un fișier mai mic.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Token-ul CSRF este invalid. Vă rugăm să trimiteți formularul incă o dată.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'A apărut o eroare de autentificare.',
    'Authentication credentials could not be found.' => 'Informațiile de autentificare nu au fost găsite.',
    'Authentication request could not be processed due to a system problem.' => 'Sistemul nu a putut procesa cererea de autentificare din cauza unei erori.',
    'Invalid credentials.' => 'Date de autentificare invalide.',
    'Cookie has already been used by someone else.' => 'Cookieul este folosit deja de altcineva.',
    'Not privileged to request the resource.' => 'Permisiuni insuficiente pentru resursa cerută.',
    'Invalid CSRF token.' => 'Tokenul CSRF este invalid.',
    'Digest nonce has expired.' => 'Tokenul temporar a expirat.',
    'No authentication provider found to support the authentication token.' => 'Nu a fost găsit nici un agent de autentificare pentru tokenul specificat.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesiunea nu mai este disponibilă, a expirat sau suportul pentru cookieuri nu este activat.',
    'No token could be found.' => 'Tokenul nu a putut fi găsit.',
    'Username could not be found.' => 'Numele de utilizator nu a fost găsit.',
    'Account has expired.' => 'Contul a expirat.',
    'Credentials have expired.' => 'Datele de autentificare au expirat.',
    'Account is disabled.' => 'Contul este dezactivat.',
    'Account is locked.' => 'Contul este blocat.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Actualizează grupul',
    'group.show.name' => 'Numele grupului',
    'group.new.submit' => 'Creează grup',
    'group.flash.updated' => 'Grupul a fost actualizat',
    'group.flash.created' => 'Grupul a fost creat',
    'group.flash.deleted' => 'Grupul a fost șters',
    'security.login.username' => 'Nume de utilizator',
    'security.login.password' => 'Parola',
    'security.login.remember_me' => 'Ține-mă minte',
    'security.login.submit' => 'Autentificare',
    'profile.show.username' => 'Numele de utilizator',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizează',
    'profile.flash.updated' => 'Profilul a fost actualizat',
    'change_password.submit' => 'Schimba parola',
    'change_password.flash.success' => 'Parola a fost schimbata',
    'registration.check_email' => 'Un email a fost trimis catre %email%. Contine un link de activare pe care trebuie sa il accesezi pentru a-ti activa contul.',
    'registration.confirmed' => 'Felicitari %username%, contul tau a fost confirmat.',
    'registration.back' => 'Inapoi la pagina de la care ai venit.',
    'registration.submit' => 'Inregistreaza-te',
    'registration.flash.user_created' => 'Utilizatorul a fost creat cu succes',
    'registration.email.subject' => 'Bine ai venit %username%!',
    'registration.email.message' => 'Salut %username%!

Pentru a-ti valida contul - acceseaza %confirmationUrl%

Toate cele bune,
Echipa
',
    'resetting.password_already_requested' => 'Deja s-a facut o cerere in ultimele 24 de ore pentru parola acestui utilizator.',
    'resetting.check_email' => 'A fost trimit un email catre %email%. Contine un link pe care trebuie sa il accesezi pentru a-ti reseta parola.',
    'resetting.request.invalid_username' => 'Numele de utilizator sau adresa de email "%username%" nu exista.',
    'resetting.request.username' => 'Numele de utilizator sau adresa de email',
    'resetting.request.submit' => 'Reseteaza parola',
    'resetting.reset.submit' => 'Schimba parola',
    'resetting.flash.success' => 'Parola a fost resetata cu succes',
    'resetting.email.subject' => 'Resetare parola',
    'resetting.email.message' => 'Salut %username%!

Pentru a-ti reseta parola - acceseaza %confirmationUrl%

Toate cele bune,
Echipa
',
    'layout.logout' => 'Logout',
    'layout.login' => 'Autentificare',
    'layout.register' => 'Înregistrare',
    'layout.logged_in_as' => 'Logat ca %username%',
    'form.group_name' => 'Numele grupului',
    'form.username' => 'Nume de utilizator',
    'form.email' => 'Email',
    'form.current_password' => 'Parola curenta',
    'form.password' => 'Parola',
    'form.password_confirmation' => 'Verificare parola',
    'form.new_password' => 'Noua parola',
    'form.new_password_confirmation' => 'Verificare parola',
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
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
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
    'Bad credentials.' => 'Invalid username or password.',
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated',
    'group.flash.created' => 'The group has been created',
    'group.flash.deleted' => 'The group has been deleted',
    'security.login.username' => 'Username',
    'security.login.password' => 'Password',
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
    'resetting.request.username' => 'Username or email address',
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
    'form.group_name' => 'Group name',
    'form.username' => 'Username',
    'form.email' => 'Email',
    'form.current_password' => 'Current password',
    'form.password' => 'Password',
    'form.password_confirmation' => 'Repeat password',
    'form.new_password' => 'New password',
    'form.new_password_confirmation' => 'Repeat new password',
  ),
  'messages' => 
  array (
    'coresphere_console.headline.index' => 'Console',
    'coresphere_console.working_directory' => 'Working directory',
    'coresphere_console.environment' => 'Environment',
    'coresphere_console.welcome_message' => 'Type %command% to get a list of all commands.',
    'coresphere_console.loading' => 'Loading...',
    'coresphere_console.suggestion_head' => 'Did you mean:',
    'coresphere_console.empty_response' => 'Complete!',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
