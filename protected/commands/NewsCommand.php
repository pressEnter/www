<?php

class NewsCommand extends CConsoleCommand {

  public function actionIndex() {
    printf("\n == Administrador de noticias ==\n\n");
    echo $this->getHelp();
  }

  public function actionList() {
    ini_set('date.timezone', 'America/Argentina/Buenos_Aires');
    $posts = Post::model()->findAll();
    printf("\n");
    if (count($posts) > 0) {
      foreach ($posts as $post) {
        printf("|%d|%s|%s|%s\n", $post->id, date("d/m/Y", strtotime($post->published_date)), $post->category->description, $post->title);
      }
    } else {
      printf("No hay ningun post.\n");
    }
    printf("\n");
  }

  public function actionAdd() {
    ini_set('date.timezone', 'America/Argentina/Buenos_Aires');

    $fecha = $this->prompt("Fecha (Enter: fecha de actual)?");
    if ($fecha == '') {
      $fecha = 'now';
    } else {
      list ($d, $m, $a) = explode('-', str_replace('/', '-', $fecha));
      $fecha = "$a-$m-$d";
    }
    $fecha = new DateTime($fecha);
    $categorias = PostCategory::model()->findAll();
    printf("\nCategorias: \n");
    foreach ($categorias as $categoria) {
      printf("%d - %s\n", $categoria->id, $categoria->description);
    }
    $cat = $this->prompt("Categoria? ");
    $title = $this->prompt("Titulo?");

    $tmp_name = tempnam(sys_get_temp_dir(), 'news');

    file_put_contents($tmp_name, "reemplazar este texto.");
    $mtime = filectime($tmp_name);
    clearstatcache();
    passthru('editor ' . $tmp_name);
    $mtime2 = filectime($tmp_name);
    if ($mtime == $mtime2) {
      printf("Archivo no modificado. No se guardaron los cambios.\n");
    } else {
      printf("Archivo modificado. Guardando los cambios.\n");
      $post = new Post();
      $post->title = $title;
      $post->category_id = $cat;
      $post->published_date = $fecha->format('Y:m:d H:i:s');
      $post->body = file_get_contents($tmp_name);
      $post->slug = $title;
      $post->save();
      printf("OK\n");
    }
    unlink($tmp_name);
  }

  public function actionShow($id) {
    $post = Post::model()->findByPk($id);
    if ($post) {

      printf("\nPublished date: %s\n", $post->published_date);
      printf("Category: %s\n", $post->category->description);
      printf("Title: %s\n", $post->title);
      printf("%s\n", $post->body);
    }
  }

  public function actionEdit($id) {
    ini_set('date.timezone', 'America/Argentina/Buenos_Aires');
    $post = Post::model()->findByPk($id);
    if ($post) {
      $fecha = $this->prompt("Fecha: " . date('d/m/Y', strtotime($post->published_date)) . " (Enter: deja fecha actual)?");
      if ($fecha == '') {
        $fecha = 'now';
      } else {
        list ($d, $m, $a) = explode('-', str_replace('/', '-', $fecha));
        $fecha = "$a-$m-$d";
      }
      $fecha = new DateTime($fecha);
      $categorias = PostCategory::model()->findAll();
      printf("\nCategorias: \n");
      foreach ($categorias as $categoria) {
        printf("[%s] %d - %s\n", $post->category_id == $categoria->id ? 'X' : ' ', $categoria->id, $categoria->description);
      }
      $cat = $this->prompt("Categoria (Enter deja actual)? ");
      if ($cat == '') {
        $cat = $post->category_id;
      }
      printf("Titulo: %s\n", $post->title);
      $title = $this->prompt("(Enter deja actual)?");
      if ($title == '') {
        $title = $post->title;
      }
      $tmp_name = tempnam(sys_get_temp_dir(), 'news');
      file_put_contents($tmp_name, $post->body);
      $mtime = filectime($tmp_name);
      clearstatcache();
      passthru('editor ' . $tmp_name);
      $mtime2 = filectime($tmp_name);
      if ($mtime == $mtime2) {
        printf("Archivo no modificado. No se guardaron los cambios.\n");
      } else {
        printf("Archivo modificado. Guardando los cambios.\n");
        $post->body = file_get_contents($tmp_name);
        $post->published_date = $fecha->format('Y-m-d H:i:s');
        $post->title = $title;
        $post->category_id = $cat;
        $post->save();
        printf("OK\n");
      }
      unlink($tmp_name);
    } else {
      printf("No existe el post.\n");
    }
  }

  public function actionDel($id) {
    $post = Post::model()->findByPk($id);
    if ($post) {
      if ($this->confirm('Esta seguro?')) {
        $post->delete();
        printf("Post " . $post->id . " eliminado.\n");
      }
    } else {
      printf("El post no existe!\n");
    }
  }

}
