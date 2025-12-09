pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                // Usar la configuración de SCM del job
                checkout scm
            }
        }

        stage('SonarQube Analysis') {
            steps {
                withSonarQubeEnv('SonarQube-Local') {
                    sh 'sonar-scanner -Dsonar.projectKey=login-vulnerable -Dsonar.sources=. -Dsonar.php.version=8.1'
                }
            }
        }

        stage('Quality Gate') {
            steps {
                timeout(time: 10, unit: 'MINUTES') {
                    waitForQualityGate abortPipeline: false
                }
            }
        }
    }
}


            }
        }
    }
}
