### backend-challenge
## Resolução do case SRE 

## Descrição

Para solução optei por construir a aplicação com a Linguagem de programação PHP e HTML 

Busquei simplificar o código.
*Utilizando php para fazer os requisitos básicos de uma senha de maneira rápida, eficaz e com código limpo, criei uma string para cada consideração necessária e utilizei regex, através da função preg_match que executa uma correspondência de expressão regular.
*Utilizei str_split, transformando a senha que é uma string para um array, logo após utilizei um array_unique para remover caracteres repetidos.
Por fim criei um laço condicional onde coloquei todas as strings das funções criadas e também a função implode que une as strings convertidas em array, caso todos parametros sejam diferente do solicitado aparecerá uma mensagem de senha inválida, caso estejam iguais irá mostrar a senha.

### Como executar o projeto?

- A maneira mais fácil é testando apenas o PHP, através de um simulador de php http://phptester.net/, atribuindo um valor para a string password, exemplo $password = "AbTp9!fok"; e logo após copiar e colar o código de valida_senha.php sem o método de POST.
* Exemplo:
<a href="https://imgur.com/jsyyS48"><img src="https://i.imgur.com/jsyyS48.png" title="source: imgur.com" /></a>

- Caso queira testar na API local, baixe o xampp https://www.apachefriends.org/pt_br/index.html, após a instalação, abra o xamp e clique em start Apache
<a href="https://imgur.com/pyufDNa"><img src="https://i.imgur.com/pyufDNa.png" title="source: imgur.com" /></a>
 1. Acesse o Disco Local, clique em xampp <br><br>
 <a href="https://imgur.com/YBHJNUO"><img src="https://i.imgur.com/YBHJNUO.png" title="source: imgur.com" /></a>
 2. Entre na pasta htdocs <br><br>
<a href="https://imgur.com/uYG17mz"><img src="https://i.imgur.com/uYG17mz.png" title="source: imgur.com" /></a>
3. Cole o projeto dentro dela como no exemplo<br><br>
<a href="https://imgur.com/HuqLCaz"><img src="https://i.imgur.com/HuqLCaz.png" title="source: imgur.com" /></a>
4. Por fim digite no navegador http://localhost:8888/ValidaSenha/
<a href="https://imgur.com/7ls4z2Q"><img src="https://i.imgur.com/7ls4z2Q.png" title="source: imgur.com" /></a>

