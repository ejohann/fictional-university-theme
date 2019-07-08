import $ from 'jquery';

class Like{

	//1. Constructor
	constructor(){
		this.events();
	}


	//2. Events
	events(){
	 $(".like-box").on("click", this.ourClickDispatcher.bind(this));
	}

 

	//3. Methods
	ourClickDispatcher(e){
		var currentLikeBox = $(e.target).closest(".like-box");
		if(currentLikeBox.data('exists') == 'yes'){
			this.deleteLike();
		}
		else{
			this.createLike();
		}
	}


	createLike(){
		alert("create this like");
	}

	deleteLike(){
		alert("Delete this like");
	}
}


export default Like;