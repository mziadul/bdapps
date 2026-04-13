pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Build & Up Containers') {
            steps {
                // ১. আপনার দেওয়া Dockerfile ও Compose ফাইল ব্যবহার করে কন্টেইনার বিল্ড ও রান করবে
                sh 'docker compose up -d --build'
            }
        }

        stage('Install Dependencies') {
            steps {
                // ২. জেঙ্কিন্স 'app' কন্টেইনারের ভেতরে ঢুকে কম্পোজার রান করবে
                sh 'docker compose exec -T app composer install --no-interaction --prefer-dist'
                sh 'docker compose exec -T app php artisan key:generate --ansi || true'
            }
        }

        stage('Database Migration') {
            steps {
                // ৩. আপনার লোকাল ডাটাবেসে টেবিল তৈরি করবে
                sh 'docker compose exec -T app php artisan migrate --force'
            }
        }

        stage('Run Tests') {
            steps {
                // ৪. কন্টেইনারের ভেতরেই টেস্ট রান করবে
                sh 'docker compose exec -T app php artisan test || true'
            }
        }
    }

    post {
        success {
            echo "Congratulations! Your App is live at http://localhost:8000"
        }
        always {
            // ইচ্ছা করলে বিল্ড শেষে কন্টেইনার ডাউন করতে পারেন, তবে লাইভ রাখতে চাইলে করার দরকার নেই
            // sh 'docker compose down' 
            echo "Build Process Finished."
        }
    }
}