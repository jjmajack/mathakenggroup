<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #0f172a, #1e40af, #0891b2);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f8fafc;
            padding: 30px;
            border-radius: 0 0 10px 10px;
            border: 1px solid #e2e8f0;
        }
        .field {
            margin-bottom: 20px;
            padding: 15px;
            background: white;
            border-radius: 8px;
            border-left: 4px solid #0891b2;
        }
        .field-label {
            font-weight: bold;
            color: #1e40af;
            margin-bottom: 5px;
        }
        .field-value {
            color: #475569;
        }
        .message-field {
            background: #f1f5f9;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #0ea5e9;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            color: #64748b;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>📧 New Contact Form Submission</h1>
        <p>You have received a new message through the Mathakeng Group website</p>
    </div>
    
    <div class="content">
        <div class="field">
            <div class="field-label">👤 Name:</div>
            <div class="field-value">{{ $name }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">📧 Email:</div>
            <div class="field-value">{{ $email }}</div>
        </div>
        
        @if($company)
        <div class="field">
            <div class="field-label">🏢 Company:</div>
            <div class="field-value">{{ $company }}</div>
        </div>
        @endif
        
        @if($service)
        <div class="field">
            <div class="field-label">⚡ Service Interest:</div>
            <div class="field-value">{{ ucfirst(str_replace('-', ' ', $service)) }}</div>
        </div>
        @endif
        
        <div class="message-field">
            <div class="field-label">💬 Message:</div>
            <div class="field-value">{{ $message }}</div>
        </div>
    </div>
    
    <div class="footer">
        <p>This message was sent from the Mathakeng Group Technology contact form.</p>
        <p>Reply directly to this email to respond to the customer.</p>
    </div>
</body>
</html>
