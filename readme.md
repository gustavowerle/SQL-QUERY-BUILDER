# Query Builder com Design Patterns
Este Query Builder foi desenvolvido como um exemplo da implementação dos seguintes design patterns: Strategy, Builder e Singleton.

## Tecnologias
* PHP 7.4.3
* PHP Unit 9.2

### Strategy
O Strategy é um padrão estrutural que resolve problemas de lógicas condicionais. Neste projeto a implementação deste padrão pode ser vista nas classes que estão na pasta /src/QueryBuilder.

### Builder
O Builder é um dos padrões criacionais quer serve para criar objetos complexos seguindo um passo a passo. Neste projeto a implementação deste padrão pode ser vista nos arquivos que estão na pasta /src/Builder.

### Singleton
O Singleton é um dos padrões criacionais que tem como objetivo gerar uma instância única de uma classe para toda a aplicação. Neste projeto ele foi utilizado para gerar uma única instância do PDO para realizar a conexão com o banco de dados. Este exemplo pode ser visto no arquivo /src/DbSingleton.php.