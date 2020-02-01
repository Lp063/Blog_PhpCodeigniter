/**
 * Created by Asus on 11/17/2016.
 */

function imageUnavailable(purpose,uniqueId,name){
    var imageUrl="";
    switch(purpose){
        case "image":
            imageUrl ="https://www.metmuseum.org/content/img/placeholders/NoImageAvailableIcon.png";
            break;
        default:
    }

    $("#"+uniqueId).css("background-image","url("+imageUrl+")");
}

$(document).ready(function(){
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
    var data=[
        {
            id:"123",
            blogthumbnail:"https://picsum.photos/400",
            blogsource:"Jason Bourne",
            blogpostdate:"20th. Jan 2020",
            blogtitle:"The Great Escape",
            blogsummary:"During the Second World War, a large group of imprisoned Allied soldiers, known for breaking out of prison, are confined in an escape-proof prison camp."
        },{
            id:"456",
            blogthumbnail:"https://picsum.photos/400",
            blogsource:"Agtha Christie",
            blogpostdate:"30th. Jan 2020",
            blogtitle:"The River Run",
            blogsummary:"During the Second World War, a large group of imprisoned Allied soldiers, known for breaking out of prison, are confined in an escape-proof prison camp."
        },{
            id:"790",
            blogthumbnail:"https://picsum.photos/400",
            blogsource:"Danny Boyel",
            blogpostdate:"26 th. Jan 2020",
            blogtitle:"Slum Dog Millionair",
            blogsummary:"During the Second World War, a large group of imprisoned Allied soldiers, known for breaking out of prison, are confined in an escape-proof prison camp."
        },{
            id:"123",
            blogthumbnail:"https://picsum.photos/400",
            blogsource:"Jason Bourne",
            blogpostdate:"20th. Jan 2020",
            blogtitle:"The Great Escape",
            blogsummary:"During the Second World War, a large group of imprisoned Allied soldiers, known for breaking out of prison, are confined in an escape-proof prison camp."
        },{
            id:"456",
            blogthumbnail:"https://picsum.photos/400",
            blogsource:"Agtha Christie",
            blogpostdate:"30th. Jan 2020",
            blogtitle:"The River Run",
            blogsummary:"During the Second World War, a large group of imprisoned Allied soldiers, known for breaking out of prison, are confined in an escape-proof prison camp."
        },{
            id:"789",
            blogthumbnail:"",
            blogsource:"Danny Boyel",
            blogpostdate:"26 th. Jan 2020",
            blogtitle:"Slum Dog Millionair",
            blogsummary:"During the Second World War, a large group of imprisoned Allied soldiers, known for breaking out of prison, are confined in an escape-proof prison camp."
        }
    ];
    $("#blogPosts").json2html(data,blogPostList);
});