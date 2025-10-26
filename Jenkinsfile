pipeline {
    agent any

    environment {
        // Nama image & container untuk Docker
        IMAGE_NAME = 'laravel-api'
        CONTAINER_NAME = 'laravel_app'
    }

    stages {
        stage('Checkout') {
            steps {
                echo '🔹 Checking out source code...'
                checkout scm
            }
        }

        stage('Build Docker Image') {
            steps {
                echo '🔹 Building Docker image...'
                sh 'docker build -t ${IMAGE_NAME} .'
            }
        }

        stage('Run Containers') {
            steps {
                echo '🔹 Starting containers using Docker Compose...'
                sh 'docker compose up -d'
            }
        }

        stage('Run Migrations') {
            steps {
                echo '🔹 Running database migrations...'
                sh 'docker exec ${CONTAINER_NAME} php artisan migrate --force'
            }
        }

        stage('Run Tests (optional)') {
            steps {
                echo '🔹 Running tests...'
                sh 'docker exec ${CONTAINER_NAME} php artisan test || true'
            }
        }
    }

    post {
        success {
            echo '✅ Deployment successful!'
        }
        failure {
            echo '❌ Deployment failed.'
        }
    }
}
    