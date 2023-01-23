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