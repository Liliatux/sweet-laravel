(function () {
    var app = {
 
        init: function () {
            this.listeners();
        },
 
        listeners: function() {
            $(".decrease").on("click", app.decreaseStock);
            $(".increase").on("click", app.increaseStock);
        },
 
        decreaseStock: function() {
            var id = $(this).data('id');
            $.ajax({
                url: '/decreaseStock/' + id,
                type: 'get',
                success: function(data){
                    app.successStock(id, data)
                }
            });
        },
 
        increaseStock:function() {
            var id = $(this).data('id');
            $.ajax({
                url: '/increaseStock/' + id,
                type: 'get',
                success: function(data){
                    app.successStock(id, data)
                }
            });
        },
 
        successStock: function(id, response){
            console.log(id);
            $('[data-id="'+id+'"]').siblings('.newStock').html(response);
        }
       
    }
 
    app.init();
})();