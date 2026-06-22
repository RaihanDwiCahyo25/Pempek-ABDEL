<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .header {
            background-color: #dc2626;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background-color: white;
            padding: 20px;
        }
        .button {
            display: inline-block;
            background-color: #dc2626;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            margin: 20px 0;
            font-weight: bold;
        }
        .footer {
            background-color: #f0f0f0;
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #666;
            border-radius: 0 0 8px 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Reset Password</h1>
        </div>
        
        <div class="content">
            <p>Halo @if($userName) {{ $userName }} @else Pengguna @endif,</p>
            
            <p>Kami menerima permintaan untuk mereset password akun Anda di Admin Panel Warung Abdel. Jika Anda tidak melakukan permintaan ini, abaikan email ini.</p>
            
            <p>Klik tombol di bawah untuk mereset password Anda:</p>
            
            <center>
                <a href="{{ $resetLink }}" class="button">Reset Password</a>
            </center>
            
            <p>Atau salin link berikut di browser Anda:</p>
            <p style="word-break: break-all; background-color: #f0f0f0; padding: 10px; border-radius: 4px;">
                {{ $resetLink }}
            </p>
            
            <p style="color: #666; font-size: 14px;"><strong>Catatan:</strong> Link ini hanya berlaku selama 15 menit. Jika link sudah expired, silakan request link baru.</p>
            
            <p>Terima kasih,<br>Tim Admin Panel Warung Abdel</p>
        </div>
        
        <div class="footer">
            <p>Email ini dikirim otomatis oleh sistem Admin Panel Warung Abdel. Jangan balas email ini.</p>
        </div>
    </div>
</body>
</html>
