import $ from 'jquery';

class Search{
	// 1. Describe and create/initiate object
	constructor(){
		this.openButton = $(".js-search-trigger");
		this.closeButton = $(".search-overlay__close");
		this.searchOverlay = $(".search-overlay");
		this.events();
	}

 	// 2. events
 	events(){
 		this.openButton.on("click", this.openOverlay.bind(this));
 		this.closeButton.on("click", this.closeOverlay.bind(this));
 	}

 	//3. methods (function, action..)
 	openOverlay(){
 		this.searchOverlay.addClass("search-overlay--active");

 	}// close openOpenlay

 	closeOverlay(){
 		this.searchOverlay.removeClass("search-overlay--active");
 	}// close closeOverlay

} // close Search class

export default Search;