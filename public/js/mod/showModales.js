export function addCategorieModals() {
    const modale_addCategorie_pop = document.getElementById("modale_addCategorie_pop");

    modale_addCategorie_pop.classList.replace("hidden" , "flex");
}

export function annulerAddCategorieModal() {
    const modale_addCategorie_pop = document.getElementById("modale_addCategorie_pop");

    modale_addCategorie_pop.classList.replace("flex" , "hidden");
}

export function editCategorieModals(button) {
    const modale_editCategorie_pop = document.getElementById("modale_editCategorie_pop");

    const edit_categorie_title = document.getElementById("edit_categorie_title");
    const edit_categorie_description = document.getElementById("edit_categorie_description");
    const edit_categorie_id = document.getElementById("edit_categorie_id");

    const id = button.dataset.id;
    const title = button.dataset.title;
    const description = button.dataset.description;

    console.log(id);
    console.log(title);
    console.log(description);


    edit_categorie_id.value = id;
    edit_categorie_title.value = title;
    edit_categorie_description.value = description;

    modale_editCategorie_pop.classList.replace("hidden" , "flex");
}

export function annulerEditCategorieModal() {
    const modale_editCategorie_pop = document.getElementById("modale_editCategorie_pop");

    modale_editCategorie_pop.classList.replace("flex" , "hidden");
}

export function addLienModals() {
    const modale_addLink_pop = document.getElementById("modale_addLink_pop");

    modale_addLink_pop.classList.replace("hidden" , "flex");
}

export function annulerAddLienModal() {
    const modale_addLink_pop = document.getElementById("modale_addLink_pop");

    modale_addLink_pop.classList.replace("flex" , "hidden");
}

export function editLienModals(button) {
    const modal = document.getElementById("modale_editLink_pop");

    modal.classList.replace("hidden", "flex");

    const id = button.dataset.id;
    const title = button.dataset.title;
    const url = button.dataset.url;
    const category = button.dataset.category;
    const tags = JSON.parse(button.dataset.tags || "[]");

    document.getElementById("edit_link_id").value = id;
    document.getElementById("edit_link_title").value = title;
    document.getElementById("edit_link_url").value = url;
    document.querySelectorAll('select[name="category_id"] option').forEach(s => {
        s.selected = s.value === category;
    });

    document.querySelectorAll('input[name="link_tag[]"]').forEach(cb => {
        cb.checked = false;
    });

    tags.forEach(tagId => {
        const checkbox = document.getElementById("edit_tag_" + tagId);
        if (checkbox) checkbox.checked = true;
    });
}


export function annulerEditLienModal() {
    const modale_editLink_pop = document.getElementById("modale_editLink_pop");

    modale_editLink_pop.classList.replace("flex" , "hidden");
}

export function addTagModals() {
    const modale_addTag_pop = document.getElementById("modale_addTag_pop");

    modale_addTag_pop.classList.replace("hidden" , "flex");
}

export function annulerAddTagModal() {
    const modale_addTag_pop = document.getElementById("modale_addTag_pop");

    modale_addTag_pop.classList.replace("flex" , "hidden");
}