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

*Enable divider*

    Breadcrumbs::enableDivider();

*Set divider character*

    Breadcrumbs::setDivider('&rarr;');