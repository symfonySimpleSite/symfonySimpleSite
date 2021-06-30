import jstree from 'jstree';

$(function () {
    $('.menu-tree1').jstree({
        'open_all' : true,
        "plugins" : [ "wholerow", "changed" , "checkbox"],
        "checkbox": {
            'deselect_all': true,
            'three_state' : false,
        },
        "core" : {
            "multiple" : false,
            "animation" : 0
        }
    })
});