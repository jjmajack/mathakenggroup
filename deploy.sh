#!/bin/bash

# Mathakeng Group Website - Deployment Script
# This script prepares the website for cPanel/Afrihost deployment

echo "🚀 Preparing Mathakeng Group website for deployment..."

# Build assets for production
echo "📦 Building assets for production..."
npm run build

# Create deployment package
echo "📁 Creating deployment package..."

# Create deployment directory
mkdir -p deployment

# Copy necessary files and folders
echo "📋 Copying files..."
cp -r app deployment/
cp -r bootstrap deployment/
cp -r config deployment/
cp -r database deployment/
cp -r resources deployment/
cp -r routes deployment/
cp -r storage deployment/
cp -r vendor deployment/
cp artisan deployment/
cp composer.json deployment/
cp composer.lock deployment/

# Copy public files to root
echo "🌐 Setting up public files..."
cp public/index.php deployment/
cp public/favicon.ico deployment/
cp public/robots.txt deployment/
cp -r public/build deployment/

# Copy .htaccess
cp public/.htaccess deployment/

# Create .env template
echo "⚙️ Creating environment template..."
cat > deployment/.env.example << 'EOF'
APP_NAME="Mathakeng Group Technology"
APP_ENV=production
APP_KEY=
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
EOF

# Copy deployment guide
cp DEPLOYMENT_GUIDE.md deployment/

echo "✅ Deployment package created in 'deployment/' folder"
echo "📋 Next steps:"
echo "1. Upload all files from 'deployment/' to your hosting's public_html"
echo "2. Rename .env.example to .env and configure your settings"
echo "3. Run 'php artisan key:generate' on your hosting"
echo "4. Set proper file permissions"
echo "5. Test your website!"

echo "🎉 Ready for deployment!"
