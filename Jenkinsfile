pipeline {
    agent any

    environment {
        DOCKER_IMAGE = "implementasi-api-aplikasi-sederhana"
        DOCKER_REPO = "narendradarel/implementasi-api-aplikasi-sederhana"
        DOCKER_CREDENTIALS = "dockerhub-credentials"
    }

    stages {
        stage('Checkout Source') {
            steps {
                echo ' Checking out source code...'
                git branch: 'master', changelog: false, poll: false, url: 'https://github.com/narendradarel/Implementasi-API-Aplikasi-Sederhana.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                echo ' Building Docker image...'
                script {
                    docker.build("${DOCKER_REPO}")
                }
            }
        }

        stage('Push to Docker Hub') {
            steps {
                echo ' Pushing Docker image to Docker Hub...'
                script {
                    docker.withRegistry('https://index.docker.io/v1/', "${DOCKER_CREDENTIALS}") {
                        docker.image("${DOCKER_REPO}").push("latest")
                    }
                }
            }
        }
    }

    post {
        success {
            echo ' Pipeline completed successfully!'
        }
        failure {
            echo ' Pipeline failed. Check the logs for details.'
        }
    }
}
