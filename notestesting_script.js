/* Variable for Add Note button */
const addbtn = document.getElementById("addnotes");
/* Variable for note window */
const notes = JSON.parse(localStorage.getItem("notes"));

if(notes){
    notes.forEach((note) => {
        addNewNote(note);
    });
}

addbtn.addEventListener("click", () => {
    addNewNote();
});

/* You can create as many notes as you like*/
function addNewNote(text = ""){
    const note = document.createElement("div"); // div element for note window
    note.classList.add("note");

    note.innerHTML = `
    <div class="notes">
        <div class="tools">
            <button class="edit"><i class="fas fa-edit" style="color:blue"></i></button>
            <button class="delete"><i class="fas fa-trash-alt" style="color:red"></i></button>
        </div>
        <div class="main ${text ? "" : "hidden"}"></div>
        <textarea class="${text ? "hidden" : ""}"></textarea>
    </div>
    `;

    const editbtn = note.querySelector(".edit");
    const deletebtn = note.querySelector(".delete");

    const main = note.querySelector(".main");   // variable for main div
    const textArea = note.querySelector("textarea");

    textArea.value = text;
    main.innerHTML = text;

    editbtn.addEventListener("click", () => {
        main.classList.toggle("hidden");
        textArea.classList.toggle("hidden");
    });

    deletebtn.addEventListener("click", () => {
        note.remove();
        updateLocalStorage();
    });

    textArea.addEventListener("input", (e) => {
        const { value } = e.target;
        main.innerHTML = `marked(value)`;

        updateLocalStorage();
    });

    document.body.appendChild(note);

}

// To update local storage on edit, delete & add new notes
function updateLocalStorage(){
    const notesTxt = document.querySelectorAll("textarea");
    const notes = [];

    notesTxt.forEach((note) => {
        notes.push(note.value);
    });

    localStorage.setItem("notes", JSON.stringify(notes));
}