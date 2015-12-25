<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Model;

use \App\User as User;
use \App\Publication as Publication;
use \App\Subject as Subject;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		#$this->call('UserTableSeeder');
                #$this->call('PublicationTableSeeder');
                $this->call('SubjectTableSeeder');
	}

}

class UserTableSeeder extends Seeder {
    public function run()
    {
        $faker = Faker::create('ru_RU');
        DB::table('users')->truncate();
        for($i = 1; $i <= 20; $i++)
        {
            User::create([
                'login' => 'nikname_'.$i,
                'password' => '098f6bcd4621d373cade4e832627b4f6',    //'test'
                'name' => $faker->firstNameFemale,
                'surname' => $faker->lastName,
                'lastname' => 'Отчество-'.$i,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'foto' => $faker->image(),
                'birthday' => $faker->date('Y-m-d', '1986-08-02'),
                'zipcode' => $faker->postcode,
                'address' => $faker->address,
                'institution' => $faker->company,
                'position' => 'учитель математики-'.$i,
                'status' => '1',
                'is_premium' => $faker->boolean(85),
                'is_blocked' => $faker->boolean(90)
                /*
                'login' => 'nikname_'.$i,
                'password' => '098f6bcd4621d373cade4e832627b4f6',    //'test'
                'name' => 'Имя-',
                'surname' => 'Фамилия-',
                'lastname' => 'Отчество-',
                'email' => $i.'83420@mail.ru',
                'phone' => '+79201234567',
                'birthday' => '1980-05-03',
                'zipcode' => '123456',
                'address' => 'г.Зареченск, ул.Тенистая, дом 8, кв.'.$i,
                'institution' => 'Зареченская СОШ-'.$i,
                'position' => 'учитель математики-'.$i,
                'status' => '1',
                'is_premium' => '1',
                'is_blocked' => '0'
                 */
            ]);
        }
    }
}

class PublicationTableSeeder extends Seeder {
    public function run() 
    {
       $faker = Faker::create('ru_RU');
       DB::table('publications')->truncate();
       for ($i = 1; $i <= 50; $i++)
       {
            Publication::create([
                'user_id' => $faker->numberBetween(1, 20),
                'subjects' => $faker->numberBetween(1, 10),
                'keywords' => 'русский язык, литература-'.$i,
                'prefix' => 'методическая разработка-'.$i,
                'title' => 'Развитие коммуникативных навыков на уроке-'.$i,
                'description' => $faker->paragraph(4, true),
                'bodytype' => '1',
                'body' => $faker->text,
                'mediafile' => '',
                'mediatype' => '',
                'appendix_status' => $faker->numberBetween(0 ,1),
                'apendix_files' => 'file-'.$i.'.jpg, file-'.$i.'.pptx',
                'cert_background' => 'bcgr1.jpg'
                /*
                'user_id' => '1',
                'subjects' => '1',
                'keywords' => 'русский язык, литература-'.$i,
                'prefix' => 'методическая разработка-'.$i,
                'title' => 'Развитие коммуникативных навыков на уроке-'.$i,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'bodytype' => '1',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'mediafile' => '',
                'mediatype' => '',
                'appendix_status' => '1',
                'apendix_files' => 'file-'.$i.'.jpg, file-'.$i.'.pptx',
                'cert_background' => 'bcgr1.jpg'
                 */
            ]);
       }
    }   
}

class SubjectTableSeeder extends Seeder
{
    public function run() {
        $faker = Faker::create('ru_RU');
        DB::table('subjects')->truncate();
        Subject::create([
            'subject'=>'Биология',
            'status'=>1
        ]);
        Subject::create([
            'subject'=>'География',
            'status'=>1
        ]);
        Subject::create([
            'subject'=>'Иностранный язык',
            'status'=>1
        ]);
        Subject::create([
            'subject'=>'Информатика и ИКТ',
            'status'=>1
        ]);
        Subject::create([
            'subject'=>'Искусство',
            'status'=>1
        ]);
        Subject::create([
            'subject'=>'История',
            'status'=>1
        ]);
        Subject::create([
            'subject'=>'Литература',
            'status'=>1
        ]);
        Subject::create([
            'subject'=>'Математика',
            'status'=>1
        ]);
        Subject::create([
            'subject'=>'ОБЖ',
            'status'=>1
        ]);
        Subject::create([
            'subject'=>'Обществознание',
            'status'=>1
        ]);
        Subject::create([
            'subject'=>'Окружающий мир',
            'status'=>1
        ]);
        Subject::create([
            'subject'=>'Природоведение',
            'status'=>1
        ]);
        Subject::create([
            'subject'=>'Русский язык',
            'status'=>1
        ]);
        Subject::create([
            'subject'=>'Технология',
            'status'=>1
        ]);
        Subject::create([
            'subject'=>'Физика',
            'status'=>1
        ]);
        Subject::create([
            'subject'=>'Физическая культура',
            'status'=>1
        ]);
        Subject::create([
            'subject'=>'Химия',
            'status'=>1
        ]);
    }
}