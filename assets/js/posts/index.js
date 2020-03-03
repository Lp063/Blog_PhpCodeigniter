$(document).ready(function(){
    loadBlogPostCards(false,0);
});

function loadBlogPostCards(isScrolling,postsInView){
    
    var blogPostList ={"<>":"div","id":"post_${id}","class":"col-md-4 blog-post-card","html":[
        {"<>":"div","id":"post_${id}_thumbnail","class":"col-md-12 blog-post-thumbnail","style":"background-image:url(${blogthumbnail});","html":function($object,index){
            return '<img class="alwaysHidden" onerror="imageUnavailable(\'image\',\'post_'+$object.id+'_thumbnail\',\'\')" src="'+$object.blogthumbnail+'" >';
        }},
        {"<>":"div","class":"col-md-12 no-padding-sides blog-post-card-lower-half","html":[
            {"<>":"div","class":"col-md-12 no-padding-sides blog-author-date","html":[
                {"<>":"div","id":"","class":"col-md-6","style":"","html":"${blogsource}"},
                {"<>":"div","class":"col-md-6 default-font","style":"text-align:right;","html":"${blogpostdate}"}
              ]},
            {"<>":"div","class":"col-md-12 blog-post-title default-font","html":"${blogtitle}"},
            {"<>":"div","class":"col-md-12 blog-post-summary default-font","html":"${blogsummary}"}
        ]}
    ]};

    $.post(base_url+"posts/apiloadPosts",{
        from:postsInView
    },function(response){
        var response = JSON.parse(response);
        if (response.success) {
            $("#blogPosts").json2html(response.data,blogPostList);
        } else {
            
        }
    });
}