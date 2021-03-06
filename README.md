# laravel-crud
Crud Operations for Laravel

[![Code Climate](https://codeclimate.com/github/ujwaldhakal/coding_task)](https://codeclimate.com/github/ujwaldhakal/coding_task)

```
$ composer require developernaren/laravel-crud
```
Note: This pacakage is still not a stable package, hence not suitable for production.

```
DeveloperNaren\Crud\Providers\CrudServiceProvider::class
```
add this line to the service providers list in app.config.php and that's it.

```
$ php artisan vendor:publish
```

To copy the config file to your config directory

I am making this package highly customizable. A lof of options in this package can be customized through the config file.

```
$ php artisan crud:whole
```

This command asks two questions
- What entity are you trying to create crud for?
  The answer should be the entity name. Eg: category
- Fields string in format <field>:<type> separated by comma(,)
  Field and Type separated by comma. Eg: name:str,description:text

This command generates controller, model, request, create view, list view, migration files.

If you do not have to generate all the files, You can generate things individually

```
$ php artisan crud:controller <entity>
```
This generates controller for the given entity

```
$ php artisan crud:model <entity> <field string>
```
This generats model for the given entity with fillable

We can also generate relations this package. The supplied format to support realtions

`<field>:fr-<foreigntable>.<foreign field>` for not null foreign keys

`<field>:nlfr-<foreigntable>.<foreign field>` for nullable foreign keys

The foreign keys are made generic to support migration and relation.
 
 `$  php artisan crud:model blog name:str,author_id:nlfr-users.id` 
 
 This command will generate a method
 
 ```
 function user() {
    $this->belongsTo( 'User' );
 } 
 ```
 
 in Blog.php
 
 Meaning a blog belongs to a user


```
$ php artisan crud:view <entity> <field string>
```
This generates create.blade.php and list.blade.php for the given entity with the fields

This module can now generate input, textarea, select, radio, checkbox based on the fields provided

```
$ php artisan crud:request <entity> <field string>
```
This generates FormRequest class for the add form

```
$ php artisan request:migration <entity> <field string>
```
This generates migration for the given entity with the mentioned fields

We can also generate foreign keys through this package. The supplied format to support foreign keys should be

`<field>:fr-<foreigntable>.<foreign field>` for not null foreign keys

`<field>:nlfr-<foreigntable>.<foreign field>` for nullable foreign keys

We can also provide path for the migration to be created at in config file.

Todos:

- Make the template dynamic
- List the replacable template variables so that user can create custom templates for the generated files
- Support foreign leys for migrations


















