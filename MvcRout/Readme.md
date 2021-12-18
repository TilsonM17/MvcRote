# MvC com Query String 

Se esta a começar a estudar agora padrão de projecto,sem duvida ja se deve ter deparado com o padrão MVC.Este projecto vai ajudar voçê a trabalhar com arquitetura MvC de maneira facil e rapida. Usando query Strings,vai te dar os primeiros passos com MVC

## Estrutura do Projecto
O projecto esta dividido em:

 - ***src*** : Directorio fonte onde fica os directorios chave do projecto.Dentro dele temos:

    - **Controller** : Pasta onde fica todos os controllers  do projecto.

    - **helpers** : Pasta onde fica todos os helpers(*Ajudador*) do projecto.Por default ele ja veio com um que é o aruivo **View.php**,que possui um metodo para renderisar views nos controllers da aplicação.
    
    - **views** : Pasta onde fica todas as views do projecto.Sinta-se avontade para criar pasta e sub-pasta dentro deste directorio. 
      - Sub-pasta -> Fragmentos: Onde voçê tem os seus fragmentos Html,voçê pode renomiar ou adiçionar outra pasta com mesmo proposito
    
 - **vendor** : Gerado pelo composer.

 - **config.php** : Ficheiro de Configuração onde ficam constantes do projecto e dados sensiveis.Ele é uma alternativa aos arquivos ***.Env***.Ele é carregado com o autoload.

 - **index.php** : Arquivo principal do projecto.Toda request passa por ele

 ## Como usar?
  
  Para adiçionar uma nova rota,abra o index.php,tem uma array semelhante:
      
       $rotas = [
         'index' => 'main@index',
         'sobre' => 'main@sobre'
       ];
  Neste momento nosso projecto tem 2 rotas.

  Por exemplo se for a rota **sobre** 
  ele vai pegar o Controlador **Main** e vai procurar o methodo **Sobre** 
  ,na query string ficara:

  >http://MvcRout.com/?k=sobre
  >
  >**Nota:** O parametro "k" é obrigatorio.

  No controlador Main propriamente no methodo sobre, temos o seguinte codigo:

    //namespace

    use src\helpers\Views;
        .........
     public function sobre()
    {
        echo "Estou no sobre";
        
    }

Ao inves de executar uma ação,se voçê desejar renderizar uma view,use a classe ***Views***,ficara assim:

    //namespace

    use src\helpers\Views;
        .........
    public function sobre()
    {
        Views::layout([
      'nome_dos_ficheiro_sem_a_extenção'
            ]);
    }

#### O Resto é conversa ;)
