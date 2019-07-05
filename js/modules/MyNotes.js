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
 deleteNote(){
 	$.ajax({
 		beforeSend: (xhr) => {
 			xhr.setRequestHeader('X-WP-Nonce', universityData.nonce);
 		},
 		url: universityData.root_url + '/wp-json/wp/v2/note/98',
 		type: 'DELETE',
 		success: (response) => {
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