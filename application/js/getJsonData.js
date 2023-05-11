$(document).ready(function () {
	$.getJSON("ReaddbImages", function (jsonObj) {
		console.log(jsonObj);

		$('#image1').attr('src', jsonObj.images[0].imageURL);
		$('#image2').attr('src', jsonObj.images[1].imageURL);
		$('#image3').attr('src', jsonObj.images[2].imageURL);

		$('#title1').html('<h2>' + jsonObj.images[0].title + '<h2>');
		$('#content1').html('<h3>' + jsonObj.images[0].content + '</h3>');

		$('#title2').html('<h2>' + jsonObj.images[1].title + '<h2>');
		$('#content2').html('<h3>' + jsonObj.images[1].content + '</h3>');

		$('#title3').html('<h2>' + jsonObj.images[2].title + '<h2>');
		$('#content3').html('<h3>' + jsonObj.images[2].content + '</h3>');

	});

	$.getJSON('../application/model/data.json', function(jsonObj) {
		console.log(jsonObj);
		//Get the coke main text data
		$('#x3dModelTitle_coke').html('<h2>' + jsonObj.pageTextData[0].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_coke').html('<p>' + jsonObj.pageTextData[0].x3dCreationMethod + '<p>');
		$('#title_coke').html('<h2>' + jsonObj.pageTextData[0].title + '<h2>');
		$('#subTitle_coke').html('<h3>' + jsonObj.pageTextData[0].subTitle + '</h3>');
		$('#description_coke').html('<p>' + jsonObj.pageTextData[0].description + '</p>');

		//Get the sprite main text data
		$('#x3dModelTitle_sprite').html('<h2>' + jsonObj.pageTextData[1].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_sprite').html('<p>' + jsonObj.pageTextData[1].x3dCreationMethod + '<p>');
		$('#title_sprite').html('<h2>' + jsonObj.pageTextData[1].title + '<h2>');
		$('#subTitle_sprite').html('<h3>' + jsonObj.pageTextData[1].subTitle + '</h3>');
		$('#description_sprite').html('<p>' + jsonObj.pageTextData[1].description + '</p>');

		//Get the pepper main text data
		$('#x3dModelTitle_pepper').html('<h2>' + jsonObj.pageTextData[2].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_pepper').html('<p>' + jsonObj.pageTextData[2].x3dCreationMethod + '<p>');
		$('#title_pepper').html('<h2>' + jsonObj.pageTextData[2].title + '<h2>');
		$('#subTitle_pepper').html('<h3>' + jsonObj.pageTextData[2].subTitle + '</h3>');
		$('#description_pepper').html('<p>' + jsonObj.pageTextData[2].description + '</p>');

		//Get the gallery contents data
		$('.title_gallery').html('<h2>' + jsonObj.pageTextData[3].galleryTitle + '<h2>');
		$('.description_gallery').html('<p>' + jsonObj.pageTextData[3].galleryDescription + '</p>');

		//Get camera contnets data
		$('.x3dCameraTitle').html('<h2>' + jsonObj.pageTextData[4].CameraTitle + '<h2>');
		$('.x3dCameraSubtitle').html('<p>' + jsonObj.pageTextData[4].CameraSubtitle + '<p');

	});

});