 $(function(){
        $("#demo").jcImgScroll({
            speed:200, 
            width : 289, 
            height:215, 
            setZoom:.5,
            loadClass:"loading", 
            position:"center",
            setTitle : { border : 0, height : 35, bgColor:"#6ba600", color:"#fff", padding:20 }, 
            arrow : {  
                width:110,
                height:342,
                x:220,
                y:0
            },
            count : 5,
            offsetX : 140,
            NumBtn : true,
            title:true 
        });
    });