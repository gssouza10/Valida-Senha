### backend-challenge
## Resolução do case SRE 

## Descrição

Para solução optei por construir a aplicação com a Linguagem de programação PHP e HTML 

Busquei simplificar o código.
Utilizando php para fazer os requisitos básicos de uma senha de maneira rápida  eficaz, criei uma string para cada consideração necessária e utilizei regex, através da função preg_match que executa uma correspondência de expressão regular.
Para não possuir caracteres repetisdos utilizei str_split, transformando a senha que é uma string para um array, logo após utilizei um array_unique para remover caracteres repetidos.

