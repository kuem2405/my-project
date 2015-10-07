$(document).ready(function(){
    $('.tabs-content:not(:first)').hide();  
    $('.tabs-content1:not(:first)').hide();  
    $('.tabs li a').click(function(){
        $('.tabs li a').removeClass('active');
        $(this).addClass('active');
        $('.tabs-content').hide();  
        
        var activeTab=$(this).attr('href');       
        $(activeTab).fadeIn();    
        return false;
    });
    
    $('.tabs1 li a').click(function(){
        $('.tabs1 li a').removeClass('active');
        $(this).addClass('active');
        $('.tabs-content1').hide();  
        
        var activeTab=$(this).attr('href');       
        $(activeTab).fadeIn();
        return false;       
    });
})