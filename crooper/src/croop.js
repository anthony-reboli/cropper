<script type="text/javascript">
		$(function($){
			$("input[name='img']").on("change",function(){
				var image = document.getElementById('image')
				var files = $(this)[0].files
				var file = files[0]
				$("#image").attr("src",window.URL.createObjectURL(file))
				var cropper = new Cropper(image,
				{
					aspectRatio:4/3
				})
				cropper.crop()
				$("button").on("click",function()
				{

						cropper.getCroppedCanvas().toBlob(function(blob)
						{

							var formData = new FormData();
							formData.append("croppedImage", blob);
							
							
							$.ajax({
										type:"POST",
							 			url:"../crop/img/crop.php",
							 			data:formData,
							 			processData:false,
							 			contentType:false,
									  

									}).done(function(data) {
									   console.log(data);
									   console.log('rentre');
									});
							
						})


				})
			})
			
		})


	</script>