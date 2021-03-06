# Laravel-Pract
Laravel Practise Code

1) Laravel Setup
     
First, download the Laravel installer using Composer:

        $ composer global require laravel/installer

Make sure to place Composer's system-wide vendor bin directory in your $PATH so the laravel executable can be located by your system. This directory exists in different locations based on your operating system; however, some common locations include:

macOS: $HOME/.composer/vendor/bin
Windows: %USERPROFILE%\AppData\Roaming\Composer\vendor\bin
GNU / Linux Distributions: $HOME/.config/composer/vendor/bin or $HOME/.composer/vendor/bin
You could also find the composer's global installation path by running composer global about and looking up from the first line.

Once installed, the laravel new command will create a fresh Laravel installation in the directory you specify. For instance, laravel new blog will create a directory named blog containing a fresh Laravel installation with all of Laravel's dependencies already installed:
     
        $ composer global require laravel/installer

Source: [Laravel DOCS](https://laravel.com/docs/8.x/installation)

2) Create Project
   
        $ laravel new [project-name]
   
            
3) Laravel Database.
4) Laravel Views.
    
        a) Views.
        b) Dynamic Views.

5) Forms
        
        # CREATE a CONTROLLER WITH RESOURCE and Model
        
        $ php artisan make:controller ProjectController -r -m Project
        # -r stands for resource
        
        
        # Requests GET, POST,PUT, PATCH, DELETE
        # GET for Viewing 
        # POST for SAVE
        # PUT for UPDATE
        # DELETE for DELETE
        
        # GET /articles
        # GET /articles/:id
        # POST /articles  <- save a new article
        # PUT /articles/:id <- update existing article
        # DELETE /article/:id/ <- delete artice by id

6) Eloquent Models:
     
     Error Solution:
     PHP Fatal error:  Call to undefined function factory() in Psy Shell code on line 1
        Run This  
        
        $ Thread::factory()->count(50)->create();  
        
     instead of:
     
         $ factory('App\Thread'::class)-create()

7) Authentication 
     
     Building a Regestration System in Laravel
     
     First party package through composer  
     
          $ composer require laravel/ui --dev 
          $ php artisan ui bootstrap --auth  # you can use vue and react as well instead of bootstrap
          $ npm install && npm run dev
          
    Above commands will add all the login dependecies and also add dashboard.      
    If you need to view all the rotes simply run 
          
          $ php artisan route:list
          
          
          
                       
