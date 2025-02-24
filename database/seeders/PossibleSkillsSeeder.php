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
            ['name' => 'Ethereum', 'category' => 'Blockchain'],

            // Additional Programming Languages
            ['name' => 'Perl', 'category' => 'Programming Languages'],
            ['name' => 'Haskell', 'category' => 'Programming Languages'],
            ['name' => 'Lua', 'category' => 'Programming Languages'],
            ['name' => 'Assembly', 'category' => 'Programming Languages'],
            ['name' => 'Groovy', 'category' => 'Programming Languages'],
            ['name' => 'Fortran', 'category' => 'Programming Languages'],
            ['name' => 'COBOL', 'category' => 'Programming Languages'],
            ['name' => 'Dart', 'category' => 'Programming Languages'],
            ['name' => 'F#', 'category' => 'Programming Languages'],
            ['name' => 'Erlang', 'category' => 'Programming Languages'],
            ['name' => 'Elixir', 'category' => 'Programming Languages'],

            // Additional Frontend
            ['name' => 'Alpine.js', 'category' => 'Frontend'],
            ['name' => 'Stimulus.js', 'category' => 'Frontend'],
            ['name' => 'Backbone.js', 'category' => 'Frontend'],
            ['name' => 'WebGL', 'category' => 'Frontend'],
            ['name' => 'PWA', 'category' => 'Frontend'],
            ['name' => 'Web Components', 'category' => 'Frontend'],
            ['name' => 'Shadow DOM', 'category' => 'Frontend'],
            ['name' => 'Service Workers', 'category' => 'Frontend'],

            // Additional Backend Technologies
            ['name' => 'GraphQL Apollo', 'category' => 'Backend'],
            ['name' => 'WebRTC', 'category' => 'Backend'],
            ['name' => 'Apache', 'category' => 'Backend'],
            ['name' => 'Nginx', 'category' => 'Backend'],
            ['name' => 'WebSockets', 'category' => 'Backend'],
            ['name' => 'ActiveMQ', 'category' => 'Backend'],
            ['name' => 'ZeroMQ', 'category' => 'Backend'],
            ['name' => 'Protocol Buffers', 'category' => 'Backend'],

            // Additional DevOps Tools
            ['name' => 'ArgoCD', 'category' => 'DevOps'],
            ['name' => 'Helm', 'category' => 'DevOps'],
            ['name' => 'SonarQube', 'category' => 'DevOps'],
            ['name' => 'Vault', 'category' => 'DevOps'],
            ['name' => 'Consul', 'category' => 'DevOps'],
            ['name' => 'Nomad', 'category' => 'DevOps'],
            ['name' => 'Podman', 'category' => 'DevOps'],
            ['name' => 'Chef', 'category' => 'DevOps'],
            ['name' => 'Puppet', 'category' => 'DevOps'],

            // Infrastructure
            ['name' => 'Load Balancing', 'category' => 'Infrastructure'],
            ['name' => 'CDN', 'category' => 'Infrastructure'],
            ['name' => 'DNS Management', 'category' => 'Infrastructure'],
            ['name' => 'Network Security', 'category' => 'Infrastructure'],
            ['name' => 'VPN', 'category' => 'Infrastructure'],
            ['name' => 'Firewall Configuration', 'category' => 'Infrastructure'],

            // Additional Cloud Services
            ['name' => 'Heroku', 'category' => 'Cloud'],
            ['name' => 'DigitalOcean', 'category' => 'Cloud'],
            ['name' => 'Linode', 'category' => 'Cloud'],
            ['name' => 'OpenStack', 'category' => 'Cloud'],
            ['name' => 'Cloudflare', 'category' => 'Cloud'],
            ['name' => 'VMware Cloud', 'category' => 'Cloud'],

            // Additional Security
            ['name' => 'OWASP', 'category' => 'Security'],
            ['name' => 'Encryption', 'category' => 'Security'],
            ['name' => 'Security Auditing', 'category' => 'Security'],
            ['name' => 'Vulnerability Assessment', 'category' => 'Security'],
            ['name' => 'Identity Management', 'category' => 'Security'],
            ['name' => 'Cybersecurity', 'category' => 'Security'],
            ['name' => 'SIEM', 'category' => 'Security'],

            // Business Intelligence
            ['name' => 'Power BI', 'category' => 'Business Intelligence'],
            ['name' => 'Tableau', 'category' => 'Business Intelligence'],
            ['name' => 'Looker', 'category' => 'Business Intelligence'],
            ['name' => 'QlikView', 'category' => 'Business Intelligence'],
            ['name' => 'SSRS', 'category' => 'Business Intelligence'],
            ['name' => 'SSIS', 'category' => 'Business Intelligence'],

            // Additional Testing
            ['name' => 'Load Testing', 'category' => 'Testing'],
            ['name' => 'Performance Testing', 'category' => 'Testing'],
            ['name' => 'Security Testing', 'category' => 'Testing'],
            ['name' => 'API Testing', 'category' => 'Testing'],
            ['name' => 'Integration Testing', 'category' => 'Testing'],
            ['name' => 'Cucumber', 'category' => 'Testing'],
            ['name' => 'TestRail', 'category' => 'Testing'],

            // IT Service Management
            ['name' => 'ITIL', 'category' => 'IT Service Management'],
            ['name' => 'ServiceNow', 'category' => 'IT Service Management'],
            ['name' => 'BMC Remedy', 'category' => 'IT Service Management'],
            ['name' => 'Change Management', 'category' => 'IT Service Management'],
            ['name' => 'Incident Management', 'category' => 'IT Service Management'],

            // Enterprise Software
            ['name' => 'SAP', 'category' => 'Enterprise Software'],
            ['name' => 'Oracle ERP', 'category' => 'Enterprise Software'],
            ['name' => 'Salesforce', 'category' => 'Enterprise Software'],
            ['name' => 'Workday', 'category' => 'Enterprise Software'],
            ['name' => 'Microsoft Dynamics', 'category' => 'Enterprise Software'],
            ['name' => 'PeopleSoft', 'category' => 'Enterprise Software'],

            // Database Languages & Skills
            ['name' => 'SQL', 'category' => 'Database Languages'],
            ['name' => 'PL/SQL', 'category' => 'Database Languages'],
            ['name' => 'T-SQL', 'category' => 'Database Languages'],
            ['name' => 'NoSQL', 'category' => 'Database Languages'],
            ['name' => 'Database Design', 'category' => 'Database Skills'],
            ['name' => 'Database Administration', 'category' => 'Database Skills'],
            ['name' => 'Database Optimization', 'category' => 'Database Skills'],
            ['name' => 'Database Migration', 'category' => 'Database Skills'],
            ['name' => 'Data Modeling', 'category' => 'Database Skills'],
            ['name' => 'Query Optimization', 'category' => 'Database Skills'],
            ['name' => 'Stored Procedures', 'category' => 'Database Skills'],
            ['name' => 'Triggers', 'category' => 'Database Skills'],
            ['name' => 'Views', 'category' => 'Database Skills'],
            ['name' => 'Indexing', 'category' => 'Database Skills'],
            ['name' => 'Data Warehousing', 'category' => 'Database Skills'],

            // Additional Programming Concepts
            ['name' => 'Object-Oriented Programming', 'category' => 'Programming Concepts'],
            ['name' => 'Functional Programming', 'category' => 'Programming Concepts'],
            ['name' => 'Procedural Programming', 'category' => 'Programming Concepts'],
            ['name' => 'Concurrent Programming', 'category' => 'Programming Concepts'],
            ['name' => 'Parallel Programming', 'category' => 'Programming Concepts'],
            ['name' => 'Design Patterns', 'category' => 'Programming Concepts'],
            ['name' => 'SOLID Principles', 'category' => 'Programming Concepts'],
            ['name' => 'Clean Code', 'category' => 'Programming Concepts'],
            ['name' => 'Code Review', 'category' => 'Programming Concepts'],
            ['name' => 'Debugging', 'category' => 'Programming Concepts'],
            
            // Markup & Style Languages
            ['name' => 'XML', 'category' => 'Markup Languages'],
            ['name' => 'XHTML', 'category' => 'Markup Languages'],
            ['name' => 'Markdown', 'category' => 'Markup Languages'],
            ['name' => 'LaTeX', 'category' => 'Markup Languages'],
            ['name' => 'YAML', 'category' => 'Markup Languages'],
            ['name' => 'JSON', 'category' => 'Data Formats'],
            ['name' => 'CSS3', 'category' => 'Style Languages'],
            ['name' => 'Less', 'category' => 'Style Languages'],
            ['name' => 'Stylus', 'category' => 'Style Languages'],

            // Software Development Tools
            ['name' => 'Visual Studio', 'category' => 'Development Tools'],
            ['name' => 'Sublime Text', 'category' => 'Development Tools'],
            ['name' => 'Atom', 'category' => 'Development Tools'],
            ['name' => 'NetBeans', 'category' => 'Development Tools'],
            ['name' => 'PyCharm', 'category' => 'Development Tools'],
            ['name' => 'WebStorm', 'category' => 'Development Tools'],
            ['name' => 'PhpStorm', 'category' => 'Development Tools'],
            ['name' => 'Android Studio', 'category' => 'Development Tools'],
            ['name' => 'Xcode', 'category' => 'Development Tools'],

            // Build Tools & Package Managers
            ['name' => 'Maven', 'category' => 'Build Tools'],
            ['name' => 'Gradle', 'category' => 'Build Tools'],
            ['name' => 'Ant', 'category' => 'Build Tools'],
            ['name' => 'npm', 'category' => 'Package Managers'],
            ['name' => 'Yarn', 'category' => 'Package Managers'],
            ['name' => 'Composer', 'category' => 'Package Managers'],
            ['name' => 'pip', 'category' => 'Package Managers'],
            ['name' => 'NuGet', 'category' => 'Package Managers'],
            ['name' => 'Homebrew', 'category' => 'Package Managers'],

            // Operating Systems & Shell
            ['name' => 'Linux Administration', 'category' => 'Operating Systems'],
            ['name' => 'Windows Server', 'category' => 'Operating Systems'],
            ['name' => 'macOS', 'category' => 'Operating Systems'],
            ['name' => 'Unix', 'category' => 'Operating Systems'],
            ['name' => 'Shell Scripting', 'category' => 'Shell'],
            ['name' => 'Bash', 'category' => 'Shell'],
            ['name' => 'PowerShell', 'category' => 'Shell'],
            ['name' => 'Zsh', 'category' => 'Shell'],
            ['name' => 'Command Line', 'category' => 'Shell'],

            // Networking
            ['name' => 'TCP/IP', 'category' => 'Networking'],
            ['name' => 'HTTP/HTTPS', 'category' => 'Networking'],
            ['name' => 'FTP/SFTP', 'category' => 'Networking'],
            ['name' => 'SSH', 'category' => 'Networking'],
            ['name' => 'DNS', 'category' => 'Networking'],
            ['name' => 'DHCP', 'category' => 'Networking'],
            ['name' => 'Network Security', 'category' => 'Networking'],
            ['name' => 'Routing Protocols', 'category' => 'Networking'],
            ['name' => 'VPN Configuration', 'category' => 'Networking'],

            // Web Servers & Services
            ['name' => 'Apache HTTP Server', 'category' => 'Web Servers'],
            ['name' => 'Nginx Web Server', 'category' => 'Web Servers'],
            ['name' => 'IIS', 'category' => 'Web Servers'],
            ['name' => 'Tomcat', 'category' => 'Web Servers'],
            ['name' => 'Load Balancers', 'category' => 'Web Services'],
            ['name' => 'Reverse Proxy', 'category' => 'Web Services'],
            ['name' => 'Web Caching', 'category' => 'Web Services'],
            ['name' => 'SSL Certificates', 'category' => 'Web Services'],

            // Data Analysis & Processing
            ['name' => 'Excel (Advanced)', 'category' => 'Data Analysis'],
            ['name' => 'Statistical Analysis', 'category' => 'Data Analysis'],
            ['name' => 'Data Cleaning', 'category' => 'Data Analysis'],
            ['name' => 'ETL', 'category' => 'Data Processing'],
            ['name' => 'Data Integration', 'category' => 'Data Processing'],
            ['name' => 'Data Migration', 'category' => 'Data Processing'],
            ['name' => 'Data Quality', 'category' => 'Data Processing'],
            
            // API & Integration
            ['name' => 'API Development', 'category' => 'API'],
            ['name' => 'API Documentation', 'category' => 'API'],
            ['name' => 'REST API', 'category' => 'API'],
            ['name' => 'SOAP API', 'category' => 'API'],
            ['name' => 'Microservices Architecture', 'category' => 'API'],
            ['name' => 'API Gateway', 'category' => 'API'],
            ['name' => 'API Security', 'category' => 'API'],
            ['name' => 'API Testing', 'category' => 'API'],
            ['name' => 'Swagger/OpenAPI', 'category' => 'API'],

            // Virtualization & Containerization
            ['name' => 'Virtual Machines', 'category' => 'Virtualization'],
            ['name' => 'VirtualBox', 'category' => 'Virtualization'],
            ['name' => 'VMware ESXi', 'category' => 'Virtualization'],
            ['name' => 'Hyper-V', 'category' => 'Virtualization'],
            ['name' => 'Container Orchestration', 'category' => 'Containerization'],
            ['name' => 'Docker Compose', 'category' => 'Containerization'],
            ['name' => 'Docker Swarm', 'category' => 'Containerization'],
            ['name' => 'Container Security', 'category' => 'Containerization'],

            // Additional Commonly Listed Skills
            ['name' => 'Regular Expressions', 'category' => 'Programming Skills'],
            ['name' => 'Version Control', 'category' => 'Development Skills'],
            ['name' => 'Code Documentation', 'category' => 'Development Skills'],
            ['name' => 'Technical Documentation', 'category' => 'Documentation'],
            ['name' => 'Software Architecture', 'category' => 'Architecture'],
            ['name' => 'Problem Solving', 'category' => 'Soft Skills'],
            ['name' => 'Analytical Skills', 'category' => 'Soft Skills'],
            ['name' => 'Team Collaboration', 'category' => 'Soft Skills']
        ];

        DB::table('possible_skills')->insert($skills);
    }
}
