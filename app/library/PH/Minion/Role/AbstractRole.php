<?php
/**
 * @author Soufiane Ghzal
 * @copyright PhalconHosting
 * @license This file is licensed under the proprietary License of PhalconHosting
 * @namespace PH\Minion
 */


namespace PH\Minion\Role;


/**
 * Class RoleInterface
 * @package PH\Minion\Role
 *
 * this class aims to help to add roles routes to the api
 *
 */
abstract class AbstractRole extends \Phalcon\Mvc\Micro\Collection {


    /**
     * aims to build the routes that will be added to the application
     *
     * a short example would be :
     *
     * public function setup(){
     *
     *      $this->setHandler(new \PH\Minion\Role\WebServer\Handler());
     *
     *
     *      $this->get('/add', 'addUser');
     *
     * }
     *
     * dont use $this->setPrefixe() it will be overwritten by the content  of $this->getName()
     *
     */
    public abstract function setup();


}