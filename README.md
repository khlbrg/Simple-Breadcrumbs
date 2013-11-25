## Simple Breadcrumbs for Laravel 4


This is a package for Laravel 4.

###Add to your laravel project

Install by adding to yur composer.json

    "ekhaga/breadcrumbs": "dev-master"


    'providers' => array(
        ...,
        'Ekhaga\Breadcrumbs\BreadcrumbsServiceProvider'
    )

    'aliases' => array(
        ...,
        'Breadcrumbs'     => 'Ekhaga\Breadcrumbs\Facades\Breadcrumbs'
    )


**Add an item**

    Breadcrumbs::addCrumb('Home', '/');

**Enable divider**

    Breadcrumbs::enableDivider();

**Set divider character**

    Breadcrumbs::setDivider('&rarr;');

**Set a css class to the list**

    Breadcrumbs::setCssClass('yourclass')

**Render the crumbs**
This will render the crumbs in a ul list if there is any crumbs

    Breadcrumbs::render()

**Get all crumbs**
This function will return all breadcrumbs in an array

    Breadcrumbs::getAllCrumbs()
