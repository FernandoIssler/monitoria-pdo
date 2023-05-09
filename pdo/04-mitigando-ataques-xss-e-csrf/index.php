<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("06.10 - Mitigando ataques XSS e CSRF");

require __DIR__ . "/../source/Core/Connect.php";

use Source\Core\Connect;

/*
 * [ XSS ] Cross-Site Scripting
 * https://pt.wikipedia.org/wiki/Cross-site_scripting
 */

fullStackPHPClassSession("xss", __LINE__);

if ($_POST) {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
    if ($post) {
        $data = (object)$post;
        var_dump($post, $data);
    }

    //Inseriri dados
    $stmt = Connect::getInstance()->prepare("
    INSERT INTO users (first_name, last_name, email, document) 
    VALUE(:first_name, :last_name, :email, :document)
");

    $stmt->bindParam(":first_name", $data->first_name, PDO::PARAM_STR);
    $stmt->bindParam(":last_name", $data->last_name, PDO::PARAM_STR);
    $stmt->bindParam(":email", $data->email, PDO::PARAM_STR);
    $stmt->bindParam(":document", $data->document, PDO::PARAM_STR);

    $stmt->execute();
    var_dump($stmt->rowCount());
}

/*
 * [ CSRF ] Cross-Site Request Forgery
 * https://pt.wikipedia.org/wiki/Cross-site_request_forgery
 */
fullStackPHPClassSession("csrf", __LINE__);

//Não será explicado nessa monitoria

/*
 * [ form ]
 */
fullStackPHPClassSession("form", __LINE__);

require __DIR__ . "/form.php";
