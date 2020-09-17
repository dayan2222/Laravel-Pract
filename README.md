# Laravel-Pract
Laravel Practise Code

1) Laravel Database.
2) Laravel Views.
    
        a) Views.
        b) Dynamic Views.
3) Forms
        
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
