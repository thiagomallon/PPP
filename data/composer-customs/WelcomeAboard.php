<?php

/**
 * Created by Thiago Mallon <thiagomallon@gmail.com>
 */

/**
 * @package ComposerCustoms;
 */
namespace ComposerCustoms;

use Composer\Script\Event;

/**
 * This class implements customized messages for install and update packages.
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
class WelcomeAboard
{
    /**
     * Método exibe mensagem personalizada quando ocorre comando install
     * @param object $event Recebe objeto to tipo Event
     * @return void
     */
    public static function preInstall(Event $event)
    {
        $composer = $event->getIO();
        $composer->write(". Installing stuff\n\n            
            Wake up matey!\n 
            Go to the port get a few things I ordered from an old friend..\n\n\n");
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
        $composer->write("\n . Stuff installed\n\n            
            Take a look matey! There is always\n 
            room for one more.\n\n\n");
    }

    /**
     * Método exibe mensagem personalizada quando ocorre comando update
     * @param object $event Recebe objeto to tipo Event
     * @return void
     */
    public static function preUpdate(Event $event)
    {
        $composer = $event->getIO();
        $composer->write(". Updating stuff\n\n            
            Hey, matey!\n            
            Go clean up this mess!\n\n\n");
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
        $composer->write("\n. Stuff updated\n\n            
            This is the right way, matey!\n
            Keep our sails clean..\n\n\n");
    }

    /**
     * Método exibe mensagem personalizada quando ocorre comando dump-autoload
     * @param object $event Recebe objeto to tipo Event
     * @return void
     */
    public static function preAutoLoadDump(Event $event)
    {
        $composer = $event->getIO();
        $composer->write(". Dumping autoload\n\n 
            Damn, matey!\n
            This old map is making us going in circles.\n
            Go get a new map for us!\n\n\n");
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
        $composer->write("\n. Autoload dumped\n\n           
            Oh yes, matey!\n
            Now you are sailing like a butterfly!\n\n\n");
    }
}
