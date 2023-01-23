getElementById('add').addEventListener('click', validateCategoryForm);
getElementById('edit').addEventListener('click', validateCategoryForm);

let validateCategoryForm = () =>{
    let name = getElementById('name').value;

    if (name === '' ) {
        getElementById('error').innerHTML = 'insert name';
        return false;
    }
    return true;
}