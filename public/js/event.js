import {addCategorieModals} from './mod/showModales.js';
import {editCategorieModals} from './mod/showModales.js';
import {annulerAddCategorieModal} from './mod/showModales.js';
import {annulerEditCategorieModal} from './mod/showModales.js';
import {addLienModals} from './mod/showModales.js';
import {editLienModals} from './mod/showModales.js';
import {annulerAddLienModal} from './mod/showModales.js';
import {annulerEditLienModal} from './mod/showModales.js';
import {addTagModals} from './mod/showModales.js';
import {annulerAddTagModal} from './mod/showModales.js';
import {shareLinkModals} from './mod/showModales.js';
import {annulerShareLinkModal} from './mod/showModales.js';

// Share link 
import {toEmailParte} from './mod/changePageInShareLink.js';
import {toAppPart} from './mod/changePageInShareLink.js';

export function setupEvents() {
    const addCategorie_Modal_button = document.getElementById("addCategorie_Modal_button");
    const editCategorie_Modal_button = document.querySelectorAll(".editCategorie_Modal_button");
    const annuler_addCategorie_Button = document.getElementById("annuler_addCategorie_Button");
    const annuler_editCategorie_Button = document.getElementById("annuler_editCategorie_Button");
    const addLien_Modal_button = document.getElementById("addLien_Modal_button");
    const editLink_Modal_button = document.querySelectorAll(".editLink_Modal_button");
    const annuler_addLink_Button = document.getElementById("annuler_addLink_Button");
    const annuler_editLink_Button = document.getElementById("annuler_editLink_Button");
    const addTag_Modal_button = document.getElementById("addTag_Modal_button");
    const annuler_addTag_Button = document.getElementById("annuler_addTag_Button");
    const shareLink_Modal_button = document.querySelectorAll(".shareLink_Modal_button");
    const annuler_ShareLien_Modal_button = document.getElementById("annuler_ShareLien_Modal_button");

    // Share link
    const btnEmail = document.getElementById('tab_email');
    const btnApp = document.getElementById('tab_app');
    
    if (addCategorie_Modal_button) {
        addCategorie_Modal_button.addEventListener("click" , addCategorieModals);
    }

    if (annuler_addCategorie_Button) {
        annuler_addCategorie_Button.addEventListener("click" , annulerAddCategorieModal);
    }

    if (addLien_Modal_button) {
        addLien_Modal_button.addEventListener("click" , addLienModals);
    }

    if (annuler_addLink_Button) {
        annuler_addLink_Button.addEventListener("click" , annulerAddLienModal);
    }

    if (addTag_Modal_button) {
        addTag_Modal_button.addEventListener("click" , addTagModals);
    }

    if (annuler_addTag_Button) {
        annuler_addTag_Button.addEventListener("click" , annulerAddTagModal);
    }

    if(editCategorie_Modal_button) {
        editCategorie_Modal_button.forEach(btn => {
            btn.addEventListener("click" , (e) => {
                editCategorieModals(e.currentTarget);
            });
        });
    }

    if(annuler_editCategorie_Button) {
        annuler_editCategorie_Button.addEventListener("click" , annulerEditCategorieModal);
    }

    if(editLink_Modal_button) {
        editLink_Modal_button.forEach(btn => {
            btn.addEventListener("click" , (e) => {
                editLienModals(e.currentTarget);
            });
        });
    }

    if(annuler_editLink_Button) {
        annuler_editLink_Button.addEventListener("click" , annulerEditLienModal);
    }

    if (shareLink_Modal_button) {
        shareLink_Modal_button.forEach(btn => {
            btn.addEventListener("click" , (e) => {
                shareLinkModals(e.currentTarget);
            })
        })
    }

    if (annuler_ShareLien_Modal_button) {
        annuler_ShareLien_Modal_button.addEventListener("click" , annulerShareLinkModal);
    }

    if (btnApp && btnEmail) {
        btnApp.addEventListener("click" , toAppPart);
        btnEmail.addEventListener("click" , toEmailParte);
    }
}