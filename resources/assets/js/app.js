(function () {
	var app = {

		id: document.getElementById('stockId').value,

		init: function () {
			this.listeners();
		},

		listeners: function() {
			$('.decrease').on('submit', this.decreaseStock.bind(this));
			$('.increase').on('submit', this.increaseStock.bind(this));
		},

		decreaseStock: function(e) {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			e.preventDefault();
			$.ajax({
				url: '/decreaseStock/' + this.id,
				type: 'POST',
				success: this.successStock
			});
		},

		increaseStock:function(e) {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			e.preventDefault();
			$.ajax({
				url: '/increaseStock/' + this.id,
				type: 'POST',
				success: this.successStock
			});
		},

		successStock: function($response) {
			$(".newStock").html($response);
		}
	}

	app.init();
})();