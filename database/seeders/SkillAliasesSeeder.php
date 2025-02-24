<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PossibleSkill;
use App\Models\SkillAlias;

class SkillAliasesSeeder extends Seeder
{
    public function run()
    {
        $aliases = [
            // Programming Languages
            'PHP' => ['php', 'PHP programming', 'php development', 'php language'],
            'JavaScript' => ['js', 'javascript', 'java script', 'ecmascript', 'es6', 'es2015', 'es2016', 'es2017', 'es2018', 'es2019', 'es2020'],
            'Python' => ['py', 'python2', 'python3', 'python programming', 'python development'],
            'Java' => ['core java', 'java programming', 'java development', 'java se', 'java ee'],
            'C++' => ['cpp', 'c plus plus', 'cplusplus', 'c++11', 'c++14', 'c++17', 'c++20'],
            'C#' => ['csharp', 'c sharp', '.net c#', 'dotnet c#'],
            'TypeScript' => ['ts', 'typescript programming', 'type script'],
            'Ruby' => ['rb', 'ruby programming', 'ruby lang'],
            'Swift' => ['swift programming', 'apple swift', 'ios swift'],
            'Kotlin' => ['kt', 'kotlin programming', 'android kotlin'],
            
            // Additional Programming Languages
            'Perl' => ['perl programming', 'perl lang', 'perl development'],
            'Haskell' => ['haskell programming', 'haskell lang', 'functional haskell'],
            'Lua' => ['lua programming', 'lua scripting', 'lua development'],
            'Assembly' => ['asm', 'assembly language', 'assembler'],
            'Groovy' => ['groovy lang', 'groovy programming', 'apache groovy'],
            'Fortran' => ['fortran programming', 'fortran lang', 'fortran77', 'fortran90'],
            'COBOL' => ['cobol programming', 'cobol lang', 'mainframe cobol'],
            'Dart' => ['dart lang', 'dart programming', 'flutter dart'],
            'F#' => ['fsharp', 'f sharp', 'f# programming'],
            'Erlang' => ['erlang programming', 'erlang lang', 'erlang development'],
            'Elixir' => ['elixir programming', 'elixir lang', 'phoenix elixir'],
            'Go' => ['golang', 'go programming', 'go lang'],
            'Rust' => ['rust programming', 'rust lang', 'rustlang'],
            'Scala' => ['scala programming', 'scala lang', 'scala development'],
            'R' => ['r programming', 'r lang', 'r statistics'],
            'MATLAB' => ['matlab programming', 'matlab analysis', 'mathworks matlab'],

            // Frameworks
            'Laravel' => ['laravel framework', 'laravel php', 'laravel development'],
            'React' => ['reactjs', 'react js', 'react.js', 'react development', 'react frontend'],
            'Angular' => ['angularjs', 'angular2', 'angular4', 'angular5', 'angular6', 'angular7', 'angular8', 'angular9', 'angular10', 'angular11', 'angular12'],
            'Vue.js' => ['vuejs', 'vue js', 'vue', 'vue3', 'vue2'],
            'Django' => ['django framework', 'django python', 'django development'],
            'Spring' => ['spring framework', 'spring boot', 'springboot', 'spring mvc', 'spring cloud'],
            'ASP.NET' => ['asp net', 'asp.net core', 'asp net core', 'aspnet', 'asp.net mvc'],
            'Express.js' => ['expressjs', 'express js', 'express', 'express framework'],
            'Next.js' => ['nextjs', 'next js', 'next react'],

            // Additional Backend Technologies
            'GraphQL Apollo' => ['apollo client', 'apollo server', 'apollo graphql'],
            'WebRTC' => ['webrtc protocol', 'web rtc', 'real time communication'],
            'Apache' => ['apache server', 'apache httpd', 'apache web server'],
            'Nginx' => ['nginx server', 'nginx proxy', 'nginx web server'],
            'WebSockets' => ['websocket', 'web socket', 'ws protocol'],
            'ActiveMQ' => ['active mq', 'apache activemq', 'activemq broker'],
            'ZeroMQ' => ['zeromq', 'zmq', '0mq'],
            'Protocol Buffers' => ['protobuf', 'protocol buff', 'protobuffers'],
            
            // Databases
            'MySQL' => ['mysql database', 'mysql db', 'maria db', 'mariadb'],
            'PostgreSQL' => ['postgres', 'postgresql db', 'psql'],
            'MongoDB' => ['mongo', 'mongo db', 'nosql mongodb'],
            'SQLite' => ['sqlite3', 'sqlite database'],
            'Redis' => ['redis cache', 'redis db', 'redis database'],
            'Microsoft SQL Server' => ['mssql', 'sql server', 'msserver', 't-sql', 'tsql'],

            // Database Languages & Skills
            'SQL' => ['structured query language', 'sql queries', 'sql database'],
            'PL/SQL' => ['plsql', 'pl sql', 'oracle plsql'],
            'T-SQL' => ['transact sql', 'tsql', 'microsoft sql'],
            'NoSQL' => ['non sql', 'not only sql', 'nosql database'],
            'Database Design' => ['db design', 'database architecture', 'schema design'],
            'Database Administration' => ['dba', 'database admin', 'db administration'],
            'Database Optimization' => ['db optimization', 'query optimization', 'performance tuning'],
            'Database Migration' => ['db migration', 'data migration', 'schema migration'],
            'Data Modeling' => ['database modeling', 'data model', 'erd'],
            'Query Optimization' => ['sql optimization', 'query tuning', 'performance optimization'],
            'Stored Procedures' => ['stored proc', 'sproc', 'stored routine'],
            'Triggers' => ['db triggers', 'database triggers', 'trigger functions'],
            'Views' => ['database views', 'db views', 'view tables'],
            'Indexing' => ['database indexing', 'index optimization', 'db index'],
            'Data Warehousing' => ['data warehouse', 'dw', 'edw'],

            // Frontend
            'HTML' => ['html5', 'html 5', 'hypertext markup language'],
            'CSS' => ['css3', 'css 3', 'cascading style sheets', 'stylesheet'],
            'SASS/SCSS' => ['sass', 'scss', 'sass css', 'scss css'],
            'Bootstrap' => ['bootstrap4', 'bootstrap5', 'bootstrap css', 'twitter bootstrap'],
            'Tailwind CSS' => ['tailwind', 'tailwindcss', 'tailwind framework'],
            'Material UI' => ['mui', 'material-ui', 'material design'],

            // Additional Frontend Tools
            'Alpine.js' => ['alpinejs', 'alpine javascript', 'alpine framework'],
            'Stimulus.js' => ['stimulusjs', 'stimulus javascript', 'stimulus framework'],
            'Backbone.js' => ['backbonejs', 'backbone javascript', 'backbone framework'],
            'WebGL' => ['web gl', 'webgl 2.0', '3d graphics'],
            'PWA' => ['progressive web app', 'progressive web application', 'pwa development'],
            'Web Components' => ['webcomponents', 'custom elements', 'web components api'],
            'Shadow DOM' => ['shadowdom', 'shadow root', 'shadow tree'],
            'Service Workers' => ['serviceworker', 'sw', 'service worker api'],

            // DevOps & Cloud
            'AWS' => ['amazon web services', 'amazon aws', 'aws cloud', 'aws services'],
            'Azure' => ['microsoft azure', 'azure cloud', 'ms azure'],
            'Docker' => ['docker container', 'docker containerization', 'docker platform'],
            'Kubernetes' => ['k8s', 'kube', 'kubernetes container'],
            'Jenkins' => ['jenkins ci', 'jenkins pipeline', 'jenkins automation'],

            // Additional DevOps Tools
            'ArgoCD' => ['argo cd', 'argocd gitops', 'argo continuous delivery'],
            'Helm' => ['helm charts', 'kubernetes helm', 'helm package'],
            'SonarQube' => ['sonar', 'sonar analysis', 'code quality'],
            'Vault' => ['hashicorp vault', 'vault secrets', 'secrets management'],
            'Consul' => ['hashicorp consul', 'service mesh', 'service discovery'],
            'Nomad' => ['hashicorp nomad', 'nomad scheduler', 'job scheduler'],
            'Podman' => ['podman container', 'podman pod', 'container management'],
            'Chef' => ['chef automation', 'chef infra', 'chef configuration'],
            'Puppet' => ['puppet automation', 'puppet configuration', 'puppet enterprise'],

            // Testing
            'PHPUnit' => ['php unit', 'phpunit testing', 'php testing'],
            'Jest' => ['jest js', 'jest testing', 'jest framework'],
            'Selenium' => ['selenium webdriver', 'selenium testing', 'selenium automation'],
            'Cypress' => ['cypress io', 'cypress testing', 'cypress automation'],

            // Mobile
            'React Native' => ['react-native', 'reactnative', 'rn', 'react native mobile'],
            'Flutter' => ['flutter sdk', 'flutter mobile', 'flutter development'],
            'Android' => ['android development', 'android programming', 'android studio'],
            'iOS' => ['ios development', 'ios programming', 'ios mobile'],

            // Version Control
            'Git' => ['git vcs', 'git version control', 'git system'],
            'GitHub' => ['github com', 'github platform', 'github repository'],
            'GitLab' => ['gitlab com', 'gitlab platform', 'gitlab ci'],

            // API & Architecture
            'RESTful APIs' => ['rest', 'rest api', 'restapi', 'restful', 'restful web services', 'rest web services'],
            'GraphQL' => ['gql', 'graph ql', 'graphql api'],
            'Microservices' => ['micro services', 'microservice architecture', 'microservice'],

            // Tools
            'VS Code' => ['vscode', 'visual studio code', 'visualstudio code'],
            'Postman' => ['postman api', 'postman testing', 'postman tool'],
            'Jira' => ['jira software', 'jira project', 'jira management'],

            // AI/ML
            'TensorFlow' => ['tensorflow ml', 'tf', 'tensor flow'],
            'PyTorch' => ['torch', 'pytorch ml', 'py torch'],
            'Machine Learning' => ['ml', 'machine-learning', 'ml algorithms'],

            // Project Management
            'Agile' => ['agile methodology', 'agile development', 'agile process'],
            'Scrum' => ['scrum methodology', 'scrum master', 'scrum process'],

            // Security
            'OAuth' => ['oauth2', 'oauth 2.0', 'oauth authentication'],
            'JWT' => ['json web token', 'jwt auth', 'jwt token'],

            // Blockchain
            'Solidity' => ['solidity programming', 'ethereum solidity', 'smart contract solidity'],
            'Web3.js' => ['web3', 'web3js', 'web 3'],

            // Additional Tools
            'Figma' => ['figma design', 'figma ui', 'figma prototype'],
            'Adobe XD' => ['xd', 'adobe experience design', 'xd design'],

            // Business Intelligence
            'Power BI' => ['powerbi', 'microsoft power bi', 'power bi desktop'],
            'Tableau' => ['tableau desktop', 'tableau visualization', 'tableau bi'],
            'Looker' => ['looker bi', 'looker analytics', 'google looker'],
            'QlikView' => ['qlik', 'qlikview bi', 'qlik sense'],
            'SSRS' => ['sql server reporting services', 'reporting services', 'microsoft ssrs'],
            'SSIS' => ['sql server integration services', 'integration services', 'microsoft ssis'],

            // Enterprise Software
            'SAP' => ['sap erp', 'sap software', 'sap system'],
            'Oracle ERP' => ['oracle enterprise', 'oracle applications', 'oracle business'],
            'Salesforce' => ['crm salesforce', 'salesforce cloud', 'force.com'],
            'Workday' => ['workday hris', 'workday erp', 'workday system'],
            'Microsoft Dynamics' => ['dynamics crm', 'dynamics 365', 'ms dynamics'],
            'PeopleSoft' => ['peoplesoft erp', 'peoplesoft hrms', 'oracle peoplesoft'],
        ];

        foreach ($aliases as $skillName => $skillAliases) {
            $skill = PossibleSkill::where('name', 'like', $skillName)->first();
            if ($skill) {
                foreach ($skillAliases as $alias) {
                    SkillAlias::create([
                        'possible_skill_id' => $skill->id,
                        'alias' => strtolower($alias)
                    ]);
                }
            }
        }
    }
}
