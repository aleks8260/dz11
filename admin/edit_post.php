<?php
if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];
    $post_sql = "SELECT * FROM posts WHERE id = $post_id";
    $post_query = mysqli_query($connection, $post_sql);
    confirmQuery($post_query);

    foreach ($post_query as $post) {
        $title = $post['title'];
        $content = $post['content'];
        $date = $post['date'];
        $tags = $post['tags'];
        $status = $post['status'];
        $content = $post['content'];
        $image_name = $_FILES['image']['name']; // для записи в БД
        // по аналогии далее
    }
}


// Если нажата кнопка, выполняем обновление поста
if (isset($_POST['update_post'])) {

    // Получаем данные из формы и записываем в переменные
    $title = $_POST['title'];
    $category_id = $_POST['category_id'];
    $author = $_POST['author'];
    $date = date('d-m-Y');
    $tags = $_POST['tags'];
    $status = $_POST['status'];
    $content = $_POST['content'];
    $image_name = $_FILES['image']['name']; // для записи в БД
    $image_tmp = $_FILES['image']['tmp_name']; // для записи на диск

    if(empty($image_name)) {
        $sql_image_select = "SELECT * FROM posts";
        $post_query_image = mysqli_query($connection, $sql_image_select);

        foreach ($post_query_image as $image) {
            $image_name = $image['image'];
        }

    }
    // Запрос на обновление поста
    $sql_update_post ="UPDATE posts SET title = '$title', category_id = '$category_id', author = '$author', date = now(), tags = '$tags', content = '$content', status = '$status' WHERE id = $post_id";
    // Выполняем запрос к БД
    $result_updating_post = mysqli_query($connection, $sql_update_post);

    confirmQuery($result_updating_post);

    $destiation_dir = dirname("../images") .'/'.$_FILES['image']['name']; // Директория для размещения файла (не удается засунуть в данную папку)
    move_uploaded_file($_FILES['image']['tmp_name'], $destiation_dir ); // Перемещаем файл в желаемую директорию
}


?>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">
            Title
        </label>
        <input type="text" name="title" class="form-control" value="<?= $title; ?>">
    </div>
    <div class="form-group">
        <label for="">
            Category
        </label>
        <select name="category_id" id="" class="form-control">
            <?php
            $sql_cat = "SELECT * FROM categories";
            $cat_query = mysqli_query($connection, $sql_cat);
            confirmQuery($cat_query);
            foreach ($cat_query as $category) {
                echo "<option value=". $category['id'].">".$category['title']."</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">
            Author
        </label>
        <input type="text" name="author" class="form-control" value="<?= $content?>">
    </div>
    <div class="form-group">
        <label for="">
            date
        </label>
        <input type="text" name="date" class="form-control" value="<?= $date?>">
    </div>
    <div class="form-group">
        <label for="">
            Tags
        </label>
        <input type="text" name="tags" class="form-control" value="<?= $tags?>">
    </div>
    <div class="form-group">
        <img src="../images/<?= $image_name?>" alt="" width="100">
        <label for="">
            File
        </label>
        <input type="file" name="image" class="form-control" value="<?= $image_name?>">
    </div>
    <div class="form-group">
        <label for="">
            Status
        </label>
        <input type="text" name="status" class="form-control" value="<?= $status?>">
    </div>
    <div class="form-group">
        <label for="">
            Content
        </label>
        <textarea name="content" class="form-control"><?= $content?></textarea>
    </div>
    <input type="submit" class="btn btn-primary" name="update_post" value="Отредактировть пост">
</form>
