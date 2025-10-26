# 🌐 Mathakeng Group Website - Simple Deployment

## 📁 What You Need to Upload

Since this is just a website, here's what you need to upload to your hosting:

### 1. Core Website Files
Upload these files to your `public_html` folder:

```
public_html/
├── index.php (the main entry point)
├── .htaccess (for URL routing)
├── build/ (compiled CSS/JS assets)
├── favicon.ico
├── robots.txt
└── app/ (Laravel app folder)
    ├── Http/Controllers/
    └── ...
├── bootstrap/ (Laravel bootstrap)
├── config/ (Laravel config)
├── database/ (SQLite database)
├── resources/views/ (HTML templates)
├── routes/ (URL routing)
├── storage/ (Laravel storage)
├── vendor/ (PHP dependencies - install via Composer)
├── artisan (Laravel command line)
├── composer.json
└── composer.lock
```

## 🚀 Simple Deployment Steps

### Step 1: Upload Files
1. Upload all the files above to your hosting's `public_html` directory
2. **Skip the vendor folder** - we'll install it on the server

### Step 2: Install Dependencies on Server
SSH into your hosting or use cPanel Terminal and run:
```bash
composer install --no-dev --optimize-autoloader
```

### Step 3: Set Permissions
```bash
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
```

### Step 4: Configure Environment
Create a `.env` file in your hosting root:
```env
APP_NAME="Mathakeng Group Technology"
APP_ENV=production
APP_KEY=base64:your-key-here
APP_DEBUG=false
APP_URL=https://yourdomain.com

MAIL_MAILER=smtp
MAIL_HOST=smtp.yourdomain.com
MAIL_PORT=587
MAIL_USERNAME=noreply@yourdomain.com
MAIL_PASSWORD=your-email-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="info@mathakenggroup.co.za"
MAIL_FROM_NAME="Mathakeng Group Technology"
```

### Step 5: Generate App Key
```bash
php artisan key:generate
```

## ✅ That's It!

Your website will be live with:
- ✅ All pages working
- ✅ Contact form sending emails
- ✅ Responsive design
- ✅ Professional layout

## 📧 Contact Form
The contact form will send emails to `info@mathakenggroup.co.za` - make sure this email is set up on your hosting.

---

**Simple and effective!** 🎉
