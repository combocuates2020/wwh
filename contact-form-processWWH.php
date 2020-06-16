<?php
if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "combocuates2020@gmail.com";
    $email_subject = "Nueva historia clínica";

    function problem($error)
    {
        echo "Lo sentimos, se encontraron unos errores en la forma.  ";
        echo "Estos errores son los siguientes.<br><br>";
        echo $error . "<br><br>";
        echo "Favor de llenarlo correctamente.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['Name']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Message']) ||
		!isset($_POST['talla'] ||
		!isset($_POST['edad'] ||
		!isset($_POST['circunferencia'] ||
		!isset($_POST['fumador'] ||
		!isset($_POST['alcohol'] ||
		!isset($_POST['antecedentes'] ||
		!isset($_POST['alimentos'] ||
		!isset($_POST['ejercicio'] ||
		
    ) {
        problem('Lo sentimos, parece que hay un error con la forma llenada.');
    }

    $name = $_POST['Name']; // required
    $email = $_POST['Email']; // required
    $message = $_POST['Message']; // required
	$talla = $_POST['talla'];//required
	$edad = $_POST['edad'];//required
	$circunferencia = $_POST['circunferencia'];//required
	$fumador = $_POST['fumador'];//required
	$alcohol = $_POST['alcohol'];//required
	$antecedentes = $_POST['antecedentes'];//required
	$alimentos = $_POST['alimentos'];//required
	$ejercicio = $_POST['ejercicio'];//required
	
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'El nombre presentado parece no ser valido.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Detalles.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";
	$email_message .= "talla: " . clean_string($talla) . "\n";
	$email_message .= "edad: " . clean_string($talla) . "\n";
	$email_message .= "circunferencia: " . clean_string($talla) . "\n";
	$email_message .= "fumador: " . clean_string($talla) . "\n";
	$email_message .= "alcohol: " . clean_string($talla) . "\n";
	$email_message .= "antecedentes: " . clean_string($talla) . "\n";
	$email_message .= "alimentos: " . clean_string($talla) . "\n";
	$email_message .= "ejercicio: " . clean_string($talla) . "\n";
	
    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- include your success message below -->

    Gracias por la información. 

<?php
}
?>