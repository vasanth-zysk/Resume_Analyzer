<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PossibleSkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('possible_skills')->delete();

        $skills = [
            // Programming Languages
            ['name' => 'PHP', 'category' => 'Programming Languages'],
            ['name' => 'JavaScript', 'category' => 'Programming Languages'],
            ['name' => 'Python', 'category' => 'Programming Languages'],
            ['name' => 'Java', 'category' => 'Programming Languages'],
            ['name' => 'C++', 'category' => 'Programming Languages'],
            ['name' => 'C#', 'category' => 'Programming Languages'],
            ['name' => 'Ruby', 'category' => 'Programming Languages'],
            ['name' => 'Swift', 'category' => 'Programming Languages'],
            ['name' => 'TypeScript', 'category' => 'Programming Languages'],
            ['name' => 'Kotlin', 'category' => 'Programming Languages'],
            ['name' => 'Go', 'category' => 'Programming Languages'],
            ['name' => 'Rust', 'category' => 'Programming Languages'],
            ['name' => 'Scala', 'category' => 'Programming Languages'],
            ['name' => 'R', 'category' => 'Programming Languages'],
            ['name' => 'MATLAB', 'category' => 'Programming Languages'],
            
            // Frameworks & Libraries
            ['name' => 'Laravel', 'category' => 'Frameworks'],
            ['name' => 'React', 'category' => 'Frameworks'],
            ['name' => 'Angular', 'category' => 'Frameworks'],
            ['name' => 'Vue.js', 'category' => 'Frameworks'],
            ['name' => 'Django', 'category' => 'Frameworks'],
            ['name' => 'Spring', 'category' => 'Frameworks'],
            ['name' => 'Express.js', 'category' => 'Frameworks'],
            ['name' => 'ASP.NET', 'category' => 'Frameworks'],
            ['name' => 'Flask', 'category' => 'Frameworks'],
            ['name' => 'Ruby on Rails', 'category' => 'Frameworks'],
            ['name' => 'Next.js', 'category' => 'Frameworks'],
            ['name' => 'Nest.js', 'category' => 'Frameworks'],
            ['name' => 'Symfony', 'category' => 'Frameworks'],
            ['name' => 'CodeIgniter', 'category' => 'Frameworks'],
            ['name' => 'FastAPI', 'category' => 'Frameworks'],
            ['name' => 'jQuery', 'category' => 'Frameworks'],
            
            // Databases
            ['name' => 'MySQL', 'category' => 'Databases'],
            ['name' => 'PostgreSQL', 'category' => 'Databases'],
            ['name' => 'MongoDB', 'category' => 'Databases'],
            ['name' => 'SQLite', 'category' => 'Databases'],
            ['name' => 'Redis', 'category' => 'Databases'],
            ['name' => 'Oracle', 'category' => 'Databases'],
            ['name' => 'Microsoft SQL Server', 'category' => 'Databases'],
            ['name' => 'Cassandra', 'category' => 'Databases'],
            ['name' => 'Firebase', 'category' => 'Databases'],
            ['name' => 'DynamoDB', 'category' => 'Databases'],
            ['name' => 'MariaDB', 'category' => 'Databases'],
            
            // DevOps & Cloud
            ['name' => 'Git', 'category' => 'DevOps'],
            ['name' => 'Docker', 'category' => 'DevOps'],
            ['name' => 'Kubernetes', 'category' => 'DevOps'],
            ['name' => 'Jenkins', 'category' => 'DevOps'],
            ['name' => 'AWS', 'category' => 'Cloud'],
            ['name' => 'Azure', 'category' => 'Cloud'],
            ['name' => 'Google Cloud', 'category' => 'Cloud'],
            ['name' => 'Terraform', 'category' => 'DevOps'],
            ['name' => 'Ansible', 'category' => 'DevOps'],
            ['name' => 'CircleCI', 'category' => 'DevOps'],
            ['name' => 'Travis CI', 'category' => 'DevOps'],
            
            // Frontend
            ['name' => 'HTML', 'category' => 'Frontend'],
            ['name' => 'CSS', 'category' => 'Frontend'],
            ['name' => 'SASS/SCSS', 'category' => 'Frontend'],
            ['name' => 'Bootstrap', 'category' => 'Frontend'],
            ['name' => 'Tailwind CSS', 'category' => 'Frontend'],
            ['name' => 'Material UI', 'category' => 'Frontend'],
            ['name' => 'Chakra UI', 'category' => 'Frontend'],
            ['name' => 'Redux', 'category' => 'Frontend'],
            ['name' => 'Webpack', 'category' => 'Frontend'],
            ['name' => 'Vite', 'category' => 'Frontend'],
            ['name' => 'GraphQL', 'category' => 'Frontend'],
            ['name' => 'WebSocket', 'category' => 'Frontend'],
            ['name' => 'Remix', 'category' => 'Frontend'],
            ['name' => 'Svelte', 'category' => 'Frontend'],
            ['name' => 'Gatsby', 'category' => 'Frontend'],
            ['name' => 'Electron', 'category' => 'Frontend'],
            ['name' => 'Three.js', 'category' => 'Frontend'],
            ['name' => 'D3.js', 'category' => 'Frontend'],
            
            // Testing
            ['name' => 'PHPUnit', 'category' => 'Testing'],
            ['name' => 'Jest', 'category' => 'Testing'],
            ['name' => 'Selenium', 'category' => 'Testing'],
            ['name' => 'Cypress', 'category' => 'Testing'],
            ['name' => 'Mocha', 'category' => 'Testing'],
            ['name' => 'JUnit', 'category' => 'Testing'],
            ['name' => 'PyTest', 'category' => 'Testing'],
            ['name' => 'TestNG', 'category' => 'Testing'],
            
            // Mobile Development
            ['name' => 'React Native', 'category' => 'Mobile'],
            ['name' => 'Flutter', 'category' => 'Mobile'],
            ['name' => 'Android', 'category' => 'Mobile'],
            ['name' => 'iOS', 'category' => 'Mobile'],
            ['name' => 'Xamarin', 'category' => 'Mobile'],
            ['name' => 'Ionic', 'category' => 'Mobile'],
            ['name' => 'SwiftUI', 'category' => 'Mobile'],
            ['name' => 'Jetpack Compose', 'category' => 'Mobile'],
            ['name' => 'Mobile App Security', 'category' => 'Mobile'],
            
            // AI/ML
            ['name' => 'TensorFlow', 'category' => 'AI/ML'],
            ['name' => 'PyTorch', 'category' => 'AI/ML'],
            ['name' => 'Scikit-learn', 'category' => 'AI/ML'],
            ['name' => 'Pandas', 'category' => 'AI/ML'],
            ['name' => 'NumPy', 'category' => 'AI/ML'],
            ['name' => 'OpenCV', 'category' => 'AI/ML'],
            
            // Other Tools
            ['name' => 'Jira', 'category' => 'Tools'],
            ['name' => 'Confluence', 'category' => 'Tools'],
            ['name' => 'Postman', 'category' => 'Tools'],
            ['name' => 'Swagger', 'category' => 'Tools'],
            ['name' => 'VS Code', 'category' => 'Tools'],
            ['name' => 'IntelliJ IDEA', 'category' => 'Tools'],
            ['name' => 'Eclipse', 'category' => 'Tools'],
            ['name' => 'Slack', 'category' => 'Tools'],
            ['name' => 'Microsoft Teams', 'category' => 'Tools'],
            ['name' => 'Figma', 'category' => 'Tools'],
            ['name' => 'Adobe XD', 'category' => 'Tools'],
            ['name' => 'Sketch', 'category' => 'Tools'],

            // Additional Backend
            ['name' => 'gRPC', 'category' => 'Backend'],
            ['name' => 'RabbitMQ', 'category' => 'Backend'],
            ['name' => 'Apache Kafka', 'category' => 'Backend'],
            ['name' => 'Elasticsearch', 'category' => 'Backend'],
            ['name' => 'Socket.io', 'category' => 'Backend'],
            ['name' => 'Message Queues', 'category' => 'Backend'],
            
            // System Design
            ['name' => 'Microservices', 'category' => 'System Design'],
            ['name' => 'RESTful APIs', 'category' => 'System Design'],
            ['name' => 'Event-Driven Architecture', 'category' => 'System Design'],
            ['name' => 'Domain-Driven Design', 'category' => 'System Design'],
            ['name' => 'SOA', 'category' => 'System Design'],
            
            // Security
            ['name' => 'OAuth', 'category' => 'Security'],
            ['name' => 'JWT', 'category' => 'Security'],
            ['name' => 'SSL/TLS', 'category' => 'Security'],
            ['name' => 'Web Security', 'category' => 'Security'],
            ['name' => 'Penetration Testing', 'category' => 'Security'],
            
            // Data Science
            ['name' => 'Data Mining', 'category' => 'Data Science'],
            ['name' => 'Data Visualization', 'category' => 'Data Science'],
            ['name' => 'Machine Learning', 'category' => 'Data Science'],
            ['name' => 'Big Data', 'category' => 'Data Science'],
            ['name' => 'Apache Spark', 'category' => 'Data Science'],
            ['name' => 'Hadoop', 'category' => 'Data Science'],
            
            // Additional DevOps
            ['name' => 'GitLab CI', 'category' => 'DevOps'],
            ['name' => 'Prometheus', 'category' => 'DevOps'],
            ['name' => 'Grafana', 'category' => 'DevOps'],
            ['name' => 'ELK Stack', 'category' => 'DevOps'],
            ['name' => 'NewRelic', 'category' => 'DevOps'],
            ['name' => 'Datadog', 'category' => 'DevOps'],
            
            // Project Management
            ['name' => 'Agile', 'category' => 'Project Management'],
            ['name' => 'Scrum', 'category' => 'Project Management'],
            ['name' => 'Kanban', 'category' => 'Project Management'],
            ['name' => 'Lean', 'category' => 'Project Management'],
            
            // Version Control
            ['name' => 'GitHub', 'category' => 'Version Control'],
            ['name' => 'GitLab', 'category' => 'Version Control'],
            ['name' => 'Bitbucket', 'category' => 'Version Control'],
            ['name' => 'SVN', 'category' => 'Version Control'],
            
            // Game Development
            ['name' => 'Unity', 'category' => 'Game Development'],
            ['name' => 'Unreal Engine', 'category' => 'Game Development'],
            ['name' => 'Godot', 'category' => 'Game Development'],
            
            // Blockchain
            ['name' => 'Solidity', 'category' => 'Blockchain'],
            ['name' => 'Web3.js', 'category' => 'Blockchain'],
            ['name' => 'Smart Contracts', 'category' => 'Blockchain'],
            ['name' => 'Ethereum', 'category' => 'Blockchain']
        ];

        DB::table('possible_skills')->insert($skills);
    }
}
