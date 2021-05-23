const planningColumn = document.querySelector("#planning");
const inProgresColumn = document.querySelector("#inProgres");
const doneColumn = document.querySelector("#done");

function addTaskToPlanning() {
	planningColumn.insertAdjacentHTML(
	"afterbegin",
	`
	<div class="task_block">
		<div class="task_block_top_part">
			<p class="task_block_title font">To do something</p>
			<div class="plus delete_button" onclick="deleteTask()"></div>
		</div>
		<div class="task_block_bottom_part">
			<p class="task_block_text font">I have to do something, or not. Ok I will play minecraft anyway</p>
			<div class="detail_button_block">
				<div class="details_button">
				</div>
			</div>
		</div>
	</div>
	`
   );
}

function addTaskToInProgres() {
	inProgresColumn.insertAdjacentHTML(
	"afterbegin",
	`
	<div class="task_block">
		<div class="task_block_top_part">
			<p class="task_block_title font">To do something</p>
			<div class="plus delete_button" onclick="deleteTask()"></div>
		</div>
		<div class="task_block_bottom_part">
			<p class="task_block_text font">I have to do something, or not. Ok I will play minecraft anyway</p>
			<div class="detail_button_block">
				<div class="details_button">
				</div>
			</div>
		</div>
	</div>
	`
	);
}

function addTaskToDone() {
	doneColumn.insertAdjacentHTML(
	"afterbegin",
	`
	<div class="task_block">
		<div class="task_block_top_part">
			<p class="task_block_title font">To do something</p>
			<div class="plus delete_button" onclick="deleteTask()"></div>
		</div>
		<div class="task_block_bottom_part">
			<p class="task_block_text font">I have to do something, or not. Ok I will play minecraft anyway</p>
			<div class="detail_button_block">
				<div class="details_button">
				</div>
			</div>
		</div>
	</div>
	`
   );
}

function deleteTask() {
	const taskBlock = document.querySelector(".task_block")
	taskBlock.remove();
}