<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="250" alt="Laravel Logo"></a></p>



## Passos da criação de um Seeder:

- **Criar um seeder para cada entidade do banco** 

   _php artisan make:seeder UserSeeder_
 
 - **Dentro do método run criar um array com valores**
 
      _User::create([_ 

     _'name' => 'Fulano de Tal',_ 

     _'email' => '[fulano@email.com]()',_ 

     _'password' => Hash::make('1234')_ 

     _]);_ 
     
  - **Em DatabaseSeeder no método run(), fazer a chamada do UserSeed:** 
  
      _$this->call([_ 

      _UserSeed::class_ 

      _]);_

## Criar um Factory

- **Execute o comando:**

    _php artisan make:factory ExemploFactory_

- **Dentro da função definition acrescente os dados para o retorno. Exemplo:**

    _return [_ 

    _'title' => $this->faker->text(20),_  

    _'color' => $this->faker->safeHexColor(),_

    _'user_id' => 2_ 

    _];_ 
    
 - **Em DatabaseSeeder importe os devidos Models, e execute o factory com a quantidade de dados. Exemplo:**
    
    _ExemploFactory::factory(10)->create();_
    
 - **Agora rode o comando seeder para gerar os dados no banco:**
 
   _php artisan db:seed_

<img src="https://user-images.githubusercontent.com/67653921/232567658-4e0a3ddb-51e1-4574-9e57-b2a722bfd664.png">

    
 

