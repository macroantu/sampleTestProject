setTimeout(() => {
    document.querySelector(".elfa_message").classList.add("fadeout");
}, 9000);

/* ------------------- choices script ------------------- */
document.querySelectorAll(".select_gender .choice").forEach((choice) => {
    choice.addEventListener("click", (e) => {
        document
            .querySelectorAll(".select_gender .choice")
            .forEach((choice) => {
                choice.classList.remove("active");
            });
        choice.classList.add("active");
    });
});

document.querySelectorAll(".select_age .choice").forEach((choice) => {
    choice.addEventListener("click", (e) => {
        document.querySelectorAll(".select_age .choice").forEach((choice) => {
            choice.classList.remove("active");
        });
        choice.classList.add("active");
    });
});

document.querySelectorAll(".select_occasion .choice").forEach((choice) => {
    choice.addEventListener("click", (e) => {
        document
            .querySelectorAll(".select_occasion .choice")
            .forEach((choice) => {
                choice.classList.remove("active");
            });
        choice.classList.add("active");
    });
});
document.querySelectorAll(".select_hobbies .choice").forEach((choice) => {
    choice.addEventListener("click", (e) => {
        document
            .querySelectorAll(".select_hobbies .choice")
            .forEach((choice) => {
                choice.classList.remove("active");
            });
        choice.classList.add("active");
    });
});

/* ------------------------------------------------------ */
// steps expand / collapse
const allSteps = document.querySelectorAll(".steps .step.notCompleted");

allSteps.forEach((step) => {
    const arrowUpIcon = step.querySelector(".icon.arrow_up");
    const arrowDownIcon = step.querySelector(".icon.arrow_down");
    const step_header = step.querySelector(".step_header");
    const stepToggle = step.querySelector(".step_toggle");

    step_header.addEventListener("click", (e) => {
        step.classList.toggle("active");
        arrowUpIcon.classList.toggle("active");
        arrowDownIcon.classList.toggle("active");
        stepToggle.classList.toggle("active");
    });
});

/* ------------------------------------------------------ */

const allTabs = document.querySelectorAll(".collections_tabs .tab");
allTabs.forEach((tab) => {
    tab.addEventListener("click", (e) => {
        allTabs.forEach((tab) => {
            tab.classList.remove("active");
        });

        e.target.classList.add("active");

        if (e.target.classList.contains("elfa_tab")) {
            document.querySelector(" .steps").style.display = "none";
            document.querySelector(
                ".receive_gifts_container .recommendations"
            ).style.display = "flex";
        } else {
            document.querySelector(
                ".receive_gifts_container .recommendations"
            ).style.display = "none";

            document.querySelector(" .steps").style.display = "flex";
        }
    });
});

/* ------------------------------------------------------ */
/* ------------------------------------------------------ */

/* ----------------- collections scripts ---------------- */

/* ----------------- collections scripts ---------------- */

const allCollections = document.querySelectorAll(".collections .collection");
const allMenus = document.querySelectorAll(
    ".collections .collection .menu_list"
);
const delete_wishlist_model = document.querySelector(".delete_wishlist_model");
const edit_wishlist_model = document.querySelector(".edit_wishlist_name_model");
const delete_wishlist_btn = document.querySelector(".delete_wishlist");
const delete_wishlsit_close_icon = document.querySelector(
    ".delete_wishlist_model .close_icon"
);
const delete_wishlsit_close_btn = document.querySelector(
    ".delete_wishlist_model .cancel"
);

allCollections.forEach((el) => {
    const menuIcon = el.querySelector(".menu_icon");
    const menuList = el.querySelector(".menu_list");
    const menuListItem = el.querySelectorAll(".menu_list .item");

    const wishlistTitle = el.querySelector(".title h2");
    const titleInput = el.querySelector(".title input");
    const menuListItem_delete = el.querySelector(".menu_list .item.delete");
    const menuListItem_edit = el.querySelector(".menu_list .item.edit");

    menuIcon.addEventListener("click", (e) => {

        if (menuList.classList.contains("active")) {
            menuList.classList.remove("active");
            return;
        }
        allMenus.forEach((el) => {
            el.classList.remove("active");
        });
        menuList.classList.add("active");
    });

    menuListItem.forEach((el) => {
        el.addEventListener("click", () => {
            menuList.classList.toggle("active");
        });
    });

    menuListItem_delete.addEventListener("click", () => {
        delete_wishlist_model.classList.add("active");
    });
    menuListItem_edit.addEventListener("click", () => {
        edit_wishlist_model.classList.add("active");
    });
});



/* ------------------------------------------------------ */
/* -------------- edit_wishlist_name_model -------------- */
const edit_wishlist_name_model = document.querySelector(
    ".edit_wishlist_name_model"
);
const edit_wishlist_name_model_close_icon = document.querySelector(
    ".edit_wishlist_name_model .close_icon"
);
const edit_wishlist_name_model_close_btn = document.querySelector(
    ".edit_wishlist_name_model .cancel"
);

edit_wishlist_name_model_close_icon.addEventListener("click", () => {
    edit_wishlist_name_model.classList.remove("active");
});

edit_wishlist_name_model_close_btn.addEventListener("click", () => {
    edit_wishlist_name_model.classList.remove("active");
});

/* ---------------- delete_wishlist_model --------------- */

delete_wishlsit_close_icon.addEventListener("click", () => {
    delete_wishlist_model.classList.remove("active");
});
delete_wishlsit_close_btn.addEventListener("click", () => {
    delete_wishlist_model.classList.remove("active");
});

/* ----------------- add_wishlist model ----------------- */
const add_wishlist_model = document.querySelector(".add_wishlist_model");
const add_wishlist_btn = document.querySelector(".add_wishlist");
const add_wishlsit_close_icon = document.querySelector(
    ".add_wishlist_model .close_icon"
);
const add_wishlsit_close_btn = document.querySelector(
    ".add_wishlist_model .cancel"
);

add_wishlist_btn.addEventListener("click", () => {
    add_wishlist_model.classList.toggle("active");
});

add_wishlsit_close_icon.addEventListener("click", () => {
    add_wishlist_model.classList.remove("active");
});
add_wishlsit_close_btn.addEventListener("click", () => {
    add_wishlist_model.classList.remove("active");
});

/* ------------------------ menus ----------------------- */
const shapes_menu_button = document.querySelector(".menu.shapes");
const shapes_menu_list = document.querySelector(".menu.shapes .list");
const divsOfLists = document.querySelectorAll(".list div");
const divsOfShapesList = document.querySelectorAll(".menu.shapes .list div");
const shpaes_menu_title = document.querySelector(".menu.shapes .menu_title p");
const shapesMenuTitle = document.querySelector(".menu.shapes .menu_title span");

shapes_menu_button.addEventListener("click", (e) => {
    shapes_menu_list.classList.toggle("active");
});

divsOfShapesList.forEach((el) => {
    const checkbox = el.querySelector("input");

    el.addEventListener("click", (e) => {
        if (checkbox.getAttribute("id") !== "All") {
            document.getElementById("All").checked = false;
            let shopsNumber_selected = 0;

            divsOfShapesList.forEach((el) => {
                const checkbox = el.querySelector("input");
                if (checkbox.checked === true) {
                    shopsNumber_selected += 1;
                }
            });
            if (shopsNumber_selected === 0) {
                document.getElementById("All").checked = true;
                shpaes_menu_title.textContent = `Shops`;
                document
                    .querySelector(".menu.shapes .menu_title")
                    .classList.remove("all_not_selected");

                return;
            }
            shpaes_menu_title.textContent = `Shops (${shopsNumber_selected})`;
            document
                .querySelector(".menu.shapes .menu_title")
                .classList.add("all_not_selected");
        }
    });
});

document.getElementById("All").addEventListener("click", (e) => {
    divsOfShapesList.forEach((el) => {
        const checkbox = el.querySelector("input");
        checkbox.checked = false;
    });
    const checkbox = document.querySelector("#All");
    checkbox.checked = true;
    shpaes_menu_title.textContent = `Shops`;
    document
        .querySelector(".menu.shapes .menu_title")
        .classList.remove("all_not_selected");
});

/* -------------------- price_filters ------------------- */
const price_filters = document.querySelectorAll(".prices_filters .filter");

price_filters.forEach((item) => {
    item.addEventListener("click", (e) => {
        item.classList.toggle("active");
    });
});



// Add event listener to the delete button
document.querySelectorAll(".item.delete").forEach(deleteBtn => {
    deleteBtn.addEventListener("click", () => {
        const wishlistId = deleteBtn.getAttribute('data-wishlist-id');
        const modal = document.querySelector(".delete_wishlist_model");
        modal.classList.add("active");

        const confirmBtn = document.querySelector(".delete_whishlist_btn");
        confirmBtn.addEventListener("click", async () => {
            await deleteWishlist(wishlistId);
            modal.classList.remove("active");
        });
        const cancelBtn = document.querySelector(".cancel");
        cancelBtn.addEventListener("click", () => {
            modal.classList.remove("active");
        });
    });
});


// Function to handle deleting a wishlist
async function deleteWishlist(wishlistId) {
    try {
        const response = await axios.delete(`/wishlist/${wishlistId}`);
        if (response.status === 200) {
            window.location.reload();
        }
    } catch (error) {
        console.error("Error :", error);
    }
}



// Function to handle edit button click
let collectionId;
const editButtons = document.querySelectorAll(".menu_list .item.edit");
editButtons.forEach(editButton => {
    editButton.addEventListener("click", () => {
        const collectionName = editButton.dataset.name;
        collectionId = editButton.dataset.id;
        const inputField = document.getElementById("wishlist_collection_name_edit");
        inputField.value = collectionName;
        edit_wishlist_name_model.classList.add("active");
    });
});

// Function to handle confirm edit button click
const confirmEditButton = document.querySelector(".edit_whishlist_btn");
confirmEditButton.addEventListener("click", async () => {
    const newCollectionName = document.getElementById("wishlist_collection_name_edit").value;

    try {
        const response = await axios.put(`/wishlist/edit/${collectionId}`, {
            name: newCollectionName
        });

        if (response.status === 200) {
            window.location.reload();
            edit_wishlist_name_model.classList.remove("active");
        }
    } catch (error) {
        console.error("Error:", error);
    }
});


// Add event listener to the "Cancel" button inside the delete modal
const deleteCancelButton = document.querySelector(".delete_wishlist_item_model .cancel");
deleteCancelButton.addEventListener("click", () => {
    delete_wishlist_item_model.classList.remove("active");
});

document.addEventListener('click', function(event) {
    const removeButton = event.target.closest('.remove_from_wishlist');
    if (removeButton) {
        const itemId = removeButton.dataset.id;

        const deleteConfirmationModal = document.querySelector(".delete_wishlist_item_model");
        deleteConfirmationModal.classList.add("active");

        const cancelButton = deleteConfirmationModal.querySelector(".cancel");
        cancelButton.addEventListener("click", function() {
            deleteConfirmationModal.classList.remove("active");
        });

        const confirmButton = deleteConfirmationModal.querySelector(".delete_whishlist_item_btn");
        confirmButton.addEventListener("click", async function() {
            try {
                const response = await axios.delete(`/wishlist/items/${itemId}`);
                if (response.status === 200) {
                    deleteConfirmationModal.classList.remove("active");
                    window.location.reload();
                }
            } catch (error) {
                console.error("Error deleting item:", error);
            }
        });
    }
});


document.addEventListener("DOMContentLoaded", async () => {
    const activeWishlist = document.querySelector(".collection.active");
    if (activeWishlist) {
        const wishlistId = activeWishlist.dataset.id;
        await fetchAndRenderWishlistItems(wishlistId);
    }
});



// Function to fetch and render wishlist items
async function fetchAndRenderWishlistItems(wishlistId) {
    try {
        const response = await axios.get(`/wishlist/items/${wishlistId}`);
        const wishlistItemsContainer = document.querySelector(".new_gifts_results");
        wishlistItemsContainer.innerHTML = "";
        response.data.forEach(item => {
            const wishlistItemHTML = `
                <div class="item">
                    <img src="${item.item_image}" alt="">
                    <div class="add_To_wishlist">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"></path>
                        </svg>
                    </div>
                    <div class="remove_from_wishlist" data-id="${item.id}">
                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.625 11.5H1.375C0.961 11.5 0.625 11.0893 0.625 10.5833V3.25H7.375V10.5833C7.375 11.0893 7.039 11.5 6.625 11.5ZM7.75 2.79167H0.25V1.875H2.5V1.1875C2.5 0.808458 2.75237 0.5 3.0625 0.5H4.9375C5.24687 0.5 5.5 0.807542 5.5 1.1875V1.875H7.75V2.79167ZM3.25 1.875H4.75V1.41667H3.25V1.875Z" fill="white"></path>
                        </svg>
                    </div>
                </div>
                `;
            wishlistItemsContainer.insertAdjacentHTML("beforeend", wishlistItemHTML);
        });
    } catch (error) {
        console.error("Error fetching wishlist items:", error);
    }
}



// Event listener for selecting a wishlist
document.querySelectorAll(".collection").forEach(wishlist => {
    wishlist.addEventListener("click", async () => {
        const wishlistId = wishlist.dataset.id;
        await fetchAndRenderWishlistItems(wishlistId);
    });
});


// Add click event listener to each collection
const collections = document.querySelectorAll('.collections .collection');

collections.forEach(collection => {
    collection.addEventListener('click', () => {
        collections.forEach(c => {
            c.classList.remove('active', 'default');
        });
        collection.classList.add('active', 'default');
    });
});