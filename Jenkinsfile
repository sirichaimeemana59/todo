pipeline {
    agent any
    stages {
        stage('Cleanup Workspace') {
            steps {
                echo 'Cleaning up old workspace...'
                deleteDir() // ลบไฟล์ทั้งหมดใน workspace
            }
        }
        stage('Clone Repository') {
            steps {
                echo 'Cloning repository...'
            }
        }
        stage('Build') {
            steps {
                echo 'Building...'
            }
        }
        stage('Test') {
            steps {
                echo 'Testing...'
            }
        }
        stage('Cypress Test') {
            steps {
                echo 'Running Cypress tests...'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying...'
            }
        }
    }
}
