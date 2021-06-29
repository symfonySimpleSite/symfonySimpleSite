import jstree from 'jstree';

$(function () {
    $('#menu-jstree1').jstree({
        'open_all' : true,
        "plugins" : [ "wholerow", "changed" ],

        "core" : {
            "multiple" : false,
            "animation" : 0
        }
    })
});