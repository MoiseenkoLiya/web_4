

function dyn(test){
BodyJS = [$("div#BodyImgText"),$('img#Img_body'),$('img#Img_body1'),$('p#text_body'),$('p#txt_body'),$('p#w_body'),$('p#txt_body1'),$('p#w_body1')];
	BodyJS[0].text( nameOsnova[test]);
	BodyJS[1].attr("src",ImgOsnova[test]);
	BodyJS[2].attr("src",ImgOsnova1[test]);
	BodyJS[3].text( TextOsnova [test]);
	BodyJS[4].text( txtOsnova[test]);
	BodyJS[5].text(wOsnova[test]);
	BodyJS[6].text(txtOsnova1[test]);
	BodyJS[7].text( wOsnova1 [test]);
}
