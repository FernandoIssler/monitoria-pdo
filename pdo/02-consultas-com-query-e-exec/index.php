<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("PDO - Consultas com query e exec");

require __DIR__ . "/../source/Core/Connect.php";

use Source\Core\Connect;

/*
 * [ insert ] Cadastrar dados.
 * https://mariadb.com/kb/en/library/insert/
 *
 * [ PDO exec ] http://php.net/manual/pt_BR/pdo.exec.php
 * [ PDO query ]http://php.net/manual/pt_BR/pdo.query.php
 */

fullStackPHPClassSession("insert", __LINE__);

// $insert = "
//     INSERT INTO users (first_name, last_name, email, document)
//     VALUES ('Fernando', 'Issler', 'fernandoissdler@hotmail.com', '12345678');
// ";

// try {
//     $exec = Connect::getInstance()->exec($insert);
//     var_dump(Connect::getInstance()->lastInsertId());
//     // $exec = null;

//     // $query = Connect::getInstance()->query($insert);
//     // var_dump(Connect::getInstance()->lastInsertId());

//     var_dump(
//         $exec,
//         // $query->errorInfo()
//     );
// } catch (PDOException $exception) {
//     var_dump($exception);
// }


/*
 * [ select ] Ler/Consultar dados.
 * https://mariadb.com/kb/en/library/select/
 */
fullStackPHPClassSession("select", __LINE__);

// try {
//     $select = "SELECT * FROM users";
//     $query = Connect::getInstance()->query($select);
//     var_dump([
//         $query,
//         $query->rowCount(),
//         $query->fetchAll()
//     ]);
// } catch (PDOException $exception) {
//     var_dump($exception);
// }

/*
 * [ update ] Atualizar dados
 * https://mariadb.com/kb/en/library/update/
 */
fullStackPHPClassSession("update", __LINE__);

// try {
//     $update = "UPDATE users SET first_name = 'Fernando', last_name = 'Issler' WHERE id = '1'";
//     $exec = Connect::getInstance()->exec($update);

//     var_dump($exec);
// } catch (PDOException $exception) {
//     var_dump($exception);
// }

/*
 * [ delete ] Deletar dados.
 * https://mariadb.com/kb/en/library/delete/
 */
fullStackPHPClassSession("delete", __LINE__);

// try {
//     $delete = "DELETE FROM users WHERE id > 50";
//     $exec = Connect::getInstance()->exec($delete);

//     var_dump($exec);
// } catch (PDOException $exception) {
//     var_dump($exception);
// }
