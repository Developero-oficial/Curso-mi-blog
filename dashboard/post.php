<?php 
require 'header.php';
require 'navbar.php';
?>
    <div class="container-fluid">
      <div class="row">
        <?php require 'sidebar.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">New Post</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-7 col-md-offset-2 main">
          <form enctype="multipart/form-data" action="../functions/article/insert.php" method="POST">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" class="form-control" id="title" placeholder="New title">
            </div>
            <label for="categorie">Categorie</label>
            <select name="categorie_id" class="form-control" id="categorie">
              <option value="0">Elige una categoría</option>
            </select>
            <label for="content">Content</label>
            <textarea  name="content" class="form-control" rows="3" id="content"></textarea>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input name="user-file" type="file" id="exampleInputFile">
              <p class="help-block">Example block-level help text here.</p>
            </div>
            <button name="submit" type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
        <div class="col-md-2 main">
          <form>
            <div class="form-group">
            <label for="new_categorie">Add new cateogrie</label>
              <input type="text" class="form-control" id="new_categorie" placeholder="New categorie">
            </div>
            <button type="button" id="submit_categorie" class="btn btn-default btn-block">Save</button>
          </form>
        </div>
      </div>
    </div>
<?php require 'footer.php'; ?>