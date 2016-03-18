
var config = {
    layout: {
        name: 'layout',
        padding: 4,
        panels: [
            { type: 'top', wight: '100%', resizable: true, minSize: 300 },
        ]
    },
    grid: { 
        name: 'grid',
        url: 'js/mysql.php',
        method: 'GET', 
        
        show: {
            toolbar            : true,
            toolbarDelete    : false
        },
        columns: [
            { field: 'name', caption: 'Name', size: '33%', sortable: true, searchable: true },
            { field: 'libtype', caption: 'Type', size: '33%' },
            { field: 'libsrc', caption: 'Link', size: '120px'},
            ],   
        onClick: function(event) {
            var grid = this;
            var form = w2ui.form;
            console.log(event);
            event.onComplete = function () {
                var sel = grid.getSelection();
                console.log(sel);
                if (sel.length == 1) {
                    form.recid  = sel[0];
                    form.record = $.extend(true, {}, grid.get(sel[0]));
                    form.refresh();
                } else {
                    form.clear();
                }
            }
        }
    },
}

$(function () {
    // initialization
    $('#grid').w2layout(config.layout);
    w2ui.layout.content('top', $().w2grid(config.grid));
   });

