/*
* --Square Slider--
*  Copyright (c) 2012 Saeed Saedi
*/

$(function(){

	/*Slide show.....................................................................................................*/

		//Option ||
		var width =600, // width of picture (slide)
		height    =300, //height of picture (slide)
		effect    = 'rnd', //Effect of slider | Can be 1 , 2 , 3 , 4 or "rnd"
		APspeed   = 5000, //Auto Play speed | defult : 5000 ms
		EF1S      = 100, //Effect 1 speed | defult : 100ms
		EF2S      = 50,	//Effect 2 speed | defult : 50ms
		EF3S      = 100,//Effect 3 speed | defult : 100ms
		EF4S      = 1000, //Effect 4 speed | defult : 1000ms
		//Option ||
	/*...............................................................................................................*/
	/* Other var! */
		part      = $('div.slidebar div'),
		li        = $('div.selector li'),
		slideshow = $('div.slideshow'),
		arrow     = $('div.container-slideshow div.previous,div.container-slideshow div.next'),
		ul        = $('div.selector ul'),
		cr        = 0,
		AP        = false;
	/*...............................................................................................................*/
	/* Set Css height for slide */
	$('div.slideshow div.selector').css({
		width:width-20+'px'
	});
	$('div.container-slideshow div.slideshow').css({
		width:width+'px'
	});
	$('div.slidebar').css({
		width:width+'px',
		height:height+'px'
	});
	$('div.slidebar div').css({
		width:(width/8)+'px',
		height:(height/4)+'px'
	});
	$('div.slideshow div.selector').css({
		top:(height-20)+'px'
	});
	/*...............................................................................................................*/
	/*Set Background Position of each part*/
	ul.css({width:Length*20+'px'})

	part.each(function(i){
		if(i<32){
			$(this).css({backgroundPosition:(i)*(-width/8)+"px "+((-height/4)*3)+"px"});
		};
		if(i<24){
			$(this).css({backgroundPosition:(i)*(-width/8)+"px "+((-height/4)*2)+"px"});
		};
		if(i<16){
			$(this).css({backgroundPosition:(i)*(-width/8)+"px "+((-height/4)*1)+"px"});
		};
		if(i<8){
			$(this).css({backgroundPosition:(i)*(-width/8)+"px 0px"});
		};
	});
	/*...............................................................................................................*/
	/*Change Background (Slide Effect !!!)*/
	ChangeBG = function(n){
		
		rndArray = Array();
		for(i=0;i<32;i++){
			rndArray[i]=i;
		};
		rndArray.sort(function(a,b){
			return Math.random() - 0.5;
		});

		function rnd(a,b){
			return Math.floor(Math.random()*(b-a+1))+a;	
		};

		if(effect == 'rnd'){
			effect = rnd(10,13);
		};
		/*Slide Effect1*/
		if(effect == 1 || effect == 10){
			for(j=0;j<32;j++){
				part.eq(rndArray[j]).css( { opacity:'0' });
				part.eq(rndArray[j]).css( { backgroundImage:'url('+path[n]+')' });
				part.eq(rndArray[j]).animate( { opacity:'1' }, { queue:false, duration:j*EF1S} );

			};
			if(effect == 10) effect = 'rnd';
		};
		/*Slide Effect2*/
		if(effect == 2 || effect == 11){
			function animation(j){
				part.eq(rndArray[j]).css({backgroundImage:'url('+path[n]+')'});
			};
			setTimeout(function(){animation(0);},0*EF2S);setTimeout(function(){animation(1);},1*EF2S);setTimeout(function(){animation(2);},2*EF2S);setTimeout(function(){animation(3);},3*EF2S);setTimeout(function(){animation(4);},4*EF2S);setTimeout(function(){animation(5);},5*EF2S);setTimeout(function(){animation(6);},6*EF2S);setTimeout(function(){animation(7);},7*EF2S);setTimeout(function(){animation(8);},8*EF2S);setTimeout(function(){animation(9);},9*EF2S);setTimeout(function(){animation(10);},10*EF2S);setTimeout(function(){animation(11);},11*EF2S);setTimeout(function(){animation(12);},12*EF2S);setTimeout(function(){animation(13);},13*EF2S);setTimeout(function(){animation(14);},14*EF2S);setTimeout(function(){animation(15);},15*EF2S);setTimeout(function(){animation(16);},16*EF2S);setTimeout(function(){animation(17);},17*EF2S);setTimeout(function(){animation(18);},18*EF2S);setTimeout(function(){animation(19);},19*EF2S);setTimeout(function(){animation(20);},20*EF2S);setTimeout(function(){animation(21);},21*EF2S);setTimeout(function(){animation(22);},22*EF2S);setTimeout(function(){animation(23);},23*EF2S);setTimeout(function(){animation(24);},24*EF2S);setTimeout(function(){animation(25);},25*EF2S);setTimeout(function(){animation(26);},26*EF2S);setTimeout(function(){animation(27);},27*EF2S);setTimeout(function(){animation(28);},28*EF2S);setTimeout(function(){animation(29);},29*EF2S);setTimeout(function(){animation(30);},30*EF2S);setTimeout(function(){animation(31);},31*EF2S);
			if(effect == 11) effect = 'rnd';
		};
		/*Slide Effect3*/
		if(effect == 3 || effect == 12){
			for(j=0;j<32;j++){
				part.eq(j).css( { opacity:'0' });
				part.eq(j).css( { backgroundImage:'url('+path[n]+')' });
				part.eq(j).animate( { opacity:'1' }, { queue:false, duration:j*EF3S} );
			};
			if(effect == 12) effect = 'rnd';
		};
		/*Slide Effect4*/
		if(effect == 4 || effect == 13){
			for(j=0;j<32;j++){
				part.eq(j).css( { opacity:'0' });
				part.eq(j).css( { backgroundImage:'url('+path[n]+')' });
				part.eq(j).animate( { opacity:'1' }, { queue:false, duration:EF4S} );
			};
			if(effect == 13) effect = 'rnd';
		};
		
	};
	/*...............................................................................................................*/
	/*Selector bottom*/
	li.each(function(i){
		$(this).click(function(){
			gotopic(i);
		});
	});
	(gotopic = function(n){
		if(n>Length-1) n =0;
		if(n<0) n        =Length-1;
		li.eq(cr).removeClass('active');
		li.eq(n).addClass('active');
		ChangeBG(n);
		cr               = n;
	})(0);

	previouspic = function(){
		gotopic(cr-1);
	};
	nextpic = function(){
		gotopic(cr+1);
	};
	/*...............................................................................................................*/
	//AutoPlay
	APstart = function(){
		if(AP) return;
		AP = setInterval(nextpic,APspeed);
	};
	APstop = function(){
		clearInterval(AP);
		AP = false;
	};

	slideshow.mouseover(function(){
		APstop();
	});

	slideshow.mouseout(function(){
		APstart();
	});

	arrow.mouseover(function(){
		APstop();
	});

	arrow.mouseout(function(){
		APstart();
	});
	

	APstart();
	/*...............................................................................................................*/
	/*Slide show.....................................................................................................*/
});



      
