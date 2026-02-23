<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'usertype',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    /**
     * Send the email verification notification using PHPMailer.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $verificationUrl = \Illuminate\Support\Facades\URL::temporarySignedRoute(
            'verification.verify',
            \Illuminate\Support\Carbon::now()->addMinutes(60),
            ['id' => $this->getKey(), 'hash' => sha1($this->getEmailForVerification())]
        );

        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = config('mail.mailers.smtp.host', '127.0.0.1');
            $mail->SMTPAuth   = config('mail.mailers.smtp.username') ? true : false;
            $mail->Username   = config('mail.mailers.smtp.username');
            $mail->Password   = config('mail.mailers.smtp.password');
            $mail->SMTPSecure = config('mail.mailers.smtp.encryption', \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS); 
            $mail->Port       = config('mail.mailers.smtp.port', 587);

            //Recipients
            $mail->setFrom(config('mail.from.address', 'willyjuaness@gmail.com'), config('mail.from.name', 'Tedong Simpo Clothing'));
            $mail->addAddress($this->email, $this->name);

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Verifikasi Email - Tedong Simpo Clothing';
            $mail->Body    = '
                <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; border-radius: 10px;">
                    <div style="text-align: center; margin-bottom: 20px;">
                        <h2 style="color: #C41E3A;">Tedong Simpo Clothing</h2>
                    </div>
                    <p>Halo ' . $this->name . ',</p>
                    <p>Terima kasih telah mendaftar. Silakan klik tombol di bawah ini untuk memverifikasi alamat email Anda:</p>
                    <div style="text-align: center; margin: 30px 0;">
                        <a href="' . $verificationUrl . '" style="background-color: #C41E3A; color: white; padding: 12px 25px; text-align: center; text-decoration: none; display: inline-block; border-radius: 5px; font-weight: bold;">Verifikasi Email</a>
                    </div>
                    <p>Jika tombol di atas tidak berfungsi, salin dan tempel link berikut ke browser Anda:</p>
                    <p style="word-break: break-all; color: #666; font-size: 14px;">' . $verificationUrl . '</p>
                    <hr style="border: none; border-top: 1px solid #eee; margin: 20px 0;">
                    <p style="color: #888; font-size: 12px; text-align: center;">Jika Anda tidak membuat akun ini, abaikan email ini.</p>
                </div>
            ';

            $mail->send();
        } catch (\PHPMailer\PHPMailer\Exception $e) {
            \Illuminate\Support\Facades\Log::error("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
