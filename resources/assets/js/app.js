(function () {
	var app = {

		init: function () {
			this.listeners();
		},

		listeners: function() {
			$(".decrease").on("click", this.decreaseStock);
			$(".increase").on("click", this.increaseStock);
		},

		decreaseStock: function() {
			 let id = $(this).data("id");
			$.ajax({
				url: '/decreaseStock/' + id,
				type: 'get',
				success: app.successStock
			});
		},

		increaseStock:function() {
			let id = $(this).data("id");
			$.ajax({
				url: '/increaseStock/' + id,
				type: 'get',
				success: app.successStock
			});
		},

		successStock: function(response){
			//console.log(response);
			$('[data-id="'this.id'"]').html(response);
		}
	}

	app.init();
})();