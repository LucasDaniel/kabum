<?php

namespace App\Views;

class Index extends BaseView {

    public function render() {

        $title = "Index";

        self::header($title);

        echo "
        <body>
        Teste
        </body>
        ";

        self::baseScripts();

        self::footer();
    }

}