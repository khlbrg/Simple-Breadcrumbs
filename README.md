## Simple Breadcrumbs for Laravel 4


This is a package for Laravel 4.

###Add to your laravel project

Install by adding to yur composer.json

    "ekhaga/breadcrumbs": "dev-master"


    'providers' => array(
        ...,
        'Oak\Breadcrumbs\BreadcrumbsServiceProvider',
    )

    May skip this and just import/use it in the controller.

    'aliases' => array(
        ...,
        'Breadcrumbs'     => 'Oak\Breadcrumbs\Facades\Breadcrumbs'
    )


**Add an item**

    Breadcrumbs::add('Home', '/');

**Enable divider**

    Breadcrumbs::enableDivider();

**Set divider character**

    Breadcrumbs::setDivider('&rarr;');

**Set a css class to the list**

    Breadcrumbs::cssClass('yourclass')

**Render the crumbs**
This will render the crumbs in a ul list if there is any crumbs

    Breadcrumbs::render()

**Get all crumbs**
This function will return all breadcrumbs in an array

    Breadcrumbs::all()


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/andene/simple-breadcrumbs/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

