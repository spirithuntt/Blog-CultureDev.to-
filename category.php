<?php
include 'component.php';
?>
<?php
include('./middlewares/isadmin.php');
include('./middlewares/isLoggedin.php');
include('./controllers/crud.php');
// check if user is admin
// $islogedin = new IslogedIn();
// $isadmin = new IsAdmin();
?>
<?php
$crud = new crud();
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $crud->delete('category', $id);
}
if(isset($_POST['add'])){
  $data = $_POST['name'];
  $crud->create('category', $data);
}
if(isset($_POST['update'])){
  $id = $_GET['update'];
  $data = $crud->readOne('category', $id);
  echo $data['name'];
}
?>
<div class="row">
  <div class="col-12">
    <div class="card shadow-sm bg-body rounded">
      <div class="card-header">
        <h5 class="card-title">Categories</h5>
        <form method="POST">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Add Category" name="name" id= "name">
            <button class="btn btn-primary" type="submit" name="add" id="add" >Add</button>
          </div>
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $categories = $crud->read('category');
            foreach ($categories as $category) {
            ?>
              <tr>
                <th scope="row"><?php echo $category['id'] ?></th>
                <td><?php echo $category['name'] ?></td>
                <td>
                  <a href="category.php?update=<?php echo $category['id']; ?>" type="button" class="btn btn-sm btn-primary" onclick="openmodal('<?php echo $category['name']; ?>')" name="update" id="update" data-bs-toggle="modal" data-bs-target="#exampleModal" >Update</a>
                  <a href="category.php?delete=<?php echo $category['id'];?>" type="button" class="btn btn-sm btn-danger" name="delete" id="delete">Delete</a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <input name="id" value="<?php echo $data['id'] ?>">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Category</label>
            <input type="text" class="form-control" id="recipient-name" name="input" value="<?php echo $category['name'] ?>">
          </div>
        </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>

//for the modal
const exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', event => {
  // Button that triggered the modal
  const button = event.relatedTarget
  // Extract info from data-bs-* attributes
  const recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  const modalTitle = exampleModal.querySelector('.modal-title')
  const modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = `Edit category`
  modalBodyInput.value = recipient
})
</script>
<script src= "assets/js/scripts.js"></script>
</body>

</html>