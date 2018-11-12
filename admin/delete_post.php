<?php
if (isset($_POST['delete_post'])) {
    // Запрос на удаление поста
    $sql_delete_post ="DELETE FROM posts WHERE id = $post_id";
    // Выполняем запрос к БД
    $result_delete_post = mysqli_query($connection, $sql_delete_post);

    confirmQuery($result_delete_post);
}
?>
