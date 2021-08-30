<?php

class Aluno
{
    private $matricula;
    public $nome;
    private $notas; //no. Note que o atributo notas (private $notas;), por enquanto, é um atributo
    // comum da classe, contudo ele deverá ser um array de quatro posições.

    function __construct($matricula, $nome)
    {
        // dentro do construtor, estamos inicializando um array dinâmico no atributo $this->notas = array();, para que seja
        //possível adicionar as notas do aluno. Ainda, não limitaremos a quantidade de notas.
        $this->notas = array();
        $this->matricula = $matricula;
        $this->nome = $nome;
    }

    public function setNotas($nota): int
    {
        /*
         Este método recebe a nota do aluno, realiza todo o
        processamento e devolve um número do tipo inteiro. Dentro do método, estamos fazendo uma condição if(count($this->notas) < 4) para
        verificar se a quantidade de notas não atingiu o limite de quatro alunos. s. Caso
        não tenha atingido, setamos o valor dentro do array, e, como ele é dinâmico,
        o próprio PHP trata de controlar o seu índice. Caso já tenha atingido o limite
        de quatro notas, retornamos um valor 0.
        */
        if (count($this->notas) < 4) {
            $this->notas[] = $nota;
            return 1;
        } else
            return 0;
    }

    public function obterNotas()
    {
        /*
        Continuando na classe Aluno, implementamos o método public function obterNotas(). Nele, fizemos um foreach que percorre o array e imprime as notas */
        foreach ($this->notas as $pos => $nota) {
            echo "</br>Nota [" . ($pos + 1) . "]= " . $nota;
        }
    }
    public function obterMedia(): float
    {
        /*
        Por fim, implementamos o método public function obterMedia():-
        float, que retornará um valor float (real). Esse método, por meio de um laço de
        repetição, percorre o array e acumula a soma das notas do aluno. Terminando o
        laço de repetição, calcula-se a média do respectivo aluno.
        */
        $soma = 0;
        for ($i = 0; $i < count($this->notas); $i++) {
            $soma += $this->notas[$i];
        }
        $media = $soma / count($this->notas);
        return $media;
    }
}
