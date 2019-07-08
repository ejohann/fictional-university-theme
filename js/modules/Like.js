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
			this.deleteLike(currentLikeBox);
		}
		else{
			this.createLike(currentLikeBox);
		}
	}


	createLike(currentLikeBox){
		$.ajax({
			beforeSend: (xhr) => {
 				xhr.setRequestHeader('X-WP-Nonce', universityData.nonce);
 			},
			url: universityData.root_url + '/wp-json/university/v1/manageLike',
			type: 'POST',
			data: {'professorId': currentLikeBox.data('professor')},
			success: (response) => {
				console.log(response);
			},
			error: (response) => {
				console.log(response);
			}
		});
	}

	deleteLike(currentLikeBox){
		$.ajax({
			url: universityData.root_url + '/wp-json/university/v1/manageLike',
			type: 'DELETE',
			data: {
				'professorId' : currentLikeBox.data('professor')
			},
			success: (response) => {
				console.log(response);
			},
			error: (response) => {
				console.log(response);
			}
		});
	}
}


export default Like;