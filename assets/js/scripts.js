let articleId = document.getElementById("articleId");
let title = document.getElementById("title");
// getElementById('add').addEventListener('click', validateCategoryForm);
// getElementById('edit').addEventListener('click', validateCategoryForm);

// let validateCategoryForm = () =>{
//     let name = getElementById('name').value;

//     if (name === '' ) {
//         getElementById('error').innerHTML = 'insert name';
//         return false;
//     }
//     return true;
// }
function openmodal(name, id){
    document.getElementById('categoryName').value = name;
    document.getElementById('categoryid').value = id;
    console.log(name);
    console.log(id);
}

// document.getElementById("editArticle").addEventListener("click", btnswitch); //save button

// function btnswitch(){
//   //SWITCH BUTTONS
//   document.getElementById("task-save-btn").style.display = "block";
//   document.getElementById("task-update-btn").style.display = "none";
//   document.getElementById("task-delete-btn").style.display = "none";
// }
//display data in modal
function editArticle(id) {
    console.log(id);
    console.log(document.getElementById(id));
    console.log("test");
//   document.getElementById("task-delete-btn").style.display = "block";
//   document.getElementById("task-update-btn").style.display = "block";
//   document.getElementById("task-save-btn").style.display = "none";
  //input
//   let test = document.getElementById(id);
//   title.value = test.children[1].children[0].innerHTML;
//   articleId.value = id;
}