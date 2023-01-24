<?php
include 'component.php';
include('./middlewares/isadmin.php');
include('./middlewares/isLoggedin.php');
include('./controllers/crud.php');
// check if user is admin
// $islogedin = new IslogedIn();
// $isadmin = new IsAdmin();
?>
<?php
$crud = new crud();
if(isset($_POST['save'])){
    $data = array(
        'title' => $_POST['title'],
        'description' => $_POST['summary'],
        'admin_id' => 20,
        'category_id' => $_POST['category'],
        'blog' => $_POST['Blog'],
    );
    $crud->create('article', $data);
}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $crud->delete('article', $id);
}
?>
<!-- stats cards -->
<div class="row">
    <div class="col-12 col-md-6 col-lg-3 col-sm-12">
        <div class="card bg-primary  text-white shadow-sm bg-body rounded">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="text">
                        <h5 class="card-title">Total Users</h5>
                        <h4 class="mb-0">100</h4>
                    </div>
                    <div class="icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3 col-sm-12">
        <div class="card bg-success text-white shadow-sm bg-body rounded">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="text">
                        <h5 class="card-title">Total Posts</h5>
                        <h4 class="mb-0">30</h4>
                    </div>
                    <div class="icon">
                        <i class="bi bi-tags-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3 col-sm-12">
        <div class="card bg-warning text-white shadow-sm bg-body rounded">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="text">
                        <h5 class="card-title">Total Categories</h5>
                        <h4 class="mb-0">100</h4>
                    </div>
                    <div class="icon">
                        <i class="bi bi-tags-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3 col-sm-12">
        <div class="card bg-danger  text-white shadow-sm bg-body rounded">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="text">
                        <h5 class="card-title">Total Comments</h5>
                        <h4 class="mb-0">100</h4>
                    </div>
                    <div class="icon">
                        <i class="bi bi-chat
                        -left-text-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal form -->
<div class="modal fade" id="modal-task">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="POST" id="form">
            <div class="modal-body">
                <input type="hidden" id="task-id" name='articleId'>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Title:</label>
                    <input type="text" class="form-control" name="title" id="recipient-name">
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
                    <textarea class="form-control" id="message-text" name='summary'></textarea>
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Blog</label>
                    <textarea class="form-control" id="message-text" name='Blog'></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                <button type="submit" name="save" class="btn btn-primary task-action-btn ms-1" id="task-save-btn" data-bs-dismiss="modal">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- modal form -->



<!-- stats cards -->





<!-- TABLEAU -->
<div class="tableContainer m-4">
    <div class="d-flex justify-content-end mt-3">
        <button href="#modal-task" data-bs-toggle="modal" class="btn btn-primary d-flex border"><i class="bi bi-plus-circle-dotted me-2 p"></i>Add Post</button>
    </div>
</div>

<table class="table table-light table-hover table-striped rounded" id="myTable">
    <thead>
        <tr>
            <th class="text-center" scope="col" name="img">Img</th>
            <th class="text-center" scope="col" name="title">Title</th>
            <th class="text-center" scope="col" name="category">Category</th>
            <th class="text-center" scope="col" name="description">summary</th>
            <th class="text-center" scope="col" name="blog">Blog</th>
            <th class="text-center" scope="col"></th></th>
        </tr>
    </thead>
    <tbody>
        <?php
                    // <td class='align-middle'><img class='' src='../assets/img/" . $row['image'] . "' alt='postImg' width='50px'>
                    // </td>
        $crud = new crud();
        $result = $crud->read('article');
        foreach ($result as $row){
            echo "<tr class='text-center'>
            <td class='align-middle'>" . $row['title'] . "</td>
            <td class='align-middle'>" . $row['title'] . "</td>
            <td class='align-middle'>" . $row['category_id'] . "</td>
            <td class='align-middle'>" . $row['description'] . "</td>
            <td class='align-middle'>" . $row['blog'] . "</td>
            <td class='align-middle'>
                <div class='d-flex justify-content-center'>
                <form action='editpage.php' method='POST'>
                <input type='hidden' name='idA' value='" . $row['id'] . "'>
                    <button type='submit' class='btn btn-primary d-flex border'><i class='bi bi-pencil-square me-2 p' name='editArticle'></i>Edit</button>
                </form>
                    <a href='dashboard.php?delete=" . $row['id'] . "' class='btn btn-danger d-flex border' type='submit' id='deleteArticle' name='deleteArticle'><i class='bi bi-trash me-2 p'></i>Delete</a>
                </div>
            </td>
        </tr>";
        }
        // <td class='align-middle'>" . $row['Blog'] . "</td>
        ?>

    </tbody>
</table>
</div>
<!-- tableau -->
</div>
</div>
</div>
<!-- JavaScript bootstrap-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
<script>
    const mobileScreen = window.matchMedia("(max-width: 990px )");
    $(document).ready(function() {
        $(".dashboard-nav-dropdown-toggle").click(function() {
            $(this).closest(".dashboard-nav-dropdown")
                .toggleClass("show")
                .find(".dashboard-nav-dropdown")
                .removeClass("show");
            $(this).parent()
                .siblings()
                .removeClass("show");
        });
        $(".menu-toggle").click(function() {
            if (mobileScreen.matches) {
                $(".dashboard-nav").toggleClass("mobile-show");
            } else {
                $(".dashboard").toggleClass("dashboard-compact");
            }
        });
    });
</script>
</body>

</html>