 <?php
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list3'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list3'] as $selected){
    



                        // Load file koneksi.php
                        include "../koneksi.php";
                        
                        $query = "SELECT * FROM pengguna where id = '$selected'"; // Tampilkan semua data gambar
                        
                         // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                                     
                         $nama = $data['nama2'];
                         $email_penerima = $data['email'];
                         $pesan2 = $data['username'];
                         $pesan = $data['password'];
                         $attachment = '';
       
                         
                       
                         }
                        }
}
}
}
                         
                    
?>



<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Include librari phpmailer
//tutorial https://www.mynotescode.com/mengirim-email-localhost-atau-server-php/
include('phpmailer/Exception.php');
include('phpmailer/PHPMailer.php');
include('phpmailer/SMTP.php');
$email_pengirim = 'cs@friendsacademy.id'; // Isikan dengan email pengirim
$nama_pengirim = 'Friends Academy'; // Isikan dengan nama pengirim
$email_penerima = $email_penerima; // Ambil email penerima dari inputan form
$subjek = 'Password Akses Situs Friends Academy'; // Ambil subjek dari inputan form
$pesan = $pesan;
$pesan2 = $pesan2; // Ambil pesan dari inputan form
$attachment = $attachment; // Ambil nama file yang di upload
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'mail.friendsacademy.id';
$mail->Username = $email_pengirim; // Email Pengirim
$mail->Password = 'Boncabe@12[]'; // Isikan dengan Password email pengirim
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
// $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging
$mail->setFrom($email_pengirim, $nama_pengirim);
$mail->addAddress($email_penerima, '');
$mail->isHTML(true); // Aktifkan jika isi emailnya berupa html
// Load file content.php
ob_start();
include "content.php";
$content = ob_get_contents(); // Ambil isi file content.php dan masukan ke variabel $content
ob_end_clean();
$mail->Subject = $subjek;
$mail->Body = $content;
$mail->AddEmbeddedImage('image/logo.png', 'logo_mynotescode', 'logo.png'); // Aktifkan jika ingin menampilkan gambar dalam email
if(empty($attachment)){ // Jika tanpa attachment
    $send = $mail->send();
    if($send){ // Jika Email berhasil dikirim
        echo "<script>window.close();</script>";
    }else{ // Jika Email gagal dikirim
        echo "<h1>Password Gagal di Kirim</a>";
        // echo '<h1>ERROR<br /><small>Error while sending email: '.$mail->getError().'</small></h1>'; // Aktifkan untuk mengetahui error message
    }
}else{ // Jika dengan attachment
    $tmp = $_FILES['attachment']['tmp_name'];
    $size = $_FILES['attachment']['size'];
    if($size <= 25000000){ // Jika ukuran file <= 25 MB (25.000.000 bytes)
        $mail->addAttachment($tmp, $attachment); // Add file yang akan di kirim
        $send = $mail->send();
        if($send){ // Jika Email berhasil dikirim
            echo "<h1><script>window.close();</script>";
        }else{ // Jika Email gagal dikirim
            echo "<h1><script>window.close();</script>";
            // echo '<h1>ERROR<br /><small>Error while sending email: '.$mail->getError().'</small></h1>'; // Aktifkan untuk mengetahui error message
        }
    }else{ // Jika Ukuran file lebih dari 25 MB
        echo "<h1><script>window.close();</script></a>";
    }
}
?>