<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
         //Creamos un objeto de tipo Hasher, para hashear la contraseña de los usuarios que crearemos aquí
         $hasher = new DefaultPasswordHasher();
         //Hasheamos el password 123456 para todos los usuarios falsos
         $passwdHasheado = $hasher->hash("uxtest");
 
         //Este objeto servirá para crear datos falsos
         $faker = Faker\Factory::create();
 
         //Creamos un arreglo vacío de datos
         $data = [];
 
         for($i = 0; $i < 15; $i++)
         {
             //creamos 20 filas de datos
             //En PHP cuando los corchetes angulares están vacíos, quiere decir que el dato se agrega al final del arreglo
             $data[] = 
             [
                 'id'         => $faker->randomNumber(),
                 'first_name' => $faker->firstName(),
                 'last_name'  => $faker->lastName(),
                 'username'   => $faker->userName,
                 'password'   => $passwdHasheado,
                 'role'       => $faker->randomElement($array = array ('user','admin')),
                 'active'     => true,
                 'created'    => date("Y-m-d H:i:s"),
                 'modified'   => date("Y-m-d H:i:s")    
             ];
         }

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
