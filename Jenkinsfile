pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Environment Setup') {
            steps {
                // Copy .env.example if .env doesn't exist
                sh 'cp .env.example .env || true'
                sh 'composer install --no-interaction --prefer-dist --optimize-autoloader'
                sh 'php artisan key:generate'
            }
        }

        stage('Run Tests') {
            steps {
                // Runs PHPUnit tests
                sh 'php artisan test'
            }
        }

        stage('Deploy (Local)') {
            steps {
                echo 'Starting Laravel Server...'
                // Run Laravel on port 8001 to avoid conflict with Next.js (3000)
                sh 'nohup php artisan serve --host=0.0.0.0 --port=8001 > /dev/null 2>&1 &'
            }
        }
    }
}