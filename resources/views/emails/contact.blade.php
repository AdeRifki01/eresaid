<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #3e85f4;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
            color: #333333;
            line-height: 1.6;
        }
        .content h2 {
            color: #3e85f4;
            margin-top: 0;
        }
        .detail-item {
            margin-bottom: 15px;
            border-bottom: 1px solid #eeeeee;
            padding-bottom: 10px;
        }
        .detail-label {
            font-weight: bold;
            color: #555555;
            font-size: 14px;
        }
        .detail-value {
            font-size: 16px;
            margin-top: 5px;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #777777;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h2>Pesan Baru dari Website</h2>
        </div>
        <div class="content">
            <p>Halo Admin,</p>
            <p>Ada pesan baru yang dikirim melalui form kontak website Eresa.id Berikut adalah detailnya :</p>
            
            <div class="detail-item">
                <div class="detail-label">Nama Pengirim :</div>
                <div class="detail-value">{{ $data['name'] }}</div>
            </div>
            
            <div class="detail-item">
                <div class="detail-label">Email :</div>
                <div class="detail-value">{{ $data['email'] }}</div>
            </div>
            
            <div class="detail-item">
                <div class="detail-label">No. Telepon :</div>
                <div class="detail-value">{{ $data['phone'] ?? '-' }}</div>
            </div>
            
            <div class="detail-item">
                <div class="detail-label">Perusahaan :</div>
                <div class="detail-value">{{ $data['company'] ?? '-' }}</div>
            </div>
            
            <div class="detail-item" style="border-bottom: none;">
                <div class="detail-label">Pesan :</div>
                <div class="detail-value" style="white-space: pre-wrap; background-color: #f8f9fa; padding: 15px; border-radius: 5px; margin-top: 10px;">{{ $data['message'] }}</div>
            </div>
        </div>
        <div class="footer">
            Email ini dihasilkan otomatis dari sistem form kontak Eresa.id <br>
            Untuk membalas pesan, Anda bisa me-reply email ini langsung dan akan otomatis tertuju ke email pengirim ({{ $data['email'] }}).
        </div>
    </div>
</body>
</html>
