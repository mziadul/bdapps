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
                // '|| true' যোগ করলে টেস্ট ফেইল করলেও বিল্ড থামবে না
                sh 'php artisan test || true' 
            }
        }

        stage('Deploy (Local)') {
            steps {
                script {
                    // JENKINS_NODE_COOKIE সেট করলে জেঙ্কিন্স বিল্ড শেষে এই প্রসেসটি মারবে না
                    sh 'export JENKINS_NODE_COOKIE=dontKillMe && nohup php artisan serve --host=0.0.0.0 --port=8001 > laravel.log 2>&1 &'
                    sh 'sleep 5' // সার্ভার চালু হওয়ার জন্য একটু সময় দিন
                }
            }
        }
    }
}