<?php

/**
 * Created by Thiago Mallon <thiagomallon@gmail.com>
 */

/**
 * @subpackage App\Lib\CliStuff
 */
namespace App\Lib\CliStuff;

/**
 * Classe implementa comando de criação de classe de teste, pelo phpunit skeleton generator, porém,
 * via php cli, para maior agilidade na criação de skeletons de teste. Para essa classe, as questões
 * de namespace e path foram feitas de forma que atendem exclusivamente às necessidades desse projeto,
 * sendo ignorada a necessidade evidente de um adapter, para tornar as especificações mais generalizadas,
 * ou até o recebimento de mais parâmetros pela função.
 *
 * Comando gerado:
 *
 * phpunit-skelgen generate-test --bootstrap="path/bootstrap.php"
 * "namespace\of\class" path/of/class/Class.php
 * "namespace\of\testclass\classtest" path/of/testclass/ClassTest.php
 *
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
final class PSkelG
{
    /**
     * Método construtor, declarado private, para evitar-se instâncias. Classe criada para cli
     * @return void
     */
    private function __construct()
    {
    }

    /**
     * Método trata namespace e transforma-o em path.
     * @param string Namespace da classe a ser gerado teste
     * @return string Path da classe
     */
    protected static function treatClassPath($classNmp)
    {
        $classPath = explode("\\", $classNmp);
        $path = 'src';
        foreach ($classPath as $cp) {
            if ($cp == 'App') {
                continue;
            }
            $path .= '/'.$cp;
        }
        return $path.'.php';
    }

    /**
     * Método trata namespace da classe e trasforma-o em namespace da classe de teste e path da
     * classe de teste
     * @param string Namespace da classe a ser gerado teste
     * @return string Namespace e path da classe de teste
     */
    protected static function treatTestClassPath($classNmp)
    {
        $testClassNamespace = '"'.str_replace('App', 'Test', $classNmp)."Test".'"';
        $testClassPath = explode("\\", $classNmp);
        $testPath = 'test';
        foreach ($testClassPath as $tcp) {
            if ($tcp == 'App') {
                continue;
            }
            $testPath .= '/'.$tcp;
        }
        return $testClassNamespace.' '.$testPath.'Test.php';
    }

    /**
     * Método executa comando de geração de classe de teste, segundo os parâmetros
     * passados ao arquivo.
     * @param array Dados passados ao arquivo, através da linha de comando
     * @return string Mensagem de retorno da função shell_exec()
     */
    public static function namespaced($comm)
    {
        $classPath = self::treatClassPath($comm[2]);
        $testClassStuff = self::treatTestClassPath($comm[2]);

        return shell_exec("phpunit-skelgen generate-test --bootstrap=\"test/bootstrap.php\"".
            " \"$comm[2]\" $classPath ".
            "$testClassStuff ");
    }
}

/*
 * Espera-se comando assim como:
 *
 * php data/streams/PSkelG.php namespaced App\\InputOutput\\PageContentTaker
 *
 * ou, pelo atalho na raiz (skelgen)
 *
 * php skelgen namespaced App\\InputOutput\\PageContentTaker
 */
print_r(PSkelG::{$argv[1]}($argv));
