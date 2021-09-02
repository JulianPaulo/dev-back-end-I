<?php
class ExemploStatic
{
    public static $vontagem = 220; //Valor estático ou constante, não se altera

    public function valorEstatico(){
        return self::$vontagem; //acessamos o atributo estático por meio da palavra reservada self.

        /*
        O self
        serve para acessar propriedades da classe dentro dela mesma, ou seja, para todas
        as instâncias, só existirá um único valor, já que a propriedade é de classe
        */
    }
}
