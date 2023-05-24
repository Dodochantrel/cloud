function showPassword(id) {
    const id_element = document.getElementById(id);
    if( id_element.type === "password" ) {
        id_element.type = "text";
    } else {
        id_element.type = "password";
    }
}