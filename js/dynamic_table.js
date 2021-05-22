const planningColumn = document.querySelector("#planning");
const inProgresColumn = document.querySelector("#inProgres");
const doneColumn = document.querySelector("#done");

function addTaskToPlanning() {
	console.log(planningColumn);
	planningColumn.insertAdjacentHTML(
    "afterbegin",
    `<div class="task_block"></div>`
   );
}

function addTaskToInProgres() {
	console.log(inProgresColumn);
	inProgresColumn.insertAdjacentHTML(
    "afterbegin",
    `<div class="task_block"></div>`
   );
}

function addTaskToDone() {
	console.log(doneColumn);
	doneColumn.insertAdjacentHTML(
    "afterbegin",
    `<div class="task_block"></div>`
   );
}