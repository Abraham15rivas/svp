<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Person;
use App\Office;
use App\Area;
use App\ManagingDirector;
use App\LineDirector;
use App\Supervisor;
use App\Employee;
use App\UserDay;
use App\Holiday;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Role::class, 1)->create(['name'=>'Root']);
        factory(Role::class, 1)->create(['name'=>'Superadmin']);
        factory(Role::class, 1)->create(['name'=>'DirectorG']);
        factory(Role::class, 1)->create(['name'=>'DirectorL']);
        factory(Role::class, 1)->create(['name'=>'Supervisor']);
        factory(Role::class, 1)->create(['name'=>'Analista']);
        factory(Role::class, 1)->create(['name'=>'Empleado']);

        factory(Person::class, 1)->create(['name'=>'root', 'card_id'=>'12345678', 'extension'=>'1234','phone'=>'04261234567','date_admission'=>'2019-04-12'])
        ->each(function (Person $p){
            factory(User::class,1)->create(['person_id'=>$p->id,'username'=>'root','email'=>'root@gmail.com','password'=>bcrypt('123456'),'role_id'=>Role::ROOT,'state'=>User::AVAILABLE]);
        });
        factory(Office::class,1)->create(['name'=>'Oficina de Tecnologia informacion y comunicacion','acronimo'=>'OTIC'])
        ->each(function(Office $o){
            factory(Area::class,1)->create(['office_id'=>$o->id,'name'=>'Automatizacion de procesos']);
            factory(Area::class,1)->create(['office_id'=>$o->id,'name'=>'Soporte tecnico']);
            factory(Area::class,1)->create(['office_id'=>$o->id,'name'=>'Redes']);

            factory(Person::class, 1)->create(['name'=>'Carlos Berbeci', 'card_id'=>'12345679', 'extension'=>'1234','phone'=>'04261234567','date_admission'=>'2010-03-12'])
            ->each(function (Person $p){
                factory(User::class,1)->create(['person_id'=>$p->id,'username'=>'carlos21','email'=>'carlos@gmail.com','password'=>bcrypt('123456'),'role_id'=>Role::DIRECTOR_GENERAL,'state'=>User::AVAILABLE])
                ->each(function (User $u){
                    factory(ManagingDirector::class,1)->create(['user_id'=>$u->id]);
                });
            });

            //usuario DL
            factory(Person::class, 1)->create(['name'=>'Jose perez', 'card_id'=>'87654321', 'extension'=>'1234','phone'=>'04261234567','date_admission'=>'2010-03-12'])
            ->each(function (Person $p){
                factory(User::class,1)->create(['person_id'=>$p->id,'username'=>'jose21','email'=>'jose@gmail.com','password'=>bcrypt('123456'),'role_id'=>Role::DIRECTOR_LINEA,'state'=>User::AVAILABLE])
                ->each(function (User $u){
                    factory(LineDirector::class,1)->create(['user_id'=>$u->id]);
                });
            });

            factory(Person::class, 1)->create(['name'=>'Carmen Ruiz', 'card_id'=>'1234987', 'extension'=>'1234','phone'=>'04261234567','date_admission'=>'2010-03-12'])
            ->each(function (Person $p){
                factory(User::class,1)->create(['person_id'=>$p->id,'username'=>'carmen21','email'=>'carmen@gmail.com','password'=>bcrypt('123456'),'role_id'=>Role::SUPERVISOR,'state'=>User::AVAILABLE])
                ->each(function (User $u){
                    factory(Supervisor::class,1)->create(['user_id'=>$u->id]);
                });
            });

            factory(Person::class,1)->create(['name'=>'alexey rojas', 'card_id'=>'59876542', 'extension'=>'1234','phone'=>'04261234567','date_admission'=>'2010-03-15'])
            ->each(function(Person $p){
                factory(User::class)->create(['person_id'=>$p->id,'username'=>'alexey21','email'=>'alexey@gmail.com','password'=>bcrypt('123456'),'role_id'=>Role::EMPLEADO,'state'=>User::AVAILABLE])
                ->each(function (User $u){
                    factory(Employee::class,1)->create(['user_id'=>$u->id]);
                    factory(UserDay::class,1)->create(['user_id'=>$u->id]);
                });
            });

        });
        //factorizacion oficina de gestion humana
        factory(Office::class,1)->create(['name'=>'Oficina de Gestion Humana','acronimo'=>'OGH'])
            ->each(function(Office $o){
                factory(Person::class, 1)->create(['name'=>'Maria Teresa', 'card_id'=>'12345679', 'extension'=>'1234','phone'=>'04261234567','date_admission'=>'2010-03-12'])
                ->each(function (Person $p){
                    factory(User::class,1)->create(['person_id'=>$p->id,'username'=>'maria12','email'=>'maria@gmail.com','password'=>bcrypt('123456'),'role_id'=>Role::SUPERADMIN,'state'=>User::AVAILABLE])
                    ->each(function (User $u){
                        factory(ManagingDirector::class,1)->create(['user_id'=>$u->id]);
                });
            });
        });

        factory(Holiday::class,3)->create(['employee_id'=>5,'directorg_id'=>1]);
    }
}
