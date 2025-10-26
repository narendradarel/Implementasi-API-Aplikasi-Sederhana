pipeline {
    agent any

    environment {
        APP_NAME = "implementasi-api-aplikasi-sederhana"
        DOCKER_IMAGE = "narendradarel/implementasi-api-aplikasi-sederhana"
        DOCKER_TAG = "latest"
        DOCKER_CREDENTIALS = "dockerhub-credentials"
        PHP_VERSION = "8.2"
        NODE_VERSION = "20"
    }

    options {
        timestamps()
    }
//test
    stages {

        stage('Checkout Source') {
            steps {
                echo '📦 Checking out source code...'
                checkout scm
            }
        }

        stage('Install Dependencies') {
            steps {
                echo '⚙️ Installing Composer & NPM dependencies...'
                sh '''
                    docker run --rm \
                        -v $(pwd):/app \
                        -w /app \
                        composer install --no-interaction --prefer-dist --optimize-autoloader

                    docker run --rm \
                        -v $(pwd):/app \
                        -w /app \
                        node:${NODE_VERSION} \
                        sh -c "npm install && npm run build || echo 'No build script found'"
                '''
            }
        }

        stage('Laravel Key Generate & Cache') {
            steps {
                echo '🔑 Generating Laravel key and optimizing config...'
                sh '''
                    cp .env.example .env || true
                    docker run --rm \
                        -v $(pwd):/app \
                        -w /app \
                        laravelsail/php${PHP_VERSION}-cli \
                        php artisan key:generate
                    docker run --rm \
                        -v $(pwd):/app \
                        -w /app \
                        laravelsail/php${PHP_VERSION}-cli \
                        php artisan config:cache
                '''
            }
        }

        stage('Build Docker Image') {
            steps {
                echo '🐳 Building Docker image...'
                sh '''
                    docker build -t ${DOCKER_IMAGE}:${DOCKER_TAG} .
                '''
            }
        }

        stage('Push to Docker Hub') {
            steps {
                echo '🚀 Pushing Docker image to Docker Hub...'
                withCredentials([usernamePassword(credentialsId: "${DOCKER_CREDENTIALS}", usernameVariable: 'DOCKER_USER', passwordVariable: 'DOCKER_PASS')]) {
                    sh '''
                        echo $DOCKER_PASS | docker login -u $DOCKER_USER --password-stdin
                        docker push ${DOCKER_IMAGE}:${DOCKER_TAG}
                        docker logout
                    '''
                }
            }
        }

        stage('Deploy (Optional)') {
            steps {
                echo '⚡ You can add deployment steps here (e.g., run docker-compose up -d)'
            }
        }
    }

    post {
        success {
            echo '✅ Pipeline completed successfully!'
        }
        failure {
            echo '❌ Pipeline failed. Check logs above.'
        }
        always {
            echo '🧹 Cleaning up...'
            sh 'docker system prune -f || true'
        }
    }
}
