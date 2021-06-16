const planningColumn = document.querySelector("#planning");
const inProgresColumn = document.querySelector("#inProgres");
const doneColumn = document.querySelector("#done");

function addTaskToPlanning() {
	planningColumn.insertAdjacentHTML(
	"afterbegin",
	`
	<div id="eclipse">
		<div id="window">
			<form class="form font">
				<div class="form_group"> <p class="form_text">Назва задачі:</p>
					<input type="" name="" class="form_input" placeholder=" ">
				</div>
				<div class="form_group">
					<label class="form_label_large"><div class="message_settings"><p class="form_text">Детальніше:</p></div>
					<textarea class="form_input_large" rows="10" ></textarea></label>
				</div>
				<div class="selection_block">
					<div class="date_block">
						<input type="date" class="date_input" name="task-date">
					</div>
					<input type="checkbox" class="important_option" name="important_option">
					<p class="font">Важливо</p>
				</div>
				<br>
				<div class="submit_block">
					<input type="submit" name="submit_button" class="submit_button">
				</div>
			</form>
			<div class="close_button_block">
				<a href="#" class="close font">Закрити</a>
			</div>
		</div>
	</div>	`
   );
}

function addTaskToInProgres() {
	inProgresColumn.insertAdjacentHTML(
	"afterbegin",
	`
	<div id="eclipse">
		<div id="window">
			<form class="form font">
				<div class="form_group"> <p class="form_text">Назва задачі:</p>
					<input type="" name="" class="form_input" placeholder=" ">
				</div>
				<div class="form_group">
					<label class="form_label_large"><div class="message_settings"><p class="form_text">Детальніше:</p></div>
					<textarea class="form_input_large" rows="10" ></textarea></label>
				</div>
				<div class="selection_block">
					<div class="date_block">
						<input type="date" class="date_input" name="task-date">
					</div>
					<input type="checkbox" class="important_option" name="important_option">
					<p class="font">Важливо</p>
				</div>
				<br>
				<div class="submit_block">
					<input type="submit" name="submit_button" class="submit_button">
				</div>
			</form>
			<div class="close_button_block">
				<a href="#" class="close font">Закрити</a>
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
	<div id="eclipse">
		<div id="window">
			<form class="form font">
				<div class="form_group"> <p class="form_text">Назва задачі:</p>
					<input type="" name="" class="form_input" placeholder=" ">
				</div>
				<div class="form_group">
					<label class="form_label_large"><div class="message_settings"><p class="form_text">Детальніше:</p></div>
					<textarea class="form_input_large" rows="10" ></textarea></label>
				</div>
				<div class="selection_block">
					<div class="date_block">
						<input type="date" class="date_input" name="task-date">
					</div>
					<input type="checkbox" class="important_option" name="important_option">
					<p class="font">Важливо</p>
				</div>
				<br>
				<div class="submit_block">
					<input type="submit" name="submit_button" class="submit_button">
				</div>
			</form>
			<div class="close_button_block">
				<a href="#" class="close font">Закрити</a>
			</div>
		</div>
	</div>
	`
   );
}

function deleteTask() {
	const taskBlock = document.querySelector(".task_block");
	taskBlock.remove();
}

document.querySelector('.date_input').valueAsDate = new Date();
/*
<div class="task_block">
		<div class="task_block_top_part">
			<p class="task_block_title font"><a href="#eclipse" class="creation_window_link">To do something</a></p>
				<div id="eclipse">
					<div id="window">
						<form class="form font">
							<div class="form_group"> <p class="form_text">Назва задачі:</p>
								<input type="" name="" class="form_input" placeholder=" ">
								<label class="form_label">name your task</label>
							</div>
							<div class="form_group">
								<label class="form_label_large"><div class="message_settings"><p class="form_text">Детальніше:</p></div>
								<textarea class="form_input_large" rows="10" ></textarea></label>
							</div>
							<div class="selection_block">
								<div class="date_block">
									<input type="date" class="date_input" name="task-date">
								</div>
								<input type="checkbox" class="important_option" name="important_option">
								<p class="font">Важливо</p>
							</div>
							<br>
							<div class="submit_block">
								<input type="submit" name="submit_button" class="submit_button">
							</div>
						</form>
						<div class="close_button_block">
							<a href="#" class="close font">Закрити</a>
						</div>
					</div>
				</div>
			<div class="plus delete_button" onclick="deleteTask();"></div>
		</div>
		<div class="task_block_bottom_part">
		<p class="task_block_text font">I have to do something, or not. Ok I will play minecraft anyway</p>
			<div class="detail_button_block">
				<div class="details_button">
				</div>
			</div>
		</div>
	</div>
*/
/*
var section_id = 0;

function addTaskToPlanning() {
	section_id = 1;
	document.cookie = "section_id = " + section_id;
	console.log("section_id");
}

function addTaskToInProgres() {
	section_id = 2;
	document.cookie = "section_id = " + section_id;
	console.log(section_id);
}

function addTaskToDone() {
	section_id = 3;
	document.cookie = "section_id = " + section_id;
	console.log(section_id);
}*/