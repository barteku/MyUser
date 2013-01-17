var menu1 = [
{
    'Element options':

    {
        disabled:true
    }
},
{
    "Add":

    {
        onclick: function(menuItem,menu){
            if($(menu.target).parent().hasClass('mjs-nestedSortable-collapsed')){
                $(menu.target).parent().removeClass('mjs-nestedSortable-collapsed').addClass('mjs-nestedSortable-expanded');
            }
            $(menu.target).addElementToTree();    
        },
        icon:'/bundles/trafficstore/images/contextmenu/new.png',
        
    }
},
{
    'Rename':

    {
        onclick:function(menuItem,menu) { 
            $(menu.target).parent().renameTreeElement();
        },
        icon:'/bundles/trafficstore/images/contextmenu/rename.png',
    }
},
{
    'Delete':

    {
        onclick:function(menuItem,menu) { 
            if(confirm('Are you sure?')){
                $(menu.target).removeElementFromTree();
            } 
        },
        icon:'/bundles/trafficstore/images/contextmenu/remove.png',
        
    }
},
   
  
];



$.fn.addContextMenu = function(){
    this.contextMenu(menu1,{
        theme:'vista'
    });
}


$.fn.renameTreeElement = function(){
    var tree_node = this;
    
    if(!tree_node || tree_node.attr('id') == ''){
        return;
    }
    
    var el = tree_node.find('span:eq(2)');
    var input = $(document.createElement('input'));
    var old_value = el.html();
    var confirm = $(document.createElement('span')).addClass('edit-buttons').attr('title','confirm');
    var revert = confirm.clone(true).attr('title','revert').addClass('revert');
    
    el.html('');    
    
    
    revert.click(function(){
        $(this).parent().html(old_value);
    });
    
    confirm.click(function(){
        $.ajax({
            url: Routing.generate('traffic_store_bundle_category_admin_tree_rename'),
            type: 'post',
            dataType: 'json',
            data: {
                'node': tree_node.attr('id'),
                'name': input.val()
                
            },
            error: function(){
                alert('error')
            },
            success: function(data){
                if(data){
                    el.html(input.val());
                }
            }
        })
        
    });
    
    input.attr('type','text').val(old_value);
    
    el.append(input).append(confirm).append(revert);
}


$.fn.removeElementFromTree = function(){
    var tree_node = this.parent();
    
    if(!tree_node || tree_node.attr('id') == ''){
        return;
    }
    
    $.ajax({
        url: Routing.generate('traffic_store_bundle_category_admin_tree_remove'),
        type: 'post',
        dataType: 'json',
        data: {
            'node': tree_node.attr('id')
        },
        error: function(){
            alert('error')
        },
        success: function(data){
            if(data){
                tree_node.remove();
            }
        }
    });
}


$.fn.addElementToTree = function(){
    var tree_node = this.parent(); 
    
    if(!tree_node || tree_node.attr('id') == ''){
        return;
    }
    
    
    
    $.ajax({
        url: Routing.generate('traffic_store_bundle_category_admin_tree_add'),
        type: 'post',
        dataType: 'json',
        data: {
            'parent': tree_node.attr('id')
        },
        error: function(){
            alert('error')
        },
        success: function(data){
            tree_node.toggleClass('mjs-nestedSortable-leaf', false).addClass('mjs-nestedSortable-branch mjs-nestedSortable-expanded', true).removeAttr('style');
            
            var li = $(document.createElement('li'));
            
            li.html('<div><span class="disclose"><span></span></span><span>New Element</span></div>');
            li.attr('id', data);
            
            if(tree_node.find('ol:eq(0)').length == 1){
                tree_node.find('ol:eq(0)').append(li);
            }else{
                var ol = $(document.createElement('ol'));
                tree_node.append(ol);
                ol.append(li);
            }
            
            li.renameTreeElement();
            
            li.find('div').addContextMenu();
        }
    });
    
}






$(document).ready(function(){
    $(".sortable li div").addContextMenu();
});


