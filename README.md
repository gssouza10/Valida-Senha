### backend-challenge
## Resolução do case SRE 

## Descrição

Para solução optei por construir a aplicação com a Linguagem de programação PHP e HTML 

Busquei simplificar o código.
Utilizando php para fazer os requisitos básicos de uma senha de maneira rápida, eficaz e com código limpo, criei uma string para cada consideração necessária e utilizei regex, através da função preg_match que executa uma correspondência de expressão regular.
Utilizei str_split, transformando a senha que é uma string para um array, logo após utilizei um array_unique para remover caracteres repetidos.
Por fim criei um laço condicional onde coloquei todas as strings das funções criadas e também a função implode que une as strings convertidas em array, caso todos parametros sejam diferente do solicitado aparecerá uma mensagem de senha inválida, caso estejam iguais irá mostrar a senha.

### Como executar o projeto?

- A maneira mais fácil é testando apenas o PHP, através de um simulador de php http://phptester.net/




