<?php

namespace App\Views;

class BaseView {

    protected function init($title) {

        $urlLibrary = 'src/Library/';

        return [
            'libraryAdminLte' => $urlLibrary.'admin-lte/',
            'libraryCss' => $urlLibrary.'css/',
            'libraryJs' => $urlLibrary.'js/',
            'title' => $title,
            'css' => strtolower($title),
            'js' => strtolower($title),
        ];

    }

}
