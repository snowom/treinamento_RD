Orientação a Objetos

    Classe
        <?php
        class Produto {
            public $descricao;
            public $estoque;
            public $preco;
        }

        $p1 = new Produto;
        $p1->descricao = 'Chocolate';
        $p1->estoque   = 10;
        $p1->preco     = 7;

        $p2 = new Produto;
        $p2->descricao = 'Café';
        $p2->estoque   = 20;
        $p2->preco     = 4;
        // output objeto inteiro
        var_dump($p1);
        var_dump($p2);

    Métodos
        
        <?php
        class Produto {
            public $descricao;
            public $estoque;
            public $preco;

            public function aumentarEstoque($unidades) {
                if (is_numeric($unidades) AND $unidades >= 0) {
                    $this->estoque += $unidades;
                }
            }

            public function diminuiEstoque($unidades) {
                if (is_numeric($unidades) AND $unidades >=0) {
                    $this->estoque -= $unidades;
                }

                public function reajustarPreco($percentual) {
                    if (is_numeric(percentual) AND $percentual >= 0) {
                        $this->preco *= (1 + ($percentual/100));
                    }
                }
            }
        }

        $p1 = new Produto;
        $p1->descricao = 'Chocolate';
        $p1->estoque   = 10;
        $p1->preco     = 8;
        echo "O estoque de " . $p1->descricao . " é " .  $p1->estoque . "<br>\n";
        echo "O preço de " . $p1->descricao . " é " . $p1->preco ."<br>\n";

        $p1->aumentarEstoque(10);
        $p1->diminuiEstoque(5);
        $p1->reajustarPreco(50);
        echo "O estoque de " . $p1->descricao . " é " .  $p1->estoque . "<br>\n";
        echo "O preço de " . $p1->descricao . " é " . $p1->preco ."<br>\n";

        <?php
        //exemplo de private sem getters and setters
        class Produto {
            private $descricao;
            private $estoque;
            private $preco;
        }

        $p1 = new Produto;
        $p1->descricao = 'Chocolate';
        $p1->estoque   = 10;
        $p1->preco     = 8;
        Result: Fatal Error: Cannot access private property Produto::$descricao in objeto3.php on line 10

        <?php
        class Produto {
            //exemplo de private com getters and setters
            private $descricao;
            private $estoque;
            private $preco;

            public function setDescricao($descricao) {
                if (is_string($descricao)) {
                    $this->descricao = $descricao;
                }
            }

            public function getDescricao() {
                return $this->descricao;
            }

            public function setEstoque($estoque) {
                if (is_numeric($estoque) AND $estoque > 0) {
                    $this->estoque = $estoque;
                }
            }

            public function getEstoque() {
                return $this->estoque;
            }

        }

        $p1 = new Produto;
        $p1->setDescricao('Chocolate');
        $p1->setEstoque(10);
        echo "Descrição: " . $p1->getDescricao() . '<br>' . PHP_EOL;
        echo "Estoque: " . $p1->getEstoque() . '<br>' . PHP_EOL;



    Métodos construtores e destrutores
        No PHP um método construtor deve ter o nome __construct(), pois é uma convenção da linguagem.
        <?php
        class Produto {
            private $descricao;
            private $estoque;
            private $preco;

            public function __construct($descricao, $estoque, $preco) {
                if (is_string($descricao)) {
                    $this->descricao = $descricao;
                }
                if (is_string($estoque) AND $estoque > 0) {
                    $this->estoque = $estoque;
                }
                if (is_string($preco) AND $preco > 0) {
                    $this->preco = $preco;
                }
            }

            public function getDescricao() {
                return $this->descricao;
            }
            public function getEstoque() {
                return $this->estoque;
            }
            public function getPreco() {
                return $this->preco;
            }
        }

        $p1 = new Produto('Chocolate', 10, 5);
        echo 'Descrição: ' . $p1->getDescricao() . '<br>' . PHP_EOL;
        echo 'Estoque: ' . $p1->getEstoque() . '<br>' . PHP_EOL;
        echo 'Preço: ' . $p1-getPreco() . '<br>' . PHP_EOL;

        PHP também implementa o conceito de método destrutor. Um destrutor é um método especial com o nome __destruct() (convenção da linguagem) executado automaticamente quando o objeto é desalocado da memória, o que pode acontecer em algumas circunstâncias, como: quando atribuímos o valor NULL ao objeto; quando o programa é finalizado, e então todos os objetos são desalocados automaticamente. como exemplos de utilização, o método destrutor pode ser utilizado para finalizar conexões, apagar aquivos teporários e desfazer outras operações criadas durante o ciclo de vida do objeto.
        <?php
        class Produto {
            private $descricao;
            private $estoque;
            private $preco;

            public function __construct($descricao, $estoque, $preco) {
                $this->descricao = $descricao;
                $this->estoque   = $estoque;
                $this->preco     = $preco;
                
                echo "CONSTRUÍDO: Objeto " . $descricao . ", estoque " . ", preco " . $preco . "<br>\n"; 
            }

            public function __destruct() {
                echo "DESTRUÍDO: Objeto " . $this->descricao . ", estoque " . $this->estoque . ", preco " . $this->preco . "<br>\n";
            }
        }

        $p1 = new Produto('Chocolate', 10, 5);
        unset($p1);
        $p2 = new Produto('Café', 100, 7);
        unset($p2);

    Conversão de tipos
        No PHP podemos criar objetos sem ter uma classe definida. Isso pe possível porque no PHP existe uma classe predefinida chamada stdClass (Standard Class), que é uma classe vazia (sem atributos e métodos). Essa é utilizada também quando realizamos conversões de tipo, como de array para objeto, como será demonstrado no exemplo. Criamos uma objeto $produto da classe stdClass.
        Inicialmente serão definidos alguns atributos. Ao final utilizaremos o print_r() para exibir a estrutura do objeto criado.

        <?php
        $produto = new StdClass;
        $produto->descricao = 'Chocolate Amargo';
        $produto->estoque   = 100;
        $produto->preco     = 7;

        print_r($produto);
        Result:
        stdClass Object (
            [descrica] => Chocolate Amargo
            [estoque] => 100
            [preco] => 7
        )

        Podemos realizar operações de tipo (casting), como criar um objeto a partir de um vetor e vice-versa, por meio da utilização de um operador que utiliza o tipo de destino entre parênteses. Neste exemplo vamos declarar um objeto $produto, com alguns atributos. Em seguida vamos convertê-lo em array ($vetor1) por meio da operação de casting (array). Mais adiante criaremos o $vetor2, um array criado pela sintaxe resumida de criação de vetores (utilizando parênteses []). Em seguida vamos convertê-lo em object ($product2) por meio da operação de castinho (object).
        <?php
        $produto = new StdClass;
        $produto->descricao = 'Chocolate Amargo';
        $produto->estoque   = 100;
        $produto->preco     = 7;

        $vetor1 = (array) $produto;
        echo $vetor1['descricao'] . "<br>\n";

        $vetor2 = ['descricao' => 'Café', 'estoque' => 100, 'preco' => 7];
        $produto2 = (object) $vetor2;
        echo $produto2->descricao . "<br>\n";
        
        Result:
        Chocolare Amargo
        Café

        Outra possibilidade que o PHP nos oferece é utilizar variáveis variantes para declarar as propriedades de um objeto. Neste exemplo criaremos um vetor simples com alguns índices definidos, como descricao, estoque e preco. Em seguida vamos declarar um objeto ($objeto) vazio (StdClass). Posteriormente percorreremos o vetor ($produto) acessando a chave e o valor de cada posição a cada iteração. Dentro do laço de repetição preencheremos os atributos do objeto com a sintaxe ($objeto->$chave). Neste caso a variável $chave será traduzida pelo seu conteúdo (descricao, estoque, preco) a cada passada do loop. Note que a única diferença oara a tribuição normal é a presença do cifrão ($) na frente da variável de propriedade.
        <?php
        $produto = array();
        $produto['descricao'] = 'Chocolate Amargo';
        $produto['estoque'] = 100;
        $produto['preco'] = 7;

        $objeto = new stdClass;

        foreach ($produto as $chave =>$valor) {
            $objeto->$chave = $valor;
        }

        print_r($objeto);

        Result:
        stdClass Object (
            [descricao] => Chocolate Amargo
            [estoque] => 100
            [preco] => 7
        )


    Relacionamento entre Objetos
        Veremos os principais tipos de relacionamento entre objetos: associação, composição e agregação. A herança será tratada separadamente por ser de maior complexidade.
        
        Obs: a partir deste ponto vamos abandonar uma prática utilizada até então, que é a de mesclar a declaração da classe com a sua utilização no mesmo arquivo.
        Como essa não é uma boa prática, a partir deste ponto as classes serão armazenadas isoladamente no subdiretório classes.

        Associação
            Associação é a relação mais comum entre objetos. Na associação um objeto contém uma referência a outro objeto. Essa referência functiona como um apontamento em que um objeto terá um atributo que apontará para a posição da memória onde o outro objeto se encontra, podendo executar seus métodso. A forma mais comum de implementar uma associação é ter um objeto como atributo de outro.
            Conceitualmente existe uma associação entre um produto e seu fabricante, em que um produto está relacionado a um fabricante e, por sua vez, um farbicante pode fabricar diferentes produtos.
            EX:
            colocar figura 2.5 do livro

            classes/Fabricante.php
            <?php 
            class Fabricante {
                private $nome;
                private $endereco;
                private $documento;

                public function __construct($nome, $endereco, $documento) {
                    $this->nome      = $nome;
                    $this->endereco  = $endereco;
                    $this->documento = $documento;
                }

                public function getNome() {
                    return $this->nome;
                }
            }

            classes/Produto.php
            <?php
            class Produto {
                private $descricao;
                private $estoque;
                private $preco;
                private $fabricante;

                public function __construct($descricao, $estoque, $preco) {
                    $this->descricao = $descricao;
                    $this->estoque   = $estoque;
                    $this->preco      = $preco;
                }

                public function getDescricao() {
                    return $this->descricao;
                }

                public function setFabricante(Fabricante $f) {
                    $this->fabricante = $f;
                }

                public function getFabricante() {
                    return $this->fabricante;
                }
            }

            A partir dos objetos $p1 e $f1 criados, associação é estabelecida entre os dois objetos no momento da execução do método setFabricante(), que recebe a instância $f e a armazea no atributo $this->fabricante do objeto Produto. por fim serão impressos alguns atributos para demosntrar a relação.
            associacao.php
            <?php
            require_once 'classes/Fabricante.php';
            require_once 'classes/Produto.php';

            //criação dos objetos
            $p1 = new Produto('Chocolate', 10, 7);
            $f1 = new Fabricante('Chocolate Factory', 'Willy Wonka Street', '15423586572');

            //associação
            $p1->setFabricante($f1);

            echo 'A descrição é ' . $p1->getDescricao() . '<br>\n';
            echo 'O fabricante é ' . $p1->getFabricante()->getNome() . '<br>\n';

            Result: A descrição é Chocolate
                    O fabricante é Chocolate Factory
        Composição
            A composição é uma relação entre objetos de duas classes conhecida como relação todo/parte. O relacionamento tem nome porque  conceitualmente um objeto(todo) contém outros objetos (partes). A composição permite combinar diferentes tipos de objetos em um objeto mais complexo.
            Colocar figura 2.6 do livro
            classes/Caracteristica.php
            <?php
            class Caracteristica {
                private $nome;
                private $valor;

                public function __construct($nome, $valor) {
                    $this->nome  = $nome;
                    $this->valor = $valor;
                }

                public function getNome() {
                    return $this->nome;
                }

                public function getValor() {
                    return $this->valor;
                }

            }

            classes/Produto.php
            <?php
            class Produto {
                //...
                private $caracteristicas;
                public function addCaracteristica($nome, $valor) {
                    $this->caracteristicas[] = new Caracteristica($nome, $valor);
                }

                public function getCaracteristicas() {
                    return $this->caracteriscas;
                }
            }
            composicao.php
            <?php
            require_once 'classes/Produto.php';
            require_once 'classes/Caracteristica.php';

            //criação dos objetos
            $p1 = new Produto('Chocolate', 10, 7);

            //composição
            $p1->addCaracteristica('Cor', 'Branco');
            $p1->addCaracteristica('Peso', '2.6 kg');
            $p1->addCaracteristica('Potência', '20 watts RMS');

            echo 'Produto: ' . $p1->getDescricao() . "<br>\n";
            foreach ($p1->getCaracteristicas() as $c) {
                echo ' Característica: ' . $c->getNome() . ' - ' . $c->getValor() . "<br>\n";
            }

            Result:
            Produto: Chocolate
                Característica: Cor - Branco
                Característica: Peso - 2.6kg
                Característica: Potência - 20 watts RMS

        Agregação
            Agregação também é um tipo de relação entre objetos todo/parte. Na agregação um objeto agrega outro objeto, ou seja, torna um objeto externo parte de si mesmo pela utilização de u dos seus métodos. Assim o objeto "todo" poderá utilizar funcionalidades do objeto agregado.]
            Colocar figura 2.7 do livro

            classes/Cesta.php
            <?php
            class Cesta {
                private $time;
                private $itens;

                public function __construct() {
                    $this->time  = date('Y-m-d H:i:s');
                    $this->itens = array(); 
                }

                public function addItem(Produto $p) {
                    $this->itens[] = $p;
                }

                public function getItens() {
                    return $this->itens;
                }

                public function getTime() {
                    return $this->time;
                }
                
            }

            agregacao.php
            <?php
            require_once 'classes/Cesta.php';
            require_once 'classes/Produto.php';

            //criação da cesta
            $c1 = new Cesta;

            //agregação dos produtos
            $c1->addItem($p1 = new Produto('Chocolate', 10, 5));
            $c1->addItem($p2 = new Produto('Café', 100, 7));
            $c1->addItem($p3 = new Produto('Mostarda', 50, 3));

            foreach($c1->getItens() as $item) {
                echo 'Item: ' . $item->getDescricao() . "<br\n>";
            }

            Result:
            Item: Chocolate
            Item: Café
            Item: Mostarda

            obs: Caso em algum momento o programador não respeite a regra de passar um objeto da classe Produto ao método addItem(), uma mensagem de erro será emitida:
            Fatal error: Argument 1 passed to Cesta::addItem() must be an instance of Produto, instance of XYZ given...
    Herança
        Colocar figura 2.8 do livro
        classes/Conta.php
        <?php
        class Conta {
            protected $agencia;
            protected $conta;
            protected $saldo;

            public function __construct($agencia, $conta, $saldo) {
                $this->agencia = $agencia;
                $this->conta   = $conta;
                if ($saldo >= 0) {
                    $this->saldo = $saldo;
                }
            }

            public function getInfo() {
                return "Agência: {$this->agencia}, Conta: {$this->conta}";
            }

            public function depositar($quantia) {
                if ($quantia > 0) {
                    $this->saldo += $quantia;
                }
            }

            public function getSaldo() {
                return $this->saldo;
            }

        }

        classes/ContaPoupança.php
        <?php
        class ContaPoupança extends Conta {
            function retirar($quantia) {
                if ($this->saldo >= $quantia) {
                    $this->saldo -= $quantia;
                }
                else {
                    return false; //retirada não permitida
                }
                return true; //retirada permitida
            }
        }
        classes/ContaCorrente.php
        <?php
        class ContaCorrente extends Conta {
            protected $limite;

            public function __construct($agencia, $conta, $saldo, $limite) {
                parent::__construct($agencia, $conta, $saldo);
                $this->limite = $limite;
            }

            public function retirar($quantia) {
                if (($this->saldo + $this->limite) >= $quantia) {
                    $this->saldo -= $quantia; //retirada permitida
                } else {
                    return false; // retirada não permmitida
                }
                return true;
            }
        }
    
    Abstração
        Classes abstratas
            classes/conta.php
            <?php
            abstract class Conta {
                //...
            }
            classe_abstrata.php
            <?php
            require_once 'classes/Conta.php';
            $conta = new Conta;
            Result: 
            Fatal error: Cannot instantiate abstract class Conta...

        Classes finais
            classes/ContaPoupanca.php
            <?php
            final class ContaPoupanca extends Conta {
                // ...
            }

            classe_final.php
            <?php
            require_once 'classes/Conta.php';
            require_once 'classes/ContaPoupanca.php';

            class ContaPoupancaUniversitaria extends ContaPoupanca {
                // ...
            }
            Result: 
            Fatal error: Class ContaPoupancaUniversitaria may not inherit from final class (ContaPoupanca)...

        Métodos abstratos
            classes/Conta.php
            <?php
            abstract class Conta {
                //...
                abstract function retirar($quantia);
            }

            metodo_abstract.php
            <?php
            require_once 'classes/Conta.php';
            class ContaSalario extends Conta {
                //...
            }
            Result:
            Fatal error: Class ContaSalario contains 1 abstract method and must therefore be declared abstract or implement the remaining methos (Conta::retirar)...

        Métodos finais
            classes/ContaCorrente.php
            <?php
            class ContaCorrente extends Conta {
                //...
                public final function retirar($quantia) {
                    //...
                }
            }

            metodo_final.php
            <?php
            require_once 'classes/Conta.php';
            require_once 'Classes/ContaCorrente.php';

            class ContaCorrenteEspecial extends ContaCorrente {
                public function retirar($quantia) {
                    $this->saldo -= $quantia;
                }
            }

            Result:
            Fatal error: Cannot override final method ContaCorrente::retirar() in...
        
        Polimorfismo
            poli.php
            <?php
            require_once 'classes/Conta.php';
            require_once 'classes/ContaPoupanca.php';
            require_once 'classes/ContaConrrente.php';
    
            //criação dos objetos
            $contas = array();
            $contas[] = new ContaCorrente(6677, "CC.1234.56", 100, 500);
            $contas[] = new ContaPoupanca(6678, "PP.1234.57", 100);
    
            //percorre as contas
            foreach ($contas as $key => $conta) {
                echo "Conta: " . $conta->getInfo() . "<br>\n";
                echo "Saldo Atual: " . $conta->getSaldo() . "<br>\n";
                $conta->depositar(200);
                echo "Depósito de: 200 <br>\n";
                echo "Saldo atual: " . $conta->getSaldo() . "<br>\n";
    
                if ($conta->retirar(700)) {
                    echo "Retirada de: 700 <br>\n";
                } else {
                    echo "Retirada de: 700 (não permitida) <br>\n";
                }
    
                echo "Saldo atual: " . $conta->getSaldo() . "<br>\n";
            }
    Encapsulamento
        Public
            public.php
            <?php
            class Pessoa {
                public $nome;
                public $endereço;
                public $nascimento;
            }

            $p1 = new Pessoa;
            $p1->nome = 'Maria da Silva';
            $p1->endereço = 'Rua Bento Gonçalves';
            $p1->nascimento = '01 de Maio de 2015';
            $p1->telefone = '(51) 1234-5678'; //definida em tempo de execução, por padrão é public;

            print_r($p1);
        Private
            private.php
            <?php
            class Pessoa {
                private $nome;
                private $endereco;
                private $nascimento;
            }

            $p1 = new Pessoa;
            $p1->nome = 'Maria da Silva';
            $p1->endereco = 'Rua Bento Gonçalves';
            $p1->nascimento = '01 de Maio de 2015';

            Result:
            Fatal error: Cannot access private property Pessoa::$nome...

            private2.php
            <?php
            class pessoa {
                private $nome;
                private $endereco;
                private $nascimento;

                public function __construct($nome, $endereco) {
                    $this->nome = $nome;
                    $this->endereco = $endereco;
                }

                public function setNascimento($nascimento) {
                    $partes = explode('-', $nascimento);
                    if (count($partes)==3) {
                        if (checkdate($partes[1], $partes[2], $partes[0])) {
                            $this->nascimento = $nascimento;
                            return true;
                        }
                        return false;
                    }
                    return false;
                }
            }

            $p1 = new Pessoa('Maria da Silva', 'Rua Bento Gonçalves');

            if ($p1->setNascimento('01 de Maio de 2015')) {
                echo "Atribuiu 01 de Maio de 2015<br>\n";
            } else {
                echo "Não abribuiu 01 de Maio de 2015<br>\n";
            }

            if ($p1->setNascimento('2015-12-30')) {
                echo "Atribuiu 2015-12-30<br>\n";
            } else {
                echo "Não atribuiu 2015-12-30";
            }

            Result:
            Não atribuiu 01 de Maio de 2015
            Abribuiu 2015-12-19

        Protected
            protected.php
            <?php
            class Pessoa {
                private $nome;

                public function __construct($nome) {
                    $this->$nome;
                }
            }

            class Funcionario extends Pessoa {
                private $cargo, $salario;

                public function contrata($c, $s) {
                    if (is_numeric($s) AND $s > 0) {
                        $this->cargo = $c;
                        $this->salario = $s;
                    }
                }

                public function getInfo() {
                    return "Nome: {$this->nome}, Salário: {$this->salario}";
                }
            }

            $p1 = new Funcionario('Maria da Silva', 'Rua Bento Gonçalves');
            $p1->contrata('Auxiliar administrativo', 1600);

            echo $p1->getInfo();

            Result:
            Notice: Undefined property: Funcionario::$nome in...
            Nome: , Salário: 1600

            Para permitir que o atributo $nome devemos declarar como protected:
            protected.php
            class Pessoa {
                protected $nome;
                //...
            }

    Membros de Classe
        Como vimos anteriormente, a class é uma estrutura-padrão para criação dos objetos. Ela permite que armazenemos valores nela de duas formas: constantes de classe e propriedades estáticas. Esses atributos são comuns a todos os objetos da mesma classe.

        Constantes
            O PHP permite definir constantes globais define(). Agora veremos que ele também permite definir constantes de classe. Uma constante de classe é contida por sua classe, ou seja, podemos ter diferentes constantes de mesmo nome, porém pertencendo a classes diferentes. Neste exemplo veremos como se dá a declaração de uma constante dentro de uma classe pelo operador const.

            Constantes de classe podem ser utilizadas para declarar valores imutáveis que somente fazem sentido dentro de uma classe. No exemplo a seguir definiremos um vetor de gêneros contendo as descrições para os gêneros masculino e feminino. O método contrutor receberá as informações de nome e gênero. Enquanto o método getNome() retornará o nome, o método getNomeGenero() retornará o nome do gênero correspondente, que será obtido a partir do array contido na constante GENEROS. A constante poderá ainda ser acessada de forma externa ao contexto da classe pela sintaxe Class::CONSTANTE, e dentro da classe pela sintaxe self::CONSTANTE.
            O operador self representará a própria classe.
            
            constante_classe.php
            <?php
            class Pessoa {
                private $nome;
                private $genero;
                const GENEROS = array('M' => 'Masculino', 'F' => 'Feminino');

                public function __construct($nome, $genero) {
                    $this->nome = $nome;
                    $this->genero = $genero;
                }

                public function getNome() {
                    return $this->nome;
                }

                public function getNomeGenero() {
                    return self::GENEROS[$this->genero];
                }
            }

            $p1 = new Pessoa('Maria da Silva', 'F');
            $p2 = new Pessoa('Carlos Pereira', 'M');

            echo 'Nome:   ' . $p1->getNome() . "<br>\n";
            echo 'Genero: ' . $p1->getNomeGenero() . "<br\n>";
            echo 'Nome:   ' . $p2->getNome() . "<br\n>";
            echo 'Genero: ' . $p2->getNomeGenero() . "<br>\n";
            
            print_r(Pessoa::GENEROS);

        Atributos estáticos
            Atributos estáticos são atributos que pertencem a uma classe, não a um objeto especício; são dinâmicos como os atributos de um objeto, mas estão relacionados à classe. Como a classe é a estrutura comum a todos os objetos dela derivados, atributo estáticos são compartilhados entre todos os objetos de uma mesma classe.
            Para demonstrar a utilidade de um abtributo estático, vamos criar uma classe chamada Software. Cada objeto dessa classe terá como atributos id e nome. Além disso haverá um atributo estático chamado contador. A cada instância criada de Software, incrementaremos o atributo estático contador e verificaremos ao final da execução se ele conservou seu  valor. Um abributo estático conserva seu valor em nível de classe, ou seja, seu valor não está vinculado a um objeto específico. Enquanto para acessar atributos de objetos utilizamos a forma ($this->atributo), para acessar atributos estáticos utilizamos a forma (self::$atributo), quando acessado de dentro da classe, e a forma (Classe::$atributo), quando acessado de fora da classe. Além disso é importante declarar o modificador static na frente de seu nome.

            propriedade_estatica.php
            <?php
            class Software {
                private $id;
                private $nome;
                public static $contador;

                function __construct($nome) {
                    self::$contador ++;

                    $this->id = self::$contador;
                    $this->nome = $nome;
                    echo "Software" . $this->id . " - " . $this->nome "<br>\n";
                }
            }

            //cria novos objetos
            new Software('Dia');
            new Software('Gimp');
            new Software('Gnumeric');

            echo 'Quantidade criada = ' . Software::$contador;

            result:
            Software 1 - Dia
            Software 2 - Gimp
            Software 3 - Gnumeric
            Quantidade criada = 3


        Métodos estáticos
            Vimos como manipular um atributo estático, que é um atributo armazenado em nível de classe. Entretanto, para demonstrar o seu funcionamento, devemos declará-lo como public, o que nem sempre é uma boa opção, visto que ele pode ser acidentalmente modificado por fora da classe.
            Para manipular atributos estáticos, podemos utilizar métodos estáticos. Métodos estáticos podem inclusive ser executados diretamente a partir da classe sem a necessidade de criar um objeto para isso. Eles não devem referenciar propriedades internas pelo operador $this, pois esse operador é utilizado para referenciar instâncias da classe  (objetos), mas não a própria classe; são limitados a chamar outros métodos estático da classe ou utilizar apenas tributos estáticos. Para executar um método estático, basta utilizar a sintaxe self::metodo() de dentro da classe ou Classe::metodo() de fora dela.
            No exemplo a seguir reescreveremos o exemplo anterior, declarando o atributo estático contador como private. Como o atributo foi remarcado como private, não será mais possível acessá-lo do contexto externo à classe pela sintaxe Software::$contador, o que ocasionaria um erro do seguinte tipo:
                Fatal error: Cannot access private property Software::$contador
            Para manipularmos um atributo estático, será preciso criar um método estático. Para tal, criaremos o método getContador(). Um método estático será definido pelo modificador static na frente de seu nome.

            metodo_estatico.php
            <?php
            class Software {
                private $id;
                private $nome;
                private static $contador;

                function __construct($nome) {
                    self::$contador ++;
                    $this->id = self::$contador;
                    $this->nome = nome;
                    echo "Software " . $this->id . " - " . $this->nome . "<br>\n";
                }

                public static function getContador() {
                    return self::$contador;
                }

                //cria novos objetos
                new Software('Dia');
                new Software('Gimp');
                new Software('Gnumeric');

                echo 'Quantidade criada = ' . Software::getContador();

                result:
                Software 1 - Dia
                Software 2 - Gimp
                Software 3 - Gnumeric
                Quantidade criada = 3
            }

    Interfaces
            Para exemplificar esse conceito, vamos começar uma implementação sem o uso de interfaces para depois aplicar o conceito. Vamos então voltar para a classe Produto, que contém descricao e preco, entre outros atributos. Para implementar este exemplo, vamos adicionar um método getPreco() para retornar esse atributo. A classe Produto será utilizada principalmente para ser posteriormente agreada dentro de um orçamento, que será a próxima classe a ser criada.
            classes/Produto.php 
            <?php
            class Produto {
                private $descricao;
                private $estoque;
                private $preco;
                //...

                public function __construct($descricao, $estoque, $preco) {
                    $this->descricao = $descricao;
                    $this->estoque = $estoque;
                    $this->preco = $preco;
                }

                public function getPreco()
                {
                    return $this->preco;
            
                }
            
            }

            Um orçamento é composto de itens. Inicialmente poderemos orçar produtos. Então vamos criar uma classe Orcamento que terá uma agregação com Produto. A classe Orcamento contém um método adiciona() que recebe um objeto da classe Produto, bem como a quantidade a ser adicionada. Cada produto adicionado é acrescido ao final do vetor $itens. A classe Orcamento também contém o método calculaTotal() que retorna o total de itens incluídos no orçamento.

            classes/Orcamentos.php
            <?php
            class Orcamento {
                private $itens;

                public function adiciona(Produto $produto, $qtde) {
                    $this->itens[] = array($qtde, $produto); 
                }

                public function calculaTotal() {
                    $total = 0;
                
                    foreach ($this->itens as item) {
                        $total += ($item[0] * $item[1]->getPreco());
                    }
                    return $total;
                }
            }

            Agora vamos criar um exemplo de uso para a classe Orcamento no qual será criado um orçamento; em seguida serão inseridos alguns produtos e ao final será exibido o total do orçamento.
            orcamento.php
            <?php
            require_once 'classes/Orcamento.php';
            require_once 'classes/Produto.php';

            $o = new Orcamento;
            $o->adiciona(new Produto('Máquina de café', 10, 299), 1);
            $o->adiciona(new Produto('Babeador elétrico', 10, 170), 1);
            $o->adiciona(new Produto('Barra de chocolate', 10, 7), 3);

            print $o->calculaTotal();

            Vamos fazer algumas considerações. Em primeiro lugar, a classe Orcamento utiliza no método calculaTotal() o método getPreco() da classe Produto, ou seja, ela sabe muito a respeito da classe Produto, tendo a certeza de que a classe Produto Contém esse método. Isso caracteriza um forte acoplamento do tipo estático. Em segundo lugar, a classe orcamento somente funciona com Produto. Mas e se futuramente for possível fazer orçamento com outras coisas que não necessariamente produtos, tais como serviços? Precisamos tornar a classe Orcarnento mais flexível, podendo fazer orçamento não somente de produtos, mas também de outros itens orçáveis, ou seja, que possam fazer parte de um orçamento.
            
            Não precisamos forçar que a classe Orcamento aceite somente objetos da classe Produto. Podemos definir uma interface de comunicação. Essa interface permitirá que a classe orçamento possa receber objetos de outras classes também. Desde que esses objetos concordem com essa interface. Vamos então declarar uma interface de comunicação chamada Orcavel ou seja, interface para elementos orçaveis. Como a classe Orcamento somente precisa do método getPreco() para fazer o orçamento é esse método que colocaremos nessa interface. A figura 2.11 representa a interface de comunicação que estamos criando. De um lado é indicado que as classes Produto e Servico implementam, ou seja, fornecem a implementação do conteúdo da interface (método getPreco()). Por outro lado é indicado que a classe Orcamento consome ou necessita de algum objeto que forneça aquela interface.


            Vamos criar a interface Orcavel. Para declarar uma interface, utilizaremos o operador interface, seguido do nome a ser criado. Dentro da interface vamos declarar somente os métodos, bem como sua visibilidade (public, private) e seus parâmetros (caso existam).

            classes/Orcavel.php 
            <?php 
            interface Orcavel {
                public function getPreco();
            }

            Agora, vamos alterar as classes Produto e Servico para indicar que ambas implementam, ou seja, fornecem a implementação da classe Orcavel. Para tal, é indispensável que ambas contenham a implementação do método getPreco(), caso contrário uma falha de execução ocorrerá. Para indicar que uma classe fornecerá uma interface, utilizaremos a palavra-chave implements entre a classe e o nome da interface que ela implementa. Uma classe pode implementar várias interfaces, que devem ser separadas por vírgula.
            

            classes/Produto.php
            <?php
            class Produto implements Orcavel {
                private $descricao;
                private $estoque;
                private $preco;
                //...

                public function __construct($descricao, $estoque, $preco) {
                    $this->descricao = $descricao;
                    $this->estoque = $estoque;
                    $this->preco = $preco;
                }

                public function getPreco() {
                    return $this->preco;
                }
                //...
            }

            classe/Servico.php
            <?php class Servico implements Orcavel {
                private $descricao;
                private $preco;

                public function __construct($descricao, $preco) {
                    $this->descricao = $descricao;
                    $this->preco = $preco;
                }

                public function getPreco() {
                    return $this->preco;
                }

                //...
            }

            Podemos também reescrever a classe Orcamento, mais especificamente seu método adiciona(), para indicar que esse método não precisa mais que o parâmetro recebido seja necessariamente do tipo Produto, mas sim do tipo Orcavel. Isso mesmo, uma interface também é um tipo. Como indicamos a interface como parâmetro, significa que podemos em tempo de execução passar como parâmetro qualquer objeto que implemente essa interface (ex.: Produto, Servico). Essa nova relação entre Orcamento e Orcavel caracteriza um acoplamento do tipo dinâmico, pois é definido em tempo de execução. Acoplamento dinâmico é preferível ao estático, demonstrado anteriormente. As vantagens do uso de interfaces não param por aí. Além de diminuir o acoplamento, permite que acrescentemos novas classes que possam ser incluídas em um orçamento, sem a necessidade de reescrever a classe Orcamento. Basta criar uma nova classe que implementa a interface requerida Orcavel.
            classes/Orcamento.php 
            <?php
            class Orcamento {
                private $itens;

                public function adiciona(Orcavel $produto, $qtde) {
                    $this->itens[] = array($qtde, $produto); 
                }

                public function calculaTotal() {
                    $total = 0;
                    foreach ($this->itens as $item) {
                        $total += ($item[0] * $item[1]->getPreco());
                    }
                    return $total;
                }
            }

            Agora vamos reescrever o exemplo de uso da classe Orcamento para criar um orçamento que aceite tanto produtos quanto serviços. Veja que adicionaremos objetos das classes Produto e Servico ao método adiciona(), e o método calculaTotal() apresentará o total geral.
            orcamento2.php 
            <?php
            require_once 'classes/Orcamento.php';
            require_once 'classes/OrcavelInterface.php';
            require_once 'classes/Produto.php';
            require_once 'classes/Servico.php';

            $o = new Orcamento;
            $o->adiciona(new Produto('Máquina de café', 10, 299), 1);
            $o->adiciona(new Produto('Barbeador elétrico', 10, 170), 1);
            $o->adiciona(new Produto('Barra de chocolate', 10, 7), 3);

            $o->adiciona(new Servico('Corte de grama', 20), 1);
            $o->adiciona(new Servico('Corte de barba', 20), 1);
            $o->adiciona(new Servico('Limpeza do apto', 50), 1);

            print $o->calculaTotal();

            Caso em algum momento tivéssemos passado um objeto de outra classe para o método adiciona(), teríamos uma mensagem de erro como esta a seguir, em que CLASSE representa a classe errada passada para o método:

            Fatal error: Argument 1 passed to Orcamento::adiciona() plust inplepient interface
            Orcavel, instante of CLASSE given, called in ...
         
          Sempre que não implementarmos um método exigido por sua interface, como o método getPreco() na classe Servico, um erro será gerado, pois, ao usarmos o operador implements, a classe obriga-se a implementar os métodos indicados pela interface:
          
            Fatal error: Class Servico contains 1 abstract method and must therefore be declared  abstract or implement the remaining methods (OrcavelInterface::getPreco) in ...



        