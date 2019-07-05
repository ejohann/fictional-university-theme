import $ from 'jquery';

class MyNotes{

	// 1. constructor
	constructor(){
		this.events();
	}

	//2. events
	events(){
	  $(".delete-note").on("click", this.deleteNote);
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

}


export default MyNotes;