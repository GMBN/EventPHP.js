var php = {
    url: 'eventManager.php',
    type: 'POST',
    context:[],
    dataType: 'json',
    async:true,
    result: {},
    addContext: function(c){
        this.context.push(c);
    },
    trigger: function (name, param, callback) {
        $.ajax({
            url: this.url,
            type: this.type,
            async: this.async,
            dataType: this.dataType,
            data: {context:this.context,event: name, param: param},
            success: function (data) {
                if (typeof callback !== 'undefined') {
                    callback(data);
                }
            }
        });

    }
};
