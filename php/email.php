<?php

require  '../vendor/autoload.php';

use Dotenv\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

$G_C_SECRET_KEY = getenv('G_C_SECRET_KEY');
$SMTP_USERNAME = getenv('SMTP_USERNAME');
$SMTP_PASSWORD = getenv('SMTP_PASSWORD');
$SMTP_HOST = getenv('SMTP_HOST');
$SMTP_PORT = getenv('SMTP_PORT');
$SMTP_SECURE = getenv('SMTP_SECURE'); #change to SSL;
$EMAIL_TO = getenv('EMAIL_TO');


if (isset($_POST["action"])) {

    $errmsg = '';

    if (isset($_POST['nama']) && $_POST['nama'] == '') {
        $errmsg .= '<p>Masukkan nama anda</p>';
    }

    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errmsg .= '<p>Masukkan email valid anda</p>';
    }

    if (isset($_POST['telepon']) && $_POST['telepon'] == '') {
        $errmsg .= '<p>Masukkan nomor telepon anda</p>';
    }

    if (isset($_POST['usia']) && $_POST['usia'] == '') {
        $errmsg .= '<p>Masukkan usia anda</p>';
    }

    if (isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] == '') {
        $errmsg .= '<p>Pilih jenis kelamin anda</p>';
    }


    if (isset($_POST['pesan']) && $_POST['pesan'] == '') {
        $errmsg .= '<p>Masukkan pesan konsultasi anda</p>';
    }

    /* Check Google captch validation */
    if (isset($_POST['g-recaptcha-response'])) {
        $error_message = validation_google_captcha($_POST['g-recaptcha-response'], $G_C_SECRET_KEY);
        if ($error_message != '') {
            $errmsg .= $error_message;
        }
    }

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon  = $_POST['telepon'];
    $usia  = $_POST['usia'];
    $jenisKelamin  = $_POST['jenis_kelamin'] == 'L' ? 'Laki - laki' : 'Perempuan';
    $pesan = $_POST['pesan'];

    $to = $EMAIL_TO;
    $subject = 'Konsultasi dari ' . $nama . ' <' . $email . '>';

    $content = file_get_contents('template/email.php');

    $var = [
        "{{nama}}" => $nama,
        "{{telepon}}" => $telepon,
        "{{usia}}" => $usia . " tahun",
        "{{jenisKelamin}}" => $jenisKelamin,
        "{{konsultasi}}" => $pesan
    ];

    foreach ($var as $key => $value) {
        $content = str_replace($key, $value, $content);
    }

    $body = $content;

    $result = '';
    // If there are no errors, send the email
    if (!$errmsg) {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Username = $SMTP_USERNAME;
        $mail->Password = $SMTP_PASSWORD;
        $mail->Host = $SMTP_HOST;
        $mail->Port = $SMTP_PORT;
        $mail->SMTPSecure = $SMTP_SECURE;
        $mail->setFrom($email, $nama);
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->addEmbeddedImage('template/images/header.jpg', 'header');
        $mail->addEmbeddedImage('template/images/curly.png', 'image-1');
        $mail->Body = $body;
        if (!$mail->send()) {
            $result = '<div class="alert alert-danger">Sepertinya ada kesalahan, silahkan refresh untuk mengulangi mengirim konsultasi</div>';
        } else {
            $result = '<div class="alert alert-success">Terima kasih. Konsultasi anda telah terkirim.</div>';
        }
    } else {
        $result = '<div class="alert alert-danger">' . $errmsg . '</div>';
    }
    echo $result;
}

/*
 * Validate google captch
 */
function validation_google_captcha($captch_response, $secret)
{

    /* Replace google captcha secret key*/
    $captch_secret_key = $secret;

    $data = array(
        'secret'   => $captch_secret_key,
        'response' => $captch_response,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    );
    $verify = curl_init();
    curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($verify, CURLOPT_POST, true);
    curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($verify);
    $response = json_decode($response, true);
    $error_message = '';
    if (isset($response['error-codes']) && !empty($response['error-codes'])) {
        $error_message = '<p>Terjadi kesalahan captcha, silahkan refresh halaman</p>';
    }
    if ($error_message != '') {
        return $error_message;
    } else {
        return '';
    }
}
