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
 	alert("You clicked delete");
 }

}


export default MyNotes;