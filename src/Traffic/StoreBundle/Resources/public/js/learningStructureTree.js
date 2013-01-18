

$(document).ready(function(){
    $('.treeview ol:eq(0)').addClass('sortable');
    
    
    
    $('ol.sortable').nestedSortable({
        forcePlaceholderSize: true,
        handle: 'div',
        items: 'li',
        opacity: .6,
        placeholder: 'placeholder',
        revert: 250,
        tabSize: 25,
        tolerance: 'pointer',
        toleranceElement: '> div',
        maxLevels: 6,
        isTree: true,
        expandOnHover: 700,
        startCollapsed: true,
        stop: function(event,ui) {
            
            if (ui.item.hasClass('loading')) return;
            
            ui.item.addClass('loading');
            $.ajax({
                url: Routing.generate('traffic_store_bundle_category_admin_tree_move'),
                type: 'post',
                data: {
                    'parent': ui.item.parent().parent().attr('id'),
                    'node': ui.item.attr('id'),
                    'position': ui.item.parent().children().index(ui.item) + '_' + ui.item.parent().children().length
                },
                success: function(data) {
                    ui.item.removeClass('loading');
                    
                }
            });
        }
    });
            
    $('.disclose').on('click', function() {
        $(this).closest('li').toggleClass('mjs-nestedSortable-collapsed').toggleClass('mjs-nestedSortable-expanded');
    })

});