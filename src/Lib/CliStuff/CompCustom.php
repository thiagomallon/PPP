<?php

/**
 * Created by Thiago Mallon <thiagomallon@gmail.com>
 */

/**
 * @package App\Lib\CliStuff;
 */
namespace App\Lib\CliStuff;

use Composer\Script\Event;

/**
 * This class implements customized messages for install and update packages.
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
class CompCustom
{
    /**
     * Método exibe mensagem personalizada quando ocorre comando install
     * @param object $event Recebe objeto to tipo Event
     * @return void
     */
    public static function preInstall(Event $event)
    {
        $composer = $event->getIO();
        $composer->write(TxtColor::decorate(". Installing stuff", 'blue', 'lightgray')."\n\n            
            Wake up matey!\n 
            Go to the port get a few things I ordered from an old friend..\n\n".
        TxtColor::decorate("by T.Mallon", 'blue', 'black')."\n".
        "-------------------------------------------------------------\n");
    }

    /**
     * Método implementa mensagem personalizada quando finalizadas as atividades
     * geradas após comando install
     * @param object $event Recebe objeto to tipo Event
     * @return void
     */
    public static function postInstall(Event $event)
    {
        $composer = $event->getIO();
        $composer->write("\n".TxtColor::decorate(" . Stuff installed", 'blue', 'lightgray')."\n\n            
            Take a look matey! There is always\n 
            room for one more.\n\n".
        TxtColor::decorate("by T.Mallon", 'blue', 'black')."\n");
    }

    /**
     * Método exibe mensagem personalizada quando ocorre comando update
     * @param object $event Recebe objeto to tipo Event
     * @return void
     */
    public static function preUpdate(Event $event)
    {
        $composer = $event->getIO();
        $composer->write(TxtColor::decorate(". Updating stuff", 'blue', 'lightgray')."\n\n
            Hey, matey!\n            
            Go clean up this mess!\n\n".
        TxtColor::decorate("by T.Mallon", 'blue', 'black')."\n".
        "-------------------------------------------------------------\n");
    }

        /**
     * Método implementa mensagem personalizada quando finalizadas as atividades
     * geradas após comando update
     * @param object $event Recebe objeto to tipo Event
     * @return void
     */
    public static function postUpdate(Event $event)
    {
        $composer = $event->getIO();
        $composer->write("\n".TxtColor::decorate(". Stuff updated", 'blue', 'lightgray')."\n\n
            This is the right way, matey!\n
            Keep our sails clean..\n\n".
        TxtColor::decorate("by T.Mallon", 'blue', 'black')."\n");
    }

    /**
     * Método exibe mensagem personalizada quando ocorre comando dump-autoload
     * @param object $event Recebe objeto to tipo Event
     * @return void
     */
    public static function preAutoLoadDump(Event $event)
    {
        $composer = $event->getIO();
        $composer->write(TxtColor::decorate(". Dumping autoload", 'blue', 'lightgray')."\n\n 
            Damn, matey!\n
            This old map is making us navigate in circles.\n
            Go get a new map for us!\n\n".
        TxtColor::decorate("by T.Mallon", 'blue', 'black')."\n\n".
        "-------------------------------------------------------------\n");
    }
    
    /**
     * Método implementa mensagem personalizada quando finalizadas as atividades
     * geradas após comando dump-autoload
     * @param object $event Recebe objeto to tipo Event
     * @return void
     */
    public static function postAutoLoadDump(Event $event)
    {
        $composer = $event->getIO();
        $composer->write("\n".TxtColor::decorate(". Autoload dumped", 'blue', 'lightgray')."\n\n           
            Oh yes, matey!\n
            Now we are sailing like butterflies!\n\n".
        TxtColor::decorate("by T.Mallon", 'blue', 'black')."\n");
    }
}
