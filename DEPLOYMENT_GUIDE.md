# Mathakeng Group Website - Deployment Guide

## 🚀 Ready for cPanel/Afrihost Deployment

This guide will help you deploy your Mathakeng Group website to cPanel or Afrihost hosting.

## 📁 Files to Upload

Upload the following files and folders to your hosting's `public_html` directory:

### Required Files & Folders:
```
public_html/
├── app/
├── bootstrap/
├── config/
├── database/
├── resources/
├── routes/
├── storage/
├── vendor/
├── artisan
├── composer.json
├── composer.lock
├── .htaccess (already created)
└── index.php (Laravel's public/index.php)
```

### Important: Move Public Files
The contents of the `public/` folder should be moved to the root of `public_html/`:

```
public_html/
├── build/ (from public/build/)
├── favicon.ico (from public/favicon.ico)
├── robots.txt (from public/robots.txt)
└── index.php (from public/index.php)
```

## ⚙️ Configuration Steps

### 1. Environment Configuration
Create a `.env` file in your hosting root with these settings:

```env
APP_NAME="Mathakeng Group Technology"
APP_ENV=production
APP_KEY=base64:your-generated-key
APP_DEBUG=false
APP_URL=https://yourdomain.com

LOG_CHANNEL=stack
LOG_LEVEL=error

DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite

MAIL_MAILER=smtp
MAIL_HOST=smtp.yourdomain.com
MAIL_PORT=587
MAIL_USERNAME=noreply@yourdomain.com
MAIL_PASSWORD=your-email-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="info@mathakenggroup.co.za"
MAIL_FROM_NAME="Mathakeng Group Technology"
```

### 2. Generate Application Key
Run this command in your hosting terminal or via cPanel:
```bash
php artisan key:generate
```

### 3. Set Permissions
Set the following permissions:
- `storage/` folder: 755
- `bootstrap/cache/` folder: 755
- `database/` folder: 755

### 4. Database Setup
The website uses SQLite database which is already included. No additional database setup required.

## 📧 Email Configuration

Update the email settings in your `.env` file to match your hosting provider's SMTP settings.

## 🔧 cPanel Specific Steps

1. **Upload Files**: Use File Manager to upload all files
2. **Set Document Root**: Ensure your domain points to the correct directory
3. **PHP Version**: Ensure PHP 8.1+ is selected
4. **SSL Certificate**: Enable SSL for HTTPS

## 🌐 Domain Configuration

1. Point your domain to the hosting account
2. Update `APP_URL` in `.env` to match your domain
3. Ensure SSL certificate is active

## ✅ Post-Deployment Checklist

- [ ] All files uploaded correctly
- [ ] `.env` file configured
- [ ] Application key generated
- [ ] Permissions set correctly
- [ ] SSL certificate active
- [ ] Email configuration tested
- [ ] Website loads without errors
- [ ] Contact form works

## 🆘 Troubleshooting

### Common Issues:
1. **500 Error**: Check file permissions and `.env` configuration
2. **CSS/JS not loading**: Ensure `build/` folder is in the correct location
3. **Contact form not working**: Verify email settings in `.env`

### Support:
- Check Laravel logs in `storage/logs/`
- Verify file permissions
- Test email configuration

## 📞 Contact Form Setup

The contact form will send emails to `info@mathakenggroup.co.za`. Make sure this email address is configured and accessible.

---

**Ready for deployment!** 🚀
