<?php

namespace Wpadmin\Shell;

use Cake\Console\Shell;
use Cake\ORM\TableRegistry;

/**
 * Admin shell command.
 */
class AdminShell extends Shell {

    public function initialize() {
        parent::initialize();
    }

    /**
     * main() method.
     *
     * @return bool|int Success or error code.
     */
    public function main() {
        $this->info('Hello world.Welcome use visonforcoding Admin Plugin');
        $this->info('I am your admin helper');
        $this->info("You can create a superadmin by use command '"
                . "bin/cake admin create_super_admin'");
    }

    public function createSuperAdmin() {
        $username = $this->in('please enter a username:');
        $password = $this->in('please enter the password: ');
        $adminTable  = TableRegistry::get('Wpadmin.Admin');
        $admin = $adminTable->newEntity();
        $admin->username = $username;
        $admin->password = $password;
       
        if( $adminTable->save($admin)){
            $this->out('Congratulations,the admin account has been created!You can login the admin manager site now.');
        }
    }

}
