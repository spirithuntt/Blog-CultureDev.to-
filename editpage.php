<?php
include('component.php');
include('./middlewares/isadmin.php');
include('./middlewares/isLoggedin.php');
include('./controllers/crud.php');
// check if user is admin
$islogedin = new IslogedIn();
$isadmin = new IsAdmin();
$crud = new crud();
$id = $_POST['idA'];
$data = $crud->readOne('article', $id);
if(isset($_POST['saveEdits'])) {
    //the data from the form
    $id = $_POST['idA'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $summary = $_POST['summary'];
    $blog = $_POST['Blog'];
    $image = $_POST['image'];
    //update the data
    $crud->updateArticle('article', $id,$title, $category, $summary, $blog);
    //redirect to the admin page
    header('Location: dashboard.php');
}
?>

<!-- modal form -->
<div class="container" id="modal-task">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" id="form">
                <div class="modal-body">
                    <input type="hidden" id="task-id" name='idA' value="<?php echo $data[0]['id'];?>">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Title:</label>
                        <!-- access to sub-array values in associative array -->
                        <input type="text" class="form-control" name="title" id="recipient-name" value="<?php echo $data[0]['title'];?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-select border rounded p-1 mx-2" id="task-priority" name="category">
                            <?php
                            $crud = new crud();
                            $result = $crud->read('category');
                            foreach ($result as $row) {
                                echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name='image' />
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">summary</label>
                        <textarea class="form-control" id="message-text" name='summary' value="here"><?= $data[0]['description']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Blog</label>
                        <textarea class="form-control" id="message-text" name='Blog'><?= $data[0]['blog']?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" name="saveEdits" class="btn btn-primary task-action-btn ms-1" id="task-save-btn" data-bs-dismiss="modal">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- modal form -->
</body>

</html>