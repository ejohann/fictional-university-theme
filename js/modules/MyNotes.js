import $ from 'jquery';

class MyNotes{

	// 1. constructor
	constructor(){
		this.events();
	}

	//2. events
	events(){
	  $(".delete-note").on("click", this.deleteNote);
	  $(".edit-note").on("click", this.editNote);
	}

	//3. methods
 deleteNote(e){
 	var thisNote = $(e.target).parents("li");
 	$.ajax({
 		beforeSend: (xhr) => {
 			xhr.setRequestHeader('X-WP-Nonce', universityData.nonce);
 		},
 		url: universityData.root_url + '/wp-json/wp/v2/note/' + thisNote.data('id'),
 		type: 'DELETE',
 		success: (response) => {
 			thisNote.slideUp();
 			console.log("congrats");
 			console.log(response);
 		},
 		error: (response) => {
 			console.log("Sorry");
 			console.log(response);
 		}
 	});
 }

 editNote(e){
 	var thisNote = $(e.target).parents("li");
 	thisNote.find(".edit-note").html('<i class="fa fa-times" aria-hidden="true"></i> Cancel');
 	thisNote.find(".note-title-field, .note-body-field").removeAttr("readonly").addClass("note-active-field");
 	thisNote.find(".update-note").addClass("update-note--visible");
 }

}


export default MyNotes;